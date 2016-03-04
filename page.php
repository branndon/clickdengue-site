<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();

	if ( has_post_thumbnail() ) {
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	} else {
		$url = get_template_directory_uri().'/assets/images/topo-default.jpg';
	}
?>

<div class="img-featured" style="background: url(<?php echo $url; ?>) top center no-repeat;">
	<h1 class="container sintony"><?php the_title(); ?></h1>
</div>

	<main>
		<?php  while ( have_posts() ) : the_post(); ?>
			<p><?php the_content(); ?></p>
		<?php endwhile; ?>
	</main>

<?php get_footer(); ?>
