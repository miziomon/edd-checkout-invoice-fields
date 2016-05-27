<?php
/*
  Plugin Name: EDD Checkout Invoice Fields 
  Version: 0.1
  Description: Add extra field in checkout page needed for invoice
  Author: miziomon
  Author URI: http://maurizio.mavida.com
 */


$plugin_slug = "EDD_CIF";

define( $plugin_slug . '_PATH', plugin_dir_path(__FILE__));
define( $plugin_slug . '_URL', plugin_dir_url(__FILE__));


// load localizzation
add_action('plugins_loaded', function () {
  load_plugin_textdomain( 'edd_cif', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
});



// autoload
spl_autoload_register(function ($class_name) {
    $class_path = dirname(__FILE__) . '/classes/' . str_replace("_", "/", $class_name) . ".php";
    if (!strrpos($class_path, "WP") && (file_exists($class_path))) {
        //echo "<br />" . $class_path . '   ' . $class_name;
        @include $class_path;
    }
});


// autoload libs
$libs = dirname(__FILE__) . '/modules/';
if (is_readable($libs)) {
    foreach (glob($libs . "*.php") as $file) {
        if (file_exists($file)) {
            @require( $file );
        }
    }
}