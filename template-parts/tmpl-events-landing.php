<?php

/* 
Template Name: Events Landing
*/

get_header();

$context = Timber::get_context();
$context['post'] = new TimberPost();

$upcomingArgs = array(
	'post_type'	=> 'event',
	'posts_per_page' => -1,
	'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field'    => 'slug',
				'terms'    => 'upcoming',
				'orderby'	=> 'menu_order',
			),
		),
);

$context['upcoming'] = Timber::get_posts($upcomingArgs);

$pastArgs = array(
	'post_type'	=> 'event',
	'posts_per_page' => 3,
	'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field'    => 'slug',
				'terms'    => 'past',
				'orderby'	=> 'menu_order',
			),
		),
);

$context['past'] = Timber::get_posts($pastArgs);

Timber::render( 'page-templates/views/tmpl-events-landing.twig', $context );


get_footer();