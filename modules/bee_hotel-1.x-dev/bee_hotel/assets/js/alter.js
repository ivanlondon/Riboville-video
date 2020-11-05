(function($, Drupal) {
  Drupal.behaviors.bbe_hotel = {
    attach: function(context, settings) {

      //no need of BEE default reservation
      $("a[data-drupal-link-system-path*='add-reservation']" ).hide();


    }
  };
}(jQuery, Drupal));
