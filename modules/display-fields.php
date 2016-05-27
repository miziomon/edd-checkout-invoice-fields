<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// show the custom fields in the "View Order Details" popup

add_action('edd_payment_personal_details_list', function ($payment_meta, $user_info) {
	$vat = isset($payment_meta['vat']) ? $payment_meta['vat'] : 'none';
    $fc = isset($payment_meta['fc']) ? $payment_meta['fc'] : 'none';
    $address = isset($payment_meta['address']) ? $payment_meta['address'] : 'none';
	$company = isset($payment_meta['company']) ? $payment_meta['company'] : 'none';	
	?>
    <li><?php echo __('FC:', 'pippin') . ' ' . $fc; ?></li>
	<li><?php echo __('VAT:', 'pippin') . ' ' . $vat; ?></li>
    <li><?php echo __('Address:', 'pippin') . ' ' . $address; ?></li>
	<li><?php echo __('Company:', 'pippin') . ' ' . $company; ?></li>
	<?php
}, 10, 2);
