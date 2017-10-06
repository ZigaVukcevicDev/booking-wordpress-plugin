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

  function bwp_prepare_table() {
    global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();
  	$table_name = $wpdb->prefix . 'bwp';

    $sql = "CREATE TABLE $table_name (
      id int(9) NOT NULL AUTO_INCREMENT,
      url varchar(55) DEFAULT '' NOT NULL,
      PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    echo $wpdb->last_error;
    die();
  }

  function bwp_deactivate() {
    var_dump('deactivated');
  }

  function bwp_unistall() {
    var_dump('uninstall');
  }

  // Using hooks to register plugin function to be run on plugin
  // activation, deactivation and uninstall

  register_activation_hook(__FILE__, 'bwp_prepare_table');
  register_deactivation_hook(__FILE__, 'bwp_deactivate');
  register_uninstall_hook(__FILE__, 'bwp_unistall');
