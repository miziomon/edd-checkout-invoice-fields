<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// store the custom field data in the payment meta
add_filter('edd_payment_meta', function ($payment_meta) {

    // sanitize string 
    // http://codex.wordpress.org/Validating_Sanitizing_and_Escaping_User_Data
    $vat = sanitize_text_field($_POST['edd_vat']);
    $fc = sanitize_text_field($_POST['edd_fc']);
    $address = sanitize_text_field($_POST['edd_address']);
    $company = sanitize_text_field($_POST['edd_company']);

    //add meta
    $payment_meta['vat'] = isset($vat) ? $vat : '';
    $payment_meta['fc'] = isset($fc) ? $fc : '';
    $payment_meta['address'] = isset($address) ? $address : '';
    $payment_meta['company'] = isset($company) ? $company : '';

    return $payment_meta;
});
