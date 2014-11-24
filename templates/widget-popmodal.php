<?php
/*
 * Name: Modal Login Form
 * Description: Displays a login link, when clicked it shows a modal login form
 * Type: Login
 * 
 * Instructions for modifying this template
 * 
 * DO NOT MODIFY THE ABOVE HEADERS, OR IT WILL STOP WORKING
 * Create a folder inside your active theme directory named ultimate_ajax_login and paste this inside it
 * 
 * 
 * Feel free to move things around as you wish, but keep the IDs for the fields as they are
 */

/* 
 * Copyright (C) 2014 Samer Bechara <sam@thoughtengineer.com>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

// Create new template object
$ual = new UAL_Template();

?>

<script type="text/javascript">
    
    jQuery(document).ready(function($) {
	
	jQuery("#ual_link_<?php $ual->form_id(); ?>").click(function() {
	    
	    // Show div when modal button opens
	    jQuery('#ual_div_<?php $ual->form_id(); ?>').show();
	    
	    // Open popmodal object
	    jQuery("#ual_link_<?php $ual->form_id(); ?>").popModal({

		html: jQuery('#ual_div_<?php $ual->form_id(); ?>'),
		/*onOkBut: function() {	
		    jQuery('#ual_div_<?php $ual->form_id(); ?>').submit();
		},*/
		onClose: function() {
		    // Hide div when modal button closes
		    jQuery('#ual_div_<?php $ual->form_id(); ?>').hide();	    
		}    
	    });
	
	});
	
	
    });
    
</script>

<!-- Login button code -->
<button id="ual_link_<?php $ual->form_id(); ?>"><?php _e('Login Here'); ?></button>

<!-- Forms Dialog Div -->
<div id="ual_div_<?php $ual->form_id(); ?>" style='display:none'>
    
    <!-- Login form -->
    <form id='ual_form_<?php $ual->form_id(); ?>' class='ual_form' method='post'>
    <div class='ual_form_item'>
	<label for='ual_username_<?php $ual->form_id(); ?>'><?php echo _e('Username'); ?></label><br/>
	<input type="text" id='ual_username_<?php $ual->form_id(); ?>' name='ual_username' class='ual_field ual_username'/>
    </div>
    <div class='ual_form_item'>
	<label for='ual_password_<?php $ual->form_id(); ?>'><?php echo _e('Password'); ?></label><br/>
	<input type='password' id='ual_password_<?php $ual->form_id(); ?>' name='ual_password' class='ual_field ual_password'/>
    </div>
    <div class='ual_form_item'>
	<input type='checkbox' id='ual_remember_me_<?php $ual->form_id(); ?>' name='ual_remember_me' checked='checked' />
	<label for='ual_remember_me_<?php $ual->form_id(); ?>'><?php echo _e('Remember me'); ?></label>	
    </div>
    <div class='ual_item ual_error error' id='ual_error_<?php $ual->form_id(); ?>'></div>
    <div class='ual_item'>
	<input type="hidden" name='form_id' value="<?php $ual->form_id(); ?>" />
	<input type='submit' class='ual_field ual_button' value='<?php echo _e('Login'); ?>'/>
    </div>
</form>


<!-- Forgot Password Form -->

<form id="ual_forgot_form_<?php echo $ual->form_id();?>" method="POST" style="display:none">
    
    <label for='ual_fg_username_<?php $ual->form_id(); ?>'><?php _e('Enter your email address or username');?></label>        
   
    <input type='text' name='user_login' id='ual_fg_username_<?php $ual->form_id(); ?>' value='' />
    <?php do_action('lostpassword_form'); ?>
    
    <div class='ual_item ual_error error' id='ual_forgot_error_<?php $ual->form_id(); ?>'></div>
    <input type="hidden" name='form_id' value="<?php $ual->form_id(); ?>" />
    <input type="submit" value="<?php _e("Get New Password"); ?>" />
    <a href="#" class='ual_forgot_form_cancel'><?php _e("Cancel"); ?></a>    
</form>

<!-- End of jQuery Dialog Box -->
</div>
