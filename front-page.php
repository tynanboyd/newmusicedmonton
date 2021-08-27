<?php

get_header();

$context = Timber::context();
$context['post'] = new TimberPost();

$eventArgs = array( 
	'post_type' => 'event', 
	'posts_per_page' => 1,	
	'category_name' => 'upcoming',
	'orderby'	=> 'menu_order',
);

$context['events'] = Timber::get_posts( $eventArgs );

Timber::render( 'page-templates/views/front-page.twig', $context );

get_footer();