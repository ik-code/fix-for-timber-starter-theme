<?php
/**
 * Template Name: Hello
 */

require_once "_hello.php";
new Hello();

$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;
$context['hello'] = do_shortcode('[hello]');

Timber::render( 'hello-page.twig', $context );