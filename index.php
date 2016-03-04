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
		<section class="content-main">
			<div class="container">
				<div class="posistionText">
					<h2>
						<span class="uppercase roboto_slab">O poder está</span><br/>
						em suas <span class="featured roboto_slab">mãos</span><br/>
						<span class="subtitle">faça o download</span>
					</h2>
					<p>
						<a href="#" target="_blank"><i class="icon-appstore"></i> iOS</a>
						<a href="#" target="_blank"><i class="icon-android"></i> Android</a>
					</p>
				</div>
			</div>
		</section>

		<!-- Fique por dentro -->
		<section class="content-news container">
			<h2>Fique por dentro</h2>
			<ul class="list-news">
				<!-- <li class="col-sm-4">
					<a href="#" target="_blank">
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/teste-fiquepordentro.jpg" alt="" />
					</a>
					<p class="tags"><i class="icon-pencil"></i> Categorias: <a href="#" target="_blank">Estado de SP</a> <a href="#" target="_blank">Santos</a></p>
					<h3 class="roboto_slab">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h3>
					<p class="roboto_slab">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim....</p>
				</li>
				<li class="col-sm-4">
					<a href="#" target="_blank">
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/teste-fiquepordentro.jpg" alt="" />
					</a>
					<p class="tags"><i class="icon-pencil"></i> Categorias: <a href="#" target="_blank">Estado de SP</a> <a href="#" target="_blank">Santos</a></p>
					<h3 class="roboto_slab">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h3>
					<p class="roboto_slab">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim....</p>
				</li>
				<li class="col-sm-4">
					<a href="#" target="_blank">
						<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/teste-fiquepordentro.jpg" alt="" />
					</a>
					<p class="tags"><i class="icon-pencil"></i> Categorias: <a href="#" target="_blank">Estado de SP</a> <a href="#" target="_blank">Santos</a></p>
					<h3 class="roboto_slab">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h3>
					<p class="roboto_slab">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim....</p>
				</li> -->
				<?php show_posts(3); ?>
			</ul>
			
			<div class="clear"></div>

			<div class="content-verMais">
				<a href="#" target="_blank" class="verMais" alt="ver mais">Ver mais</a>
			</div>
		</section>
		
		<!-- Baixe nosso aplicativo -->
		<section class="content-download">
			<div class="main-line">
				<h2 class="container sintony">Baixe nosso aplicativo</h2>
			</div>
			<div class="container">
				<div class="content-smartphone col-sm-3">
					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/app-smartphone.png" alt="" />
				</div>
				<div class="content-infos col-sm-9">
					<p class="roboto_slab">O aplicativo Click Dengue não precisa de login, é só acessar, informar e enviar ;) Ainda tem dúvida das vantagens do app?</p>
					
					<div class="clear"></div>

					<ul>
						<li class="col-sm-4">
							<i class="icon-location"></i>
							<p class="roboto_slab">Encontre sua localidade com facilidade, ou busque um endereço ;)</p>
						</li>
						<li class="col-sm-4">
							<i class="icon-globe"></i>
							<p class="roboto_slab">Tire uma foto se preferir, comprove seus dados. Não precisa de login!</p>
						</li>
						<li class="col-sm-4">
							<i class="icon-globe"></i>
							<p class="roboto_slab">Usa pouco espaço,  menos de 6mb e pode ser usado a qualquer momento do seu dia!</p>
						</li>
					</ul>
				</div>
			</div>
		</section>
		
		<!-- Quem já informou um foco -->
		<section class="content-focos">
			<h2 class="container">Quem já informou um foco</h2>
			<div class="content-map">
				<div class="content-infos">
					<p class="roboto_slab">Você sabia que os focos informados pelo aplicativo , além de enviados para a prefeitura do local, são armazenados em um grande banco e é possível avaliar a situação daquela região através do mapa com as marcações?</p>
					<a href="#" target="_blank" class="verMapa sintony">ver mapa com focos</a>
				</div>

			</div>
		</section>
	</main>

<?php get_footer(); ?>
