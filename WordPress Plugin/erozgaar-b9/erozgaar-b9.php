<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://phpdocs.com
 * @since             1.0.0
 * @package           Erozgaar_B9
 *
 * @wordpress-plugin
 * Plugin Name:       ErozgaarB9
 * Plugin URI:        https://phpdocs.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Muhammad Afzal
 * Author URI:        https://phpdocs.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       erozgaar-b9
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EROZGAAR_B9_VERSION', '1.0.0' );

add_filter( 'the_content', 'AppendPostHeaderFooter', 1 );
 

//add_shortcode('e-rozgaar-batch#9','ErozgaarShortCode');

function AppendPostHeaderFooter($content){
	return '<h1>Hello Everyone</h1>'.$content.'<h1>Thanks for reading our Articles</h1>';
}

/*function ErozgaarShortCode($atts,$content=""){
?>
	<H1>THIS IS EROZGAAR-BATCH#9 SHORTCODE EXAMPLE</H1>
<?php
	return "$content";
}*/
