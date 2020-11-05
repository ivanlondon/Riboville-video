<?php

namespace Drupal\bee_hotel\Resolvers;

use Drupal\node\Entity\Node;
use Drupal\commerce\Context;
use Drupal\commerce\PurchasableEntityInterface;
use Drupal\commerce_price\Price;
use Drupal\commerce_price\Resolver\PriceResolverInterface;

/**
 * Class SalepriceResolver
 *
 * @package Drupal\bee_hotel\Resolvers
 */
class SalepriceResolver implements PriceResolverInterface {

  /**
   * {@inheritdoc}
   */
  public function resolve(PurchasableEntityInterface $entity, $quantity, Context $context) {
    if ($entity->bundle() != 'bee') {
      return;
    }

    $cart_provider = \Drupal::service('commerce_cart.cart_provider');
    $stores = $entity->getProduct()->getStores();
    $store = reset($stores);

    if (isset($_REQUEST['checkin']) && isset($_REQUEST['checkout']) && $_REQUEST['guests'] )  {
      $data                = Array();
      $data['adults']      = $_REQUEST['guests'][2]; // 3rd digit Variant product is number of Guests
      $data['check_in']    = $_REQUEST['checkin'];
      $data['check_out']   = $_REQUEST['checkout'];
      $data['context']     = $context;
      $data['date']        = time();
      $data['entity']      = $entity;
      $data['nights']      = $quantity;
      $data['sku']         = $_REQUEST['guests'];
      $amount = bee_hotel_dynamic_price($data);
      $price = new Price($amount, $currency_code= "EUR");
      return $price;
    }
  }
}
