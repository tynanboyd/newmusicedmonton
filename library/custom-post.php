<?php

// Register Events
function nme_event() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'newmusicedmonton' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'newmusicedmonton' ),
		'menu_name'             => __( 'Events', 'newmusicedmonton' ),
		'name_admin_bar'        => __( 'Event', 'newmusicedmonton' ),
		'archives'              => __( 'Event Archives', 'newmusicedmonton' ),
		'attributes'            => __( 'Event Attributes', 'newmusicedmonton' ),
		'parent_item_colon'     => __( 'Parent Event:', 'newmusicedmonton' ),
		'all_items'             => __( 'All Events', 'newmusicedmonton' ),
		'add_new_item'          => __( 'Add New Event', 'newmusicedmonton' ),
		'add_new'               => __( 'Add New', 'newmusicedmonton' ),
		'new_item'              => __( 'New Event', 'newmusicedmonton' ),
		'edit_item'             => __( 'Edit Event', 'newmusicedmonton' ),
		'update_item'           => __( 'Update Event', 'newmusicedmonton' ),
		'view_item'             => __( 'View Event', 'newmusicedmonton' ),
		'view_items'            => __( 'View Events', 'newmusicedmonton' ),
		'search_items'          => __( 'Search Event', 'newmusicedmonton' ),
		'not_found'             => __( 'Not found', 'newmusicedmonton' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'newmusicedmonton' ),
		'featured_image'        => __( 'Featured Image', 'newmusicedmonton' ),
		'set_featured_image'    => __( 'Set featured image', 'newmusicedmonton' ),
		'remove_featured_image' => __( 'Remove featured image', 'newmusicedmonton' ),
		'use_featured_image'    => __( 'Use as featured image', 'newmusicedmonton' ),
		'insert_into_item'      => __( 'Insert into event', 'newmusicedmonton' ),
		'uploaded_to_this_item' => __( 'Uploaded to this event', 'newmusicedmonton' ),
		'items_list'            => __( 'Events list', 'newmusicedmonton' ),
		'items_list_navigation' => __( 'Events list navigation', 'newmusicedmonton' ),
		'filter_items_list'     => __( 'Filter events list', 'newmusicedmonton' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'newmusicedmonton' ),
		'description'           => __( 'Event', 'newmusicedmonton' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'nme_event', 0 );