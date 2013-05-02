wp-symposium-rpg
================

WP-Symposium-RPG hooks into WP-Symposium to add RPG elements to WPS' functionality.

As of version 0.1, only a bonus system has been created.

The only modifications to WPS that are needed at the present time are:
add 
    // Support for RPG-WPs
  	do_action('symposium_bonus_increment', $current_user->ID, 'like');
    
to ajax/plus_functions.php after the:
    // Support for CubePoints
  	do_action('symposium_profile_like_hook', $author->author_uid, $choice);
    
add
    // Support for RPG-WPs
  	do_action('symposium_bonus_increment', $current_user->ID, 'follow');
    
to ajax/plus_functions.php after the
			echo __('Unfollow', WPS_TEXT_DOMAIN);
		}
    
add
    // Support for RPG-WPs
  	do_action('symposium_bonus_increment_hook', $current_user->ID, 'new_thread');

to ajax/forum_functions.php after the
    $post = __('Started a new forum topic:', WPS_TEXT_DOMAIN).' <a href="'.$url.'">'.$new_topic_subject.'</a>';
  	do_action('__wps__forum_newtopic_hook', $current_user->ID, $current_user->display_name, $current_user->ID, $post, 'forum', $new_tid);			

add
    // Support for RPG-WPs
  	do_action('symposium_bonus_increment', $current_user->ID, 'new_reply');
		
to ajax/forum_functions.php after the
    // Hook for more actions
  		do_action('symposium_forum_replycomment_hook', $current_user->ID, $current_user->display_name, $new_id);			
      
add
    // Support for RPG-WPs
  	do_action('symposium_bonus_increment', $current_user->ID, 'profile-status');

to ajax/profile_functions.php after the
    // Hook for other actions to take place
  	do_action('symposium_profile_newpost_hook', $subject_uid, $author_uid, $new_id, $text);	
		
add
    // Support for RPG-WPs
  	do_action('symposium_bonus_increment', $current_user->ID, 'profile-comment');

to ajax/profile_functions.php after the
    $reply_recipients = $wpdb->get_results($wpdb->prepare($sql, $parent, $current_user->ID));
  			
