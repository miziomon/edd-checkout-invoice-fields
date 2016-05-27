<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VatValidator
 *
 * @author maurizio
 */
class CompanyValidator
{

    //put your code here

    function __construct()
    {
        
    }

    public function validate($data)
    {
        if (!isset($data['edd_company']) || $data['edd_company'] == '') {

            edd_set_error('invalid_company', __('You must provide a valid value.', 'pippin_edd'));
        }
    }
}
