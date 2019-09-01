<?php
/**
 * SlideIn Form main plugin file
 *
 * @package   Slide_In_Form
 * @author    Roshni Mansuri <roshnimansuri01@gmail.com>
 * @link      https://www.roshnimansuri.info/
 *
 * @wordpress-plugin
 * Plugin Name: 	SlideIn Form
 * Plugin URI: 		https://github.com/roshni005/slide-in-contact-form-wordpress-plugin
 * Description: 	SlideIn Form is a simple and attractive wordpress plugin used to show enquiry box on fixed position like bottom, left or right side with CSS3 effects for visitors.
 * Version: 1.0
 * Author: 			Roshni Mansuri
 * Author URI: 		https://www.roshnimansuri.info/
 * Text Domain: 	http://wordpress-assessment.roshnimansuri.info/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once plugin_dir_path( __FILE__ ) . 'class-slide-in-form.php';

add_action( 'plugins_loaded', array( 'Slide_In_Form', 'get_instance' ) );