<?php

// Default options values
$tt_options = array(
	'logo_url' => '',

	'email_address' => '',
	'twitter_url' => '',
	'facebook_url' => '',
	'google_url' => '',
	'vimeo_url' => '',
	'youtube_url' => '',
	'instagram_url' => '',
	'flickr_url' => '',
	'dribbble_url' => '',
	'pinterest_url' => '',
	'github_url' => '',
	'linkedin_url' => '',
	'author_credits' => true,
);

if ( is_admin() ) :

function tt_register_settings() {
	register_setting( 'tt_theme_options', 'tt_options', 'tt_validate_options' );
}

add_action( 'admin_init', 'tt_register_settings' );

function tt_theme_options() {
	add_theme_page( 'Theme Options', 'Theme Options', 'edit_theme_options', 'theme_options', 'tt_theme_options_page' );
}

add_action( 'admin_menu', 'tt_theme_options' );

function tt_theme_options_page() {
	global $tt_options, $tt_categories, $tt_layouts;

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; ?>

	<div class="wrap">

	<?php echo $theme_name;screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options' ) . "</h1>";?>

	<?php if ( false !== $_REQUEST['updated'] ) : ?>
	<div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
	<?php endif; ?>

	<form method="post" action="options.php">

	<?php $settings = get_option( 'tt_options', $tt_options ); ?>
	
	<?php settings_fields( 'tt_theme_options' ); ?>

	<table class="form-table">

	<tr valign="top"><th scope="row"><label for="logo_url">Logo URL:</label></th>
	<td>
	<input id="logo_url" name="tt_options[logo_url]" type="text" placeholder="http://" value="<?php  esc_attr_e($settings['logo_url']); ?>" />
	<p>Upload logo via <a href="<?php echo get_option('siteurl'); ?>/wp-admin/media-new.php">Add new media</a></p>
	</td>
	</tr>

	<tr valign="top"><th scope="row"><label for="email_address">Email Address:</label></th>
	<td>
	<input id="email_address" name="tt_options[email_address]" type="text" placeholder="mail@tinktank.in" value="<?php  esc_attr_e($settings['email_address']); ?>" />
	</td>
	</tr>
	<tr valign="top"><th scope="row"><label for="twitter_url">Twitter URL:</label></th>
	<td>
	<input id="twitter" name="tt_options[twitter_url]" type="text" placeholder="http://" value="<?php  esc_attr_e($settings['twitter_url']); ?>" />
	</td>
	</tr>
	<tr valign="top"><th scope="row"><label for="facebook_url">Facebook URL:</label></th>
	<td>
	<input id="facebook" name="tt_options[facebook_url]" type="text" placeholder="http://" value="<?php  esc_attr_e($settings['facebook_url']); ?>" />
	</td>
	</tr>
	<tr valign="top"><th scope="row"><label for="google_url">Google+ URL:</label></th>
	<td>
	<input id="Google" name="tt_options[google_url]" type="text" placeholder="http://" value="<?php  esc_attr_e($settings['google_url']); ?>" />
	</td>
	</tr>
	<tr valign="top"><th scope="row"><label for="vimeo_url">Vimeo URL:</label></th>
	<td>
	<input id="vimeo" name="tt_options[vimeo_url]" type="text" placeholder="http://" value="<?php  esc_attr_e($settings['vimeo_url']); ?>" />
	</td>
	</tr>
	<tr valign="top"><th scope="row"><label for="youtube_url">YouTube URL:</label></th>
	<td>
	<input id="youtube" name="tt_options[youtube_url]" type="text" placeholder="http://" value="<?php  esc_attr_e($settings['youtube_url']); ?>" />
	</td>
	</tr>
	<tr valign="top"><th scope="row"><label for="instagram_url">Instagram URL:</label></th>
	<td>
	<input id="instagram" name="tt_options[instagram_url]" placeholder="http://" type="text" value="<?php  esc_attr_e($settings['instagram_url']); ?>" />
	</td>
	</tr>
	<tr valign="top"><th scope="row"><label for="flickr_url">Flickr URL:</label></th>
	<td>
	<input id="flickr" name="tt_options[flickr_url]" placeholder="http://" type="text" value="<?php  esc_attr_e($settings['flickr_url']); ?>" />
	</td>
	</tr>
	<tr valign="top"><th scope="row"><label for="dribbble_url">Dribbble URL:</label></th>
	<td>
	<input id="dribbble" name="tt_options[dribbble_url]" placeholder="http://" type="text" value="<?php  esc_attr_e($settings['dribbble_url']); ?>" />
	</td>
	</tr>
	<tr valign="top"><th scope="row"><label for="pinterest_url">Pinterest URL:</label></th>
	<td>
	<input id="pinterest" name="tt_options[pinterest_url]" placeholder="http://" type="text" value="<?php  esc_attr_e($settings['pinterest_url']); ?>" />
	</td>
	</tr>
	<tr valign="top"><th scope="row"><label for="github_url">Github URL:</label></th>
	<td>
	<input id="github" name="tt_options[github_url]" placeholder="http://" type="text" value="<?php  esc_attr_e($settings['github_url']); ?>" />
	</td>
	</tr>
	<tr valign="top"><th scope="row"><label for="linkedin_url">LinkedIN URL:</label></th>
	<td>
	<input id="linkedin" name="tt_options[linkedin_url]" placeholder="http://" type="text" value="<?php  esc_attr_e($settings['linkedin_url']); ?>" />
	</td>
	</tr>

	<tr valign="top"><th scope="row">Tink Tank Credits</th>
	<td>
	<input type="checkbox" id="author_credits" name="tt_options[author_credits]" value="1" <?php checked( true, $settings['author_credits'] ); ?> />
	<label for="author_credits">Feeling nice? Add a link to Tink Tank in the footer</label>
	</td>
	</tr>

	</table>

	<p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

	</form>

	</div>

	<?php
}

function tt_validate_options( $input ) {
	global $tt_options, $tt_categories, $tt_layouts;

	$settings = get_option( 'tt_options', $tt_options );

	// If the checkbox has not been checked, we void it
	if ( ! isset( $input['author_credits'] ) )
		$input['author_credits'] = null;
	// We verify if the input is a boolean value
	$input['author_credits'] = ( $input['author_credits'] == 1 ? 1 : 0 );
	
	return $input;
}

endif;  // EndIf is_admin()
