<?php
/* for displaying stuff */

function mfp_add_content($content)  {

	global $mfp_options;

	if (is_single() && $mfp_options['enable'] == true && $mfp_options['more_content'] == true) {
		$extra_content = ' <p class="twitter-message ' . $mfp_options['theme'] . '"> Follow me on <a href="' . $mfp_options['twitter_url'] . '"> Twitter </a></p> ';
		$more_content =  $mfp_options['more_content'];
		$content .= $extra_content .= $more_content;
	}
	return $content;
}

add_filter ('the_content', 'mfp_add_content');
