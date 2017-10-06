<?php
   /*
   Plugin Name: Booking Wordpress Plugin
   Plugin URI: http://www.booking-wordpress-plugin.com
   Description: Plugin capable of request booking through simple form.
   Version: 0.1
   Author: Žiga Vukčevič
   Author URI: http://www.be-codified.com
   License: GPL2
   */

  function bwp_activate() {
    var_dump('activated');
  }

  function bwp_deactivate() {
    var_dump('deactivated');
  }

  function bwp_unistall() {
    var_dump('uninstall');
  }

  // Using hooks to register plugin function to be run on plugin
  // activation, deactivation and uninstall

  register_activation_hook(__FILE__, 'bwp_activate');
  register_deactivation_hook(__FILE__, 'bwp_deactivate');
  register_uninstall_hook(__FILE__, 'bwp_unistall');
