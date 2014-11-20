<?php

/* 
 * Contains the options page for the plugin
 */

// Form has been submitted
if(!empty($_POST)){
    
    // Call static function to save site options
    UAL_Main::save_site_options();
}
?>

<div class="wrap">
<h2>Ultimate AJAX Login Settings</h2>

<form method="post" action="options-general.php?page=ultimate_ajax_login"> 

<?php 

// Generate WP-specific form fields such as nonce field
settings_fields( 'ual-site-options' ); // Must match name in register_site_options_function

// Define the option group here, required by WP
do_settings_sections( 'ual-site-options' );


?>
<table class="form-table">	
        <tr valign="top">
        <th scope="row">Login Redirect URL</th>
        <td><input type='text' name='ual_redirect_login' class='widefat' value='<?php echo get_option('ual_redirect_login')?>' />
	    <p class="description">
		URL to redirect user to after logging in. If left blank, user will stay on current page. If invalid or external URL is entered, it will redirect to dashboard.<br/>Acceptable Values
	    <ol>
		<li><em>/hello-world/</em> or any other relative URL</li>
		<li><em><?php echo site_url('/hello-world/')."</em> or any absolute URL belonging to site";?></li>
		<li>Any other value will redirect to dashboard</li>
	    </ol>
	    </p>	    	    
	</td>
        </tr>		
</table> 
    
<?php
// Submit button
submit_button(); 

?>
</form>
</div>
