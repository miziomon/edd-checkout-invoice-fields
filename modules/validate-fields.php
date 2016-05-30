<?php
/**
 * Set error if phone number field is empty
 * You can do additional error checking here if required
 */
add_action('edd_checkout_error_checks', function ( $valid_data, $data ) {
    
    if( !edd_no_guest_checkout() ) {
		return;
    }
    
    if (empty($data['edd_address'])) {
        edd_set_error('invalid_address', 'Please enter valid Address.', 'edd_cif');
    }
    
    if (empty($data['edd_company'])) {
        edd_set_error('invalid_company', 'Please enter valid Company Name.', 'edd_cif');
    } 
    
    if (empty($data['edd_fc']) ) {
        edd_set_error('invalid_fc', 'Please enter valid Fiscal code.', 'edd_cif');
    } 

    
    $vat_validation = new VatValidator(  $data['edd_vat'] );
    if ( !$vat_validation ) { 
        edd_set_error('invalid_vat', 'Please enter valid VAT', 'edd_cif');
    }
    
  
}, 10, 2);

