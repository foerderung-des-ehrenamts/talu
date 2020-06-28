<?php

/**
 * Custom Post Type Medienspiegel
 * 
 * @package talu
 * @since 0.1
 */

/**
 * Create Custom Post Type Medienspiegel
 *
 * @since 0.1
 */

function talu_custom_post_type_medienspiegel() {

	$labels = array(
		'name'               => _x( 'Medienspiegel', 'post type general name' ),
		'singular_name'      => _x( 'Zeitungsbeitrag', 'post type singular name' ),
		'add_new'            => __( 'Erstellen'),
		'add_new_item'       => __( 'Erstellen' ),
		'edit_item'          => __( 'Beitrag bearbeiten' ),
		'new_item'           => __( 'Neuer Beitrag' ),
		'all_items'          => __( 'Alle Beiträge' ),
		'view_item'          => __( 'Beiträge ansehen' ),
		'search_items'       => __( 'Beiträge durchsuchen' ),
		'not_found'          => __( 'Keine Beiträge gefunden' ),
		'not_found_in_trash' => __( 'Keine Beiträge im Papierkorb gefunden' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Presse'
		);

	$args = array(
		'labels'              => $labels,
		'description'         => 'Zeitungsartikel',
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		// 'taxonomies' 		  => array( 'category' ),
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'supports'            => array( 'title','custom-fields','revisions'),
		'has_archive'         => true,
		'can_export'          => true,
		'menu_position'       => 9,
		'capability_type'     => 'post',
		'rewrite'             => array('slug' => 'medienspiegel')
	);

	register_post_type( 'medienspiegel', $args );

}

add_action( 'init', 'talu_custom_post_type_medienspiegel' );

?>