<?php
	/*
		Template Name: Contato
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
		
		<div class="content-forms col-sm-offset-3 col-sm-6">
			<form name="contato" id="formulario" method="post" action="<?php bloginfo( 'template_directory' ); ?>/includes/send-contato.php">
				<div class="row">
					<div class="col-sm-3">
						<label for="nome">Nome*</label>
					</div>
					<div class="col-sm-9">
						<input type="text" name="nome" id="nome" placeholder="" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<label for="email">E-mail*</label>
					</div>
					<div class="col-sm-9">
						<input type="text" name="email" id="email" placeholder="" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<label for="telefone">Telefone</label>
					</div>
					<div class="col-sm-9">
						<input type="text" name="telefone" id="telefone" placeholder="" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<label for="mensagem">Mensagem</label>
					</div>
					<div class="col-sm-12">
						<textarea name="mensagem" id="mensagem" cols="31" rows="10"></textarea>
					</div>
				</div>
				
				<div class="row submit">
					<input type="submit" id="btn-contato" name="btn-contato" value="Enviar" />
				</div>
			</form>
		</div>
	</div>
</main>

<?php get_footer(); ?>