<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// check for errors with out custom fields
add_action('edd_checkout_error_checks', function ($data) {
    
    
    $CompanyValidator = new CompanyValidator();
    $CompanyValidator->validate($data);

    if (!isset($data['edd_vat']) || $data['edd_vat'] == '') {

        edd_set_error('invalid_vat', __('You must provide a valid value.', 'pippin_edd'));
    }

    if (!isset($data['edd_fc']) || $data['edd_fc'] == '') {

        edd_set_error('invalid_fc', __('You must provide a valid value.', 'pippin_edd'));
    }    
    
    if (!isset($data['edd_address']) || $data['edd_address'] == '') {

        edd_set_error('invalid_address', __('You must provide a valid value.', 'pippin_edd'));
    }
});
