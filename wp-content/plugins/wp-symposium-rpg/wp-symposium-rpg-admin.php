<div class="wrap">
<div id="icon-themes" class="icon32"><br /></div>
<?php
echo '<h2>'.sprintf(__('%s Options', WPS_TEXT_DOMAIN), WPS_WL . '-RPG').'</h2><br />';

__wps__show_tabs_header('RPG');

  global $wpdb;
    // See if the user has posted profile settings
    if( isset($_POST[ 'symposium_rpg_updated' ]) ) {

	 	// Update *******************************************************************************
		//update_option(WPS_OPTIONS_PREFIX."_rpg_global_list", $_POST[ 'symposium_rpg_global_list' ]);
		update_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_point', isset($_POST[ 'symposium_rpg_bonus_point' ]) ? $_POST[ 'symposium_rpg_bonus_point' ] : '');
		update_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_new_thread', isset($_POST[ 'symposium_rpg_bonus_new_thread' ]) ? $_POST[ 'symposium_rpg_bonus_new_thread' ] : '0');
		update_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_new_reply', isset($_POST[ 'symposium_rpg_bonus_new_reply' ]) ? $_POST[ 'symposium_rpg_bonus_new_reply' ] : '0');
		update_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_profile_status', isset($_POST[ 'symposium_rpg_bonus_profile_status' ]) ? $_POST[ 'symposium_rpg_bonus_profile_status' ] : '0');
		update_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_profile_comment', isset($_POST[ 'symposium_rpg_bonus_profile_comment' ]) ? $_POST[ 'symposium_rpg_bonus_profile_comment' ] : '0');
		update_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_follow', isset($_POST[ 'symposium_rpg_bonus_follow' ]) ? $_POST[ 'symposium_rpg_bonus_follow' ] : '0');
		update_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_like', isset($_POST[ 'symposium_rpg_bonus_like' ]) ? $_POST[ 'symposium_rpg_bonus_like' ] : '0');

        // Put an settings updated message on the screen
		echo "<div class='updated slideaway'><p>".__('Saved', WPS_TEXT_DOMAIN).".</p></div>";
		
    }

	// Get option value
	$__wps__rpg_global_list = get_option(WPS_OPTIONS_PREFIX."_rpg_global_list") ? get_option(WPS_OPTIONS_PREFIX."_rpg_global_list") : '';

	?>
<form method="post" action=""> 
 <?php settings_fields('rpg_settings'); ?>
	<input type='hidden' name='symposium_rpg_updated' value='Y'>
	<table class="form-table __wps__admin_table"> 

	<tr><td colspan="2"><h2><?php _e('Options', WPS_TEXT_DOMAIN) ?></h2></td></tr>


	<tr valign="top"> 
	<td scope="row"><label for="symposium_rpg_bonus_point"><?php echo __('Enable Bonus Point System?', WPS_TEXT_DOMAIN); ?></label></td> 
	<td><input type="checkbox" name="symposium_rpg_bonus_point" id="symposium_rpg_bonus_point" <?php if (get_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_point') == "on") { echo "CHECKED"; } ?>/>
	<span class="description"><?php echo __('Allow points to be made by doing things', WPS_TEXT_DOMAIN); ?></td> 
	</tr>

	<tr valign="top"> 
	<td scope="row"><label for="symposium_rpg_new_thread"><?php echo __('Points per New Thread?', WPS_TEXT_DOMAIN); ?></label></td> 
	<td><input type="text" name="symposium_rpg_bonus_new_thread" id="symposium_rpg_bonus_new_thread" value="<?php echo get_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_new_thread');?>" />
	<span class="description"><?php echo __('# of Points per New Threads', WPS_TEXT_DOMAIN); ?></td> 
	</tr> 
	
	<tr valign="top"> 
	<td scope="row"><label for="symposium_rpg_new_reply"><?php echo __('Points per new Thread Reply?', WPS_TEXT_DOMAIN); ?></label></td> 
	<td><input type="text" name="symposium_rpg_bonus_new_reply" id="symposium_rpg_bonus_new_reply" value="<?php echo get_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_new_reply');?>" />
	<span class="description"><?php echo __('# of Points per Thread Replies', WPS_TEXT_DOMAIN); ?></td> 
	</tr> 
	
	<tr valign="top"> 
	<td scope="row"><label for="symposium_rpg_profile_status"><?php echo __('Points per new Profile Status?', WPS_TEXT_DOMAIN); ?></label></td> 
	<td><input type="text" name="symposium_rpg_bonus_profile_status" id="symposium_rpg_bonus_profile_status" value="<?php echo get_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_profile_status');?>" />
	<span class="description"><?php echo __('# of Points per Status updates', WPS_TEXT_DOMAIN); ?></td> 
	</tr> 
	
	<tr valign="top"> 
	<td scope="row"><label for="symposium_rpg_profile_comment"><?php echo __('Points per new Profile comments?', WPS_TEXT_DOMAIN); ?></label></td> 
	<td><input type="text" name="symposium_rpg_bonus_profile_comment" id="symposium_rpg_bonus_profile_comment" value="<?php echo get_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_profile_comment');?>" />
	<span class="description"><?php echo __('# of Points per profile-comments', WPS_TEXT_DOMAIN); ?></td> 
	</tr> 
	
	<tr valign="top"> 
	<td scope="row"><label for="symposium_rpg_bonus_follow"><?php echo __('Points per follow?', WPS_TEXT_DOMAIN); ?></label></td> 
	<td><input type="text" name="symposium_rpg_bonus_follow" id="symposium_rpg_bonus_follow" value="<?php echo get_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_follow');?>" />
	<span class="description"><?php echo __('# of Points per follow', WPS_TEXT_DOMAIN); ?></td> 
	</tr> 
	
	<tr valign="top"> 
	<td scope="row"><label for="symposium_rpg_bonus_like"><?php echo __('Points per like?', WPS_TEXT_DOMAIN); ?></label></td> 
	<td><input type="text" name="symposium_rpg_bonus_like" id="symposium_rpg_bonus_like" value="<?php echo get_option(WPS_OPTIONS_PREFIX.'_rpg_bonus_like');?>" />
	<span class="description"><?php echo __('# of Points per Like', WPS_TEXT_DOMAIN); ?></td> 
	</tr> 
			
	
	</tr> 
	<!--<tr><td colspan="2"><h2><?php //_e('Profile Menu Items', WPS_TEXT_DOMAIN) ?></h2></td></tr>-->
		
	<?php
	echo '</table>';

	?>
	<?php 	
	 					
	echo '<p class="submit" style="margin-left:12px">';
	echo '<input type="submit" name="Submit" class="button-primary" value="'.__('Save Changes', WPS_TEXT_DOMAIN).'" />';
	echo '</p>';
	echo '</form>';
					  
?>

<?php __wps__show_tabs_header_end(); ?>
</div>
