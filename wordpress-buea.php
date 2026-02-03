<?php

/**
 * Plugin Name: WordPress Buea
 * Version: 1.0.0
 * Author: Buea WordPress Community
 * Description: Plugin for community members to add their personal page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// require the files we need
$plugin_path = plugin_dir_path( __FILE__ );

require $plugin_path . '/lib/wordpress_tools/WPTools.php';

// Initialize wp tools
$wp_tools = new WPTools( __FILE__ );


// Create admin menu page
$menu_title = 'WordPress Buea Meetup';

$menu_page = new KMMenuPage(
	array(
		'page_title' => 'Wordpress Buea Meetup',
		'menu_title' => $menu_title,
		'capability' => 'read',
		'menu_slug'  => 'wordpress-buea-meetup',
		'icon_url'   => 'dashicons-wordpress',
		'position'   => 10,
		'function'   => 'dashboard_view'
	) );

$settings_page = new KMSubMenuPage(
	array(
		'parent_slug' => $menu_page->get_menu_slug(),
		'page_title'  => 'Buea WordPress Meetup',
		'menu_title'  => 'Buea WordPress Meetup',
		'capability'  => 'manage_options',
		'menu_slug'   => $menu_page->get_menu_slug(),
		'function'    => 'dashboard_view',
		'use_tabs'    => true
	) );

foreach ( scandir( __DIR__ . '/views' ) as $dir ) {

	if ( str_starts_with( $dir, '.' ) === false && is_file( __DIR__ . '/views/' . $dir ) && str_ends_with( $dir, '.php' ) ) {
		$dir           = explode( '.', $dir )[0];
		$dir_uppercase = ucfirst( $dir );
		$dir_uppercase = str_replace( '_', ' ', $dir_uppercase );
		$dir_uppercase = str_replace( '-', ' ', $dir_uppercase );
		$settings_page->add_tab( $dir, "$dir_uppercase's Page",
			'tab_view',
			array( 'tab' => $dir )
		);
	}
}


$menu_page->add_sub_menu_page( $settings_page );
$menu_page->run();

function dashboard_view(){}
function tab_view( $args ) {
	global $wp_tools;

	$wp_tools->renderView( $args['tab'] );

}