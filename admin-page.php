<?php

function mfp_options_page () {

	global $mfp_options;

	ob_start(); ?>
	<div class="wrap">
	<h2>My First Plugin</h2>
	
	<p>This is settings page content</p>
	
	<form method="post" action="options.php">
	
		<?php settings_fields('mfp_settings_group'); ?>
		
		<h4><?php _e('Enable', 'mfp_domain'); ?></h4>
		<p>
			<input id="mfp_settings[enable]" name="mfp_settings[enable]" type="checkbox" value="1" <?php checked('1', $mfp_options['enable']); ?> />
			<label class="description" for="mfp_settings[enable]"><?php _e('Display the follow me on Twitter link', 'mfp_domain'); ?></label>
		</p>
		
		<h4><?php _e('Twitter Information', 'mfp_domain'); ?></h4>
		<p>
			<label class="description" for="mfp_settings[twitter_url]" > <?php _e('Enter your Twitter URL', 'mfp_domain'); ?> </label>
			<input id="mfp_settings[twitter_url]"  name="mfp_settings[twitter_url]" type="text" value="<?php echo $mfp_options['twitter_url']; ?>" />
		</p>
		
		<p>
			<?php $styles = array('blue', 'red', 'green'); ?>
			<select id="mfp_settings[theme]"  name="mfp_settings[theme]">
			
				<?php foreach($styles as $style) { ?>
					<?php if( $mfp_options['theme'] == $style ) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
				<option value="<?php echo $style; ?>" <?php echo $selected; ?>><?php echo $style; ?></option>
				<?php } ?>
			
			</select>
		</p>
		<p>&nbsp;</p>
		
		<h4><?php _e('Enable More Content', 'mfp_domain'); ?></h4>
		<p>
			<input id="mfp_settings[enable_more_content]" name="mfp_settings[enable_more_content]" type="checkbox" value="1" <?php checked('1', $mfp_options['enable_more_content']); ?> />
			<label class="description" for="mfp_settings[enable_more_content]"><?php _e('Display more content after Twitter link', 'mfp_domain'); ?></label>
		</p>
		
		<h4><?php _e('More Content after URL', 'mfp_domain'); ?></h4>
		<p>
			<textarea id="mfp_settings[more_content]"  name="mfp_settings[more_content]" type="text" rows="10" cols="60" ><?php echo $mfp_options['more_content']; ?>
			</textarea>
			<p></p>
			
		<p>&nbsp;</p>
		
		<h4><?php _e('More Content after posts in widget area', 'mfp_domain'); ?></h4>
		<p>
			<textarea id="mfp_settings[widget_content]"  name="mfp_settings[widget_content]" type="text" rows="10" cols="60" ><?php echo $mfp_options['widget_content']; ?>
			</textarea>
			<p></p>
			
		
		<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save Options', 'mfp_domain'); ?>" />
		</p>
	
	</form>
	
	</div>
	<?php
	echo ob_get_clean();
}

function mfp_add_options_link () {
	add_options_page('My First Plugin Options', 'My First Plugin', 'manage_options', 'mfp-options', 'mfp_options_page');
}
add_action ('admin_menu', 'mfp_add_options_link');

function mfp_register_settings () {
	register_setting ('mfp_settings_group', 'mfp_settings');
}
add_action ('admin_init','mfp_register_settings');
