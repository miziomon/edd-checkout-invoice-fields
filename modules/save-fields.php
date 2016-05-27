<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// store the custom field data in the payment meta
add_filter('edd_payment_meta',  function ($payment_meta) {
	$payment_meta['vat'] = isset($_POST['edd_vat']) ? $_POST['edd_vat'] : '';
    $payment_meta['fc'] = isset($_POST['edd_fc']) ? $_POST['edd_fc'] : '';
    $payment_meta['address'] = isset($_POST['edd_address']) ? $_POST['edd_address'] : '';
	$payment_meta['company'] = isset($_POST['edd_company']) ? $_POST['edd_company'] : '';
	return $payment_meta;
});
