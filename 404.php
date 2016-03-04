<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();

	$url = get_template_directory_uri().'/assets/images/topo-404.jpg';
?>

<div class="img-featured" style="background: url(<?php echo $url; ?>) top center no-repeat; min-height: 200px;">
	<h1 class="container sintony">404</h1>
</div>

<main class="content-main container">
	<p>OPS! ACHO QUE ALGO DEU ERRADO!</p>
	<p>a página pesquisada não foi encontrada :(</p>
</main>

<?php get_footer(); ?>