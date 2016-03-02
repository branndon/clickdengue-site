<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="home">
		<div class="content-main"></div>

		<!-- Fique por dentro -->
		<section class="content-news container">
			<h2>Fique por dentro</h2>
			<ul class="list-news">
				
				<li class="col-sm-4">
					<a href="#" target="_blank">
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/teste-fiquepordentro.jpg" alt="" />
					</a>
					<p class="tags">Categorias: <a href="#" target="_blank">Estado de SP</a> <a href="#" target="_blank">Santos</a></p>
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim....</p>
				</li>

				<li class="col-sm-4">
					<a href="#" target="_blank">
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/teste-fiquepordentro.jpg" alt="" />
					</a>
					<p class="tags">Categorias: <a href="#" target="_blank">Estado de SP</a> <a href="#" target="_blank">Santos</a></p>
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim....</p>
				</li>

				<li class="col-sm-4">
					<a href="#" target="_blank">
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/teste-fiquepordentro.jpg" alt="" />
					</a>
					<p class="tags">Categorias: <a href="#" target="_blank">Estado de SP</a> <a href="#" target="_blank">Santos</a></p>
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim....</p>
				</li>
			</ul>
			
			<div class="clear"></div>

			<div class="content-verMais">
				<a href="#" target="_blank" class="verMais" alt="ver mais">Ver mais</a>
			</div>
		</section>
		
		<!-- Baixe nosso aplicativo -->
		<section class="content-download container">
			
		</section>
		
		<!-- Quem já informou um foco -->
		<section class="content-focos">
			<h2 class="container">Quem já informou um foco</h2>
			<div class="content-map">
				<div class="content-infos">
					<p>Você sabia que os focos informados pelo aplicativo , além de enviados para a prefeitura do local, são armazenados em um grande banco e é possível avaliar a situação daquela região através do mapa com as marcações?</p>
					<a href="#" target="_blank" class="verMapa">ver mapa com focos</a>
				</div>

			</div>
		</section>
	</main>

<?php get_footer(); ?>
