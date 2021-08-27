<?php

/* 
Template Name: Past Events
*/

get_header();

$context = Timber::get_context();
$context['post'] = new TimberPost();

$pastArgs = array(
	'post_type'	=> 'event',
	'posts_per_page' => -1,
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

Timber::render( 'page-templates/views/tmpl-past-events.twig', $context );


get_footer();