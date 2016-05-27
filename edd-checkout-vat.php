<?php
/*
  Plugin Name: EDD Checkout VAT
  Version: 0.1
  Description: Add extra info for italian law to checkoutpage
  Author: Mavida
  Author URI: http://www.mavida.com
 */


$plugin_slug = "EDD_CV";

define( $plugin_slug . '_PATH', plugin_dir_path(__FILE__));
define( $plugin_slug . '_URL', plugin_dir_url(__FILE__));


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