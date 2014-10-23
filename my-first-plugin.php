<?php
/* 
Plugin Name: My First Plugin
Plugin URI: http://justbend.net/
Description: Adding Content to posts
Version: 1.0
Author: Steve Jennings
Author URI: http://justbend.net/
License: Free
*/


/*   
global variables
*/

$mfp_options = get_option('mfp_settings');

/*   
includes
*/
include ('includes/scripts.php');
include ('includes/display-functions.php');
include ('includes/admin-page.php');
