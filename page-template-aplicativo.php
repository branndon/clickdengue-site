<?php
	/*
		Template Name: Aplicativo
		* @package WordPress
		* @subpackage Coletiva_Theme
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
	<div class="content-main container">
		<?php  while ( have_posts() ) : the_post(); ?>
			<p><?php the_content(); ?></p>
		<?php endwhile; ?>

		<div class="row">
			<div class="col-sm-6 item">
				<p class="roboto_slab alignRight"><span class="featured">Baixe</span> o aplicativo na store compatível com seu celular.</p>
				<p class="roboto_slab alignRight">Para começar a usar é só deixar o GPS ligado e <span>nós te achamos</span> ;)</p>
			</div>
			<div class="col-sm-6 item">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/passo-1.jpg" alt="" />
			</div>
		</div>

		<div class="clear"></div>

		<div class="row">
			<div class="col-sm-6 item">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/passo-2.jpg" alt="" />
			</div>
			<div class="col-sm-6 item">
				<p class="roboto_slab">Mas se preferir você pode editar <span>manualmente</span> o endereço!</p>
			</div>
		</div>

		<div class="clear"></div>

		<div class="row">
			<div class="col-sm-6 item">
				<p class="roboto_slab alignRight">Agora é só informar pra gente qual o tipo de local que foi encontrado o foco, tirar uma foto (se preferir) e enviar!</p>
			</div>
			<div class="col-sm-6 item">
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/passo-3.jpg" alt="" />
			</div>
		</div>

		<div class="clear"></div>
		
		<div class="row infos">
			<p>Quer saber mais? Faça o download e navegue!</p>
			<p>
				<a href="#" target="_blank"><i class="icon-appstore"></i> iOS</a>
				<a href="#" target="_blank"><i class="icon-android"></i> Android</a>
			</p>
		</div>
	</div>
</main>

<?php get_footer(); ?>