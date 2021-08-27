<?php

get_header();

$context = Timber::get_context();
$context['post'] = new TimberPost();

Timber::render( 'page-templates/views/single-event.twig', $context );


get_footer();