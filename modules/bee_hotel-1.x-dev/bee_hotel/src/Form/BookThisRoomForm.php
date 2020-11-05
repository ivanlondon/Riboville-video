<?php

namespace Drupal\bee_hotel\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\node\NodeInterface;
use Drupal\node\Entity\Node;
use Drupal\office_hours\OfficeHoursDateHelper;


class BookThisRoomForm  extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'bee_hotel_book_this_room_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, NodeInterface $node = NULL) {

    $bee_settings = \Drupal::config('node.type.' . $node->bundle())->get('bee');

    $today = new \DateTime();

    $tomorrow = clone($today);
    $tomorrow->modify('+1 day');

    $one_hour_later = clone($today);
    $one_hour_later->modify('+1 hour');

    $form['node'] = [
      '#type' => 'hidden',
      '#value' => $node->id(),
    ];

    $form['checkin'] = [
      '#type' => ($bee_settings['bookable_type'] == 'daily') ? 'date' : 'datetime',
      '#title' => t('Check-in'),
      '#default_value' => ($bee_settings['bookable_type'] == 'daily') ? $today->format('Y-m-d') : new DrupalDateTime($today->format('Y-m-d H:00')),
      '#date_increment' => 60,
    ];

    $form['checkout'] = [
      '#type' => ($bee_settings['bookable_type'] == 'daily') ? 'date' : 'datetime',
      '#title' => t('Check-out'),
      '#default_value' => ($bee_settings['bookable_type'] == 'daily') ? $tomorrow->format('Y-m-d') : new DrupalDateTime($one_hour_later->format('Y-m-d H:00')),
      '#date_increment' => 60,
    ];

    $product_field    = $node->get('field_product')->getValue();
    $pid              = $product_field[0]['target_id'];

    /*Load Product*/
    $product = \Drupal\commerce_product\Entity\Product::load((int)$pid);

    /*Load Product Variations*/
    $entity_manager = \Drupal::entityManager();
    $variations = $product->getVariationIds();

    $options = Array();
    foreach ($variations as $v) {
      $product_variation = $entity_manager->getStorage('commerce_product_variation')->load((int)$v);
      $sku    = $product_variation->get('sku')->get(0)->value;

      if ($product_variation->get('status')->get(0)->value == 1)  {
        $options[$sku]= $product_variation->get('title')->get(0)->value;
      }
    }

    $form['guests'] = [
      '#type' => 'select',
      '#title' => $this->t('Guests'),
      '#options' => $options,
    ];

    $form['pid'] = [
      '#type' => 'hidden',
      '#value' => $pid,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => t('Check availability'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

    $values = $form_state->getValues();
    $node = Node::load($values['node']);
    $bee_settings = \Drupal::config('node.type.' . $node->bundle())->get('bee');

    $checkin    = $values['checkin'];
    $checkout   = $values['checkout'];

    if ($bee_settings['bookable_type'] == 'daily') {
      $checkin = new \DateTime($checkin);
      $checkout = new \DateTime($checkout);
    }

    $date_checkin  = $checkin->format('Y-m-d');
    $date_checkout = $checkout->format('Y-m-d');

    $dates_valid = TRUE;

    if ($bee_settings['bookable_type'] == 'hourly') {
      // Validate the input dates.
      if (!$checkin instanceof DrupalDateTime) {
        $form_state->setErrorByName('checkin', $this->t('Check-in date is not valid.'));
        $dates_valid = FALSE;
      }
      if (!$checkout instanceof DrupalDateTime) {
        $form_state->setErrorByName('checkout', $this->t('Check-out date is not valid.'));
        $dates_valid = FALSE;
      }
    }



    if ($dates_valid) {

      // Basic date validation
      if ($checkout <= $checkin) {
        $form_state->setErrorByName('checkout', $this->t('One day staying or more is requested. Please check dates you selected'));
        return;
      }

      // @TODO Search checkin date before today
      elseif (1==2)  {
        $form_state->setErrorByName('checkin', $this->t('We only accept reservation from tomorrow  \$TODAY. Please get in touch via phone if you urge a Room for tonight'));
        return;
      }

      $available_units = $this->getAvailableUnits($values);
      if (empty($available_units)) {
        $form_state->setError($form, t('Sorry, no Room available now'));
      }
    }
  }


  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();

    $node = Node::load($values['node']);
    $checkin  = $values['checkin'];
    $checkout = $values['checkout'];
    $pid      = $values['pid'];
    $guests   = $values['guests'];

    $bee_settings = \Drupal::config('node.type.' . $node->bundle())->get('bee');

    if ($bee_settings['bookable_type'] == 'daily') {
      $checkin = new \DateTime($checkin);
      $checkout = new \DateTime($checkout);
    }
    else {
      $checkin = new \DateTime($checkin->format('Y-m-d H:i'));
      $checkout = new \DateTime($checkout->format('Y-m-d H:i'));
    }

    if ($bee_settings['payment']) {
      $booking = bat_booking_create([
        'type' => 'bee',
        'label' => $node->label(),
      ]);
      $booking->set('booking_start_date', $checkin->format('Y-m-d\TH:i:s'));
      $booking->set('booking_end_date', $checkout->format('Y-m-d\TH:i:s'));
      $booking->save();

      $product = $node->get('field_product')->entity;

      $stores = $product->getStores();
      $store = reset($stores);


      /*Load Product*/
      $product = \Drupal\commerce_product\Entity\Product::load((int)$pid);

      /*Load Product Variations*/
      $entity_manager = \Drupal::entityManager();
      $variations = $product->getVariationIds();

      $options = Array();
      foreach ($variations as $v) {

        $product_variation = $entity_manager->getStorage('commerce_product_variation')->load((int)$v);


        $sku = $product_variation->get('sku')->get(0)->value;
        $my_variation = Array();
        if ( $sku == $guests ) {
          $my_variation['price']      = $product_variation->getPrice();
          $my_variation['title']      = $product_variation->get('title')->get(0)->value;
          $my_variation['variant_id'] = $product_variation->get('variation_id')->get(0)->value;
          break;
        }
      }


      // Nights
      $minutes = ($checkout->getTimestamp() - $checkin->getTimestamp())/ 60;
      $hours   = $minutes     / 60;
      $nights  = $hours       / 24;

      $cart_manager  = \Drupal::service('commerce_cart.cart_manager');
      $cart_provider = \Drupal::service('commerce_cart.cart_provider');

      $cart = $cart_provider->getCart('default', $store);

      if (!$cart) {
        $cart = $cart_provider->createCart('default', $store);
      }
      else {
        $cart_manager->emptyCart($cart);
      }

      $order_item = \Drupal::entityTypeManager()->getStorage('commerce_order_item')->create([
        'title'            => $node->label(),
        'type'             => 'bee',
        'purchased_entity' => $my_variation['variant_id'],
        'quantity'         => $nights,
        'unit_price'       => $my_variation['price'],
      ]);
      $order_item->set('field_booking', $booking);
      $order_item->set('field_node', $node);
      $order_item->set('field_check_in' ,  [$checkin->format('Y-m-d\TH:i:s')]);
      $order_item->set('field_check_out', [$checkout->format('Y-m-d\TH:i:s')]);
      $order_item->save();
      $cart_manager->addOrderItem($cart, $order_item);
      $form_state->setRedirect('commerce_cart.page', ['commerce_order' => $cart->id()]);
    }
  }

  /**
   * Get available Units.
   *
   * @param $values
   *
   * return array
   */
   protected function getAvailableUnits($values) {
     $node = Node::load($values['node']);
     $checkin = $values['checkin'];
     $checkout = $values['checkout'];
     $bee_settings = \Drupal::config('node.type.' . $node->bundle())->get('bee');

    $units_ids = [];
    foreach ($node->get('field_availability_' . $bee_settings['bookable_type']) as $unit) {
      if ($unit->entity) {
        $units_ids[] = $unit->entity->id();
      }
    }

    if ($bee_settings['bookable_type'] == 'daily') {
      $checkin = new \DateTime($checkin);
      $checkout = new \DateTime($checkout);
      $checkout->sub(new \DateInterval('PT1M'));
      $available_units_ids = bat_event_get_matching_units($checkin, $checkout, ['bee_daily_available'], $bee_settings['type_id'], 'availability_daily');
    }
    
    // >>> do we really need this here?
    else {
      $checkin = new \DateTime($checkin->format('Y-m-d H:i'));
      $checkout = new \DateTime($checkout->format('Y-m-d H:i'));
      $checkout->sub(new \DateInterval('PT1M'));
      $available_units_ids = bat_event_get_matching_units($checkin, $checkout, ['bee_hourly_available'], $bee_settings['type_id'], 'availability_hourly');
    }
    /// <<<
    return array_intersect($units_ids, $available_units_ids);
  }
}
