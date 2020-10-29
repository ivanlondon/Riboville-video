CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Recommended Modules
 * Installation
 * Configuration
 * Maintainers


INTRODUCTION
------------

BEE Hotel integrates BEE with features required in the most common Hotel use cases.

 * For a full description of the module visit:
   https://www.drupal.org/project/bee_hotel

 * To submit bug reports and feature suggestions, or to track changes visit:
   https://www.drupal.org/project/issues/bee_hotel


REQUIREMENTS
------------

This module requires the following contributed modules.

 * VIEWS - Drupal Core
 * BEE   - https://www.drupal.org/project/bee



RECOMMENDED MODULES
-------------------

 * Commerce - https://www.drupal.org/project/commerce
 * Commerce Pricelist  - https://www.drupal.org/project/commerce_pricelist

INSTALLATION
------------

 * Install the Bookable Entities Everywhere  module as you would normally install a contributed Drupal module. It is highly recommended to use
   composer to install Bee Hotel, as that will fetch all dependencies automatically.
   See https://www.drupal.org/project/bat#no-composer if not using composer.
   Visit https://www.drupal.org/node/1897420 for further information.


CONFIGURATION
-------------

. Global Configuration

    . Navigate to Administration > Extend and enable the module.
    . Configure BEE
    . Configure Content type Bee settings
    . Configure your own  Order type with ID = XXX  at  /admin/commerce/config/order-types/add
    . Configure Commerce generic settings  at /admin/commerce/
    . Configure Commerce Variants. The "number of guests" is a commerce product variant at /admin/commerce/product-attributes
    . Configure Commerce Order item types at /admin/commerce/config/order-item-types
    . Configure Commerce Product variation types summary Display  at /admin/commerce/config/product-variation-types/XXX/edit/display/summary
      The only "Title" field should do fine here
    . Assign max guests per room (TODO)


. Room Configuration

.. Create a Room

    . Create a node at /node/add/room
    . Set up variations (guests) /admin/commerce/products > Variations
    .. Create a  variation per number of Guests your Room can have. Example
    ... SKU : TRG0, Title: 0 Guest, Price 999, Status: Unpublished (Mandatory now, hope to remove this  some day soon)
    ... SKU : TRG1, Title: 1 Guest, Price 60, Status: Published
    ... SKU : TRG2, Title: 2 Guest, Price 70, Status: Published
    ... SKU : TRG3, Title: 3 Guest, Price 80, Status: Published
    .. Save your variations at /product/4/variations
    . Update availability (where necessary) at /node/ID/availability


WISH LIST
---------

    . Form "Book Now" > define max checkout time, charging for extra time
    . Reservation  flow > add upsell page
    . Set a defined amount of money  in commerce_papal to complete the order with a partial payment
    . Add UI for editing OrderDetailsPane content

KNOWN BUGS
----------

    . Permission "Manage availability for all room nodes" required to access to the "Book this Room"  button
    . View commerce_cart_form not exposing button check-in check-out dates correctly stored in DB. Bug

MAINTAINER
-----------

 * Augusto Fagioli(augustofagioli) - https://www.drupal.org/u/augustofagioli

    
