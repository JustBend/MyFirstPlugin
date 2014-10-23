<?php

function mfp_load_scripts () {
	wp_enqueue_style('mfp-styles', plugin_dir_url( __FILE__ ) . 'css/plugin_styles.css');

}
add_action ('wp_enqueue_scripts', 'mfp_load_scripts');
