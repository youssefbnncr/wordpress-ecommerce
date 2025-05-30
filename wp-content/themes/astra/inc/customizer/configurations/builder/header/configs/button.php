<?php
/**
 * Button Header Configuration.
 *
 * @package     Astra
 * @link        https://wpastra.com/
 * @since       4.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register button header builder Customizer Configurations.
 *
 * @param array $configurations Astra Customizer Configurations.
 * @since 4.5.2
 * @return array Astra Customizer Configurations with updated configurations.
 */
function astra_header_button_configuration( $configurations = array() ) {

	$_configs = Astra_Button_Component_Configs::register_configuration( $configurations, 'header', 'section-hb-button-' );

	if ( Astra_Builder_Customizer::astra_collect_customizer_builder_data() ) {
		array_map( 'astra_save_header_customizer_configs', $_configs );
	}

	return $_configs;
}

if ( Astra_Builder_Customizer::astra_collect_customizer_builder_data() ) {
	add_action( 'init', 'astra_header_button_configuration', 10, 0 );
}
