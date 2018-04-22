<?php

// Define theme folder route
define( 'THEMEROOT', get_stylesheet_directory_uri() );

// Define images folder route
define( 'IMAGES', THEMEROOT . '/img' );

// Disable file edition through admin panel
define( 'DISALLOW_FILE_EDIT', true );

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1024;

if ( ! function_exists('lam_custom_theme_features') ) {

  // Register Theme Features
  function lam_custom_theme_features()  {

    // Add theme support for Automatic Feed Links
    add_theme_support( 'automatic-feed-links' );

    // Add theme support for Post Formats
    // add_theme_support( 'post-formats', array( 'video' ) );

    // Add theme support for Featured Images
    add_theme_support( 'post-thumbnails' );

    // Add theme support for Custom Background
    $background_args = array(
      'default-color'          => '#ffffff',
      'default-image'          => '',
      'default-repeat'         => '',
      'default-position-x'     => '',
      'wp-head-callback'       => '_custom_background_cb',
      'admin-head-callback'    => '',
      'admin-preview-callback' => '',
    );
    add_theme_support( 'custom-background', $background_args );

    // Add theme support for HTML5 Semantic Markup
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // Add theme support for document Title tag
    add_theme_support( 'title-tag' );

    // Add theme support for custom CSS in the TinyMCE visual editor
    add_editor_style( 'editor-style.css' );

    // Add theme support for Translation
    load_theme_textdomain( 'lams', get_template_directory() . '/language' );
  }
  add_action( 'after_setup_theme', 'lam_custom_theme_features' );

}

require_once( 'functions/scripts-stylesheets.php' );

require_once( 'functions/menus.php' );
