<?php

/**
 * Stylesheets and scripts registration
 * @since 1.0
 */

function lam_load_styles() {

  wp_register_style( 'theme_style', get_stylesheet_uri(), '', 1.0, 'all' );

  wp_enqueue_style( 'theme_style' );

}
add_action( 'wp_enqueue_scripts', 'lam_load_styles' );
