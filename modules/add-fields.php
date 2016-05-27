<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



// output our custom field HTML

add_action('edd_purchase_form_user_info', function () {
	?>
    <p>
    	<label class="edd-label" for="edd-company"><?php _e('Ragione Sociale', 'edd_checkout_vat'); ?><span class="edd-required-indicator">*</span></label>
        <span class="edd-description"><?php _e('Il nome della tua società', 'edd_checkout_vat'); ?></span>
		<input class="edd-input required" name="edd_company" id="edd-company" placeholder="<?php _e('Ragione Sociale', 'edd_checkout_vat'); ?>" value="" type="text" required>
    </p>
    <p>
    	<label class="edd-label" for="edd-vat"><?php _e('Partita IVA', 'edd_checkout_vat'); ?><span class="edd-required-indicator">*</span></label>
        <span class="edd-description"><?php _e('Inserisci la tua partita iva per la fatturazione', 'edd_checkout_vat'); ?></span>
		<input class="edd-input required" name="edd_vat" id="edd-vat" placeholder="<?php _e('Partita IVA', 'edd_checkout_vat'); ?>" value="" type="text" >
    </p>
   <p>
    	<label class="edd-label" for="edd-fc"><?php _e('Codice Fiscale', 'edd_checkout_vat'); ?><span class="edd-required-indicator">*</span></label>
        <span class="edd-description"><?php _e('Nel caso tu sia un privato inserisci il tuo Codice Fiscale', 'edd_checkout_vat'); ?></span>
		<input class="edd-input required" name="edd_fc" id="edd-fc" placeholder="<?php _e('Codice Fiscale', 'edd_checkout_vat'); ?>" value="" type="text" >
    </p>    
    <p>
    	<label class="edd-label" for="edd-address"><?php _e('Indirizzo completo', 'edd_checkout_vat'); ?><span class="edd-required-indicator">*</span></label>
        <span class="edd-description"><?php _e('Indica il tuo indirizzo completo completo di CAP Città e provincia', 'edd_checkout_vat'); ?></span>
		<input class="edd-input required" name="edd_address" id="edd-address" placeholder="<?php _e('Indirizzo completo', 'edd_checkout_vat'); ?>" value="" type="text" required>
    </p>
    <!--
	<p>
		<input class="edd-input required" type="text" name="edd_phone" id="edd-phone" placeholder="<?php _e('Phone Number', 'edd_checkout_vat'); ?>" value=""/>
		<label class="edd-label" for="edd-phone"><?php _e('Phone Number', 'edd'); ?></label>
	</p>
	<p>
		<input class="edd-input" type="text" name="edd_company" id="edd-company" placeholder="<?php _e('Company name', 'edd_checkout_vat'); ?>" value=""/>
		<label class="edd-label" for="edd-company"><?php _e('Company Name', 'edd'); ?></label>
	</p>-->
	<?php
});


