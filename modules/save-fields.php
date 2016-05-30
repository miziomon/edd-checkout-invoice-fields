<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// store the custom field data in the payment meta
add_filter('edd_payment_meta', function ($payment_meta) {

    // sanitize string - http://codex.wordpress.org/Validating_Sanitizing_and_Escaping_User_Data

    $payment_meta['vat'] = isset( $_POST['edd_vat'] ) ? sanitize_text_field( $_POST['edd_vat'] ) : '';
    $payment_meta['fc'] = isset( $_POST['edd_fc'] ) ? sanitize_text_field( $_POST['edd_fc'] ) : '';
    $payment_meta['address'] = isset( $_POST['edd_address'] ) ? sanitize_text_field( $_POST['edd_address'] ) : '';
    $payment_meta['company'] = isset( $_POST['edd_company'] ) ? sanitize_text_field( $_POST['edd_company'] ) : '';
    
    return $payment_meta;
    
    
});
