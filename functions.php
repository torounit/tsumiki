<?php
/**
 * Tsumiki functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tsumiki
 * @since Tsumiki 0.1.0
 */

if ( ! function_exists( 'tsumiki_register_editor_styles' ) ) :
	/**
	 * Adds style.css as an editor stylesheet.
	 *
	 * @since Tsumiki 0.1.0
	 *
	 * @return void
	 */
	function tsumiki_register_editor_styles() {
		add_editor_style( 'style.css' );
	}
endif;
add_action( 'after_setup_theme', 'tsumiki_register_editor_styles' );

if ( ! function_exists( 'tsumiki_enqueue_styles' ) ) :
	/**
	 * Enqueues styles.
	 *
	 * @since Tsumiki 0.1.0
	 *
	 * @return void
	 */
	function tsumiki_enqueue_styles() {
		wp_enqueue_style(
			'tsumiki-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'tsumiki_enqueue_styles' );
