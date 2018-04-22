<?php
/**
 * Header file
 *
 * This file handles the head and header of each page
 *
 * @package lams
 * @since 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php

	// Loads all the head data
	wp_head();

	?>
	
</head>
<body <?php body_class(); ?>>