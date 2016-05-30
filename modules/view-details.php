<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// show the custom fields in the "View Order Details" popup


add_action('edd_payment_view_details', function ( $payment_id ) {

    //$user_info = edd_get_payment_meta_user_info( $payment_id );
    $payment_meta = edd_get_payment_meta($payment_id);

    ?>

    <div class="column-container">
        <hr>
        <div class="column">
            <p>
                <strong><?php _e('Company Name', 'edd_cif'); ?></strong>: <?php esc_attr_e($payment_meta['company']); ?><br/>
                <strong><?php _e('Full address', 'edd_cif'); ?></strong>: <?php esc_attr_e($payment_meta['address']); ?><br/>
                <strong><?php _e('VAT', 'edd_cif'); ?></strong>: <?php esc_attr_e($payment_meta['vat']); ?><br/>
                <strong><?php _e('Fiscal code', 'edd_cif'); ?></strong>: <?php esc_attr_e($payment_meta['fc']); ?>
            </p>
        </div>

    </div>

    <?php
});

