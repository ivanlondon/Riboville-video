<?php

namespace Drupal\bee_hotel\Access;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Routing\Access\AccessInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\node\Entity\Node;

class BeeAddReservationAccessCheck implements AccessInterface {

  /**
   * The entity manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Constructs a BeeAddReservationAccessCheck object.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_manager
   *   The entity manager.
   */
  public function __construct(EntityTypeManagerInterface $entity_manager) {
    $this->entityTypeManager = $entity_manager;
  }

  /**
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The currently logged in account.
   *
   * @return string
   *   A \Drupal\Core\Access\AccessInterface constant value.
   */
  public function access(AccountInterface $account, Node $node = NULL) {
    $bee_hotel_settings = \Drupal::config('node.type.' . $node->bundle())->get('bee_hotel');

    if (isset($bee_hotel_settings['bookable']) && $bee_hotelf_settings['bookable']) {
      if (\Drupal::currentUser()->hasPermission('create bee_hotel reservation')) {
        return AccessResult::allowed();
      }
    }

    return AccessResult::forbidden();
  }
}
