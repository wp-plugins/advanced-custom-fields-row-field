<?php
/*
Plugin Name: Advanced Custom Fields: Row Field
Plugin URI: http://www.nilambar.net
Description: Add-on to Advanced Custom fields for showing multiple ACF fields in a single row.
Version: 1.0.0
Author: Nilambar Sharma
Author URI: http://www.nilambar.net
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

  // only include add-on once
  if( !function_exists('acf_register_row_field') ):


    function acf_register_row_field()
    {
      require_once('acf-row-v4.php');
    }
    // add action to include field
    add_action('acf/register_fields', 'acf_register_row_field');


    function load_textdomain_acf_row() {
      load_plugin_textdomain( 'acf-row', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
    }
    add_action( 'plugins_loaded', 'load_textdomain_acf_row' );

  endif;
