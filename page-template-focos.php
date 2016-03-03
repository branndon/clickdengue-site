<?php
/*
	Template Name: Focos
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
	<h1 class="container sintony">FOCOS</h1>
</div>

<main>
	<div class="content-main container">
		<p>Os focos registrados pelo aplicativo são marcados neste mapa. Nesta seção você pode visualizar o mapa  por calor ou por pontos marcados.  Se preferir informar um foco pelo site, também é possível, basta seguir as etapas demarcadas na aba “Informar um foco”.</p>

		<div class="content-map">
			<div id="gmap_canvas"></div>
		</div>
		
		<div class="content-forms col-sm-offset-3 col-sm-6">
			<form name="maps" id="maps" method="post" action="<?php bloginfo( 'template_directory' ); ?>/includes/FILE.php">
				<h3>Deseja informar um foco?</h3>
				<div class="row">
					<input type="text" name="buscar_endereco" id="buscar_endereco" class="ico-buscar" placeholder="Digite um endereço (Encruzilhada , 23 - Santos)" />
					<input type="submit" id="btn-maps" name="btn-maps" value="Buscar endereço" />
				</div>
			</form>

			<form name="infos" id="infos" method="post" action="<?php bloginfo( 'template_directory' ); ?>/includes/FILE.php">
				<h3>Concluir informação</h3>
				<div class="row">
					<p>Onde foi encontrado o foco?</p>
					<input type="checkbox" name="vehicle" value="Residencial">Residencial
					<input type="submit" id="btn-infos" name="btn-infos" value="Informar Foco" />
				</div>
			</form>
		</div>
	</div>
</main>

<?php get_footer(); ?>