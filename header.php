<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Fontes -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
	<link href='<?php bloginfo( 'template_directory' ); ?>/assets/css/fontello.css' rel='stylesheet' type='text/css'>

	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<!-- Thema - Click Dengue -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/click-dengue.css" type="text/css" />

</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

	<header id="header" role="banner">
		<div class="container">
			<div class="content-logo col-sm-2">
				<a href="#">
					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/click-dengue-logo.png" alt="Click Dengue" title="Click Dengue" />
				</a>
			</div>

			<nav class="main-menu col-sm-10">
				<ul>
					<li>
						<a href="#">Ínicio</a>
					</li>
					<li>
						<a href="#">Blog</a>
					</li>
					<li>
						<a href="#">Focos Informados</a>
					</li>
					<li>
						<a href="#">Aplicativo</a>
					</li>
					<li>
						<a href="#">Contato</a>
					</li>
					<li>
						<a href="#">Setor Público</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<div id="wrapper">
