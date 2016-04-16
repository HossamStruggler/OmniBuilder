<?php
/**
 * OmniBuilder
 *
 * @package OmniBuilder
 * @version 0.2
 */

if ( ! defined( 'OMNI_BUILDER_URI' ) && is_admin() ) {
	die( 'OMNI_BUILDER_URI is undefined' );
}

include 'Inflector.php';
include 'Custom_Form_Element.php';
include 'Custom_Field.php';
include 'Custom_Post_Type.php';
include 'core-post-type.php';
include 'Custom_Meta_Box.php';
include 'Custom_Taxonomy.php';

include 'Field/Fieldset.php';
include 'Field/Text.php';
include 'Field/Textarea.php';
include 'Field/Checkbox.php';
include 'Field/Radio.php';
include 'Field/Select.php';
include 'Field/WP_Editor.php';
include 'Field/Hidden.php';
include 'Field/Image.php';
include 'Field/map.php';
include 'Field/Collection.php';

/**
 * Load styles and scripts
 *
 * @todo Load only where OmniBuilder needs to be loaded.
 */
function load_custom_wp_admin_style() {
	wp_enqueue_style( 'ob', OMNI_BUILDER_URI . '/Resources/css/ob.css', array(), '0.2', 'all' );
	wp_enqueue_script( 'ob', OMNI_BUILDER_URI . '/Resources/js/ob.js', array( 'wp-util', 'backbone' ), '0.2', true );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
