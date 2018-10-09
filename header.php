<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Identidade_Digital_do_Governo_-_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- @TODO -->
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- @TODO -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a class="skip-link sr-only" href="#content">
    <?php esc_html_e( 'Skip to content', 'idg-wp' ); ?>
</a>

<header id="main-header" style="position: absolute;left: 0;top: 0;right: 0;">
	<div class="header-wrapper" style="position:relative;">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<p class="site-denomination mb-0"><?php bloginfo( 'description' ); ?></p>
					<h1 class="site-title mt-0 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div>
				<div class="col-lg-4">
					<ul id="accessibility-bar" class="text-right">
						<li class="high-contrast">
							<a href="#">Alto contraste</a>
						</li>
						<li class="vlibras">
							<a href="#">VLibras</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-8">
					<nav id="featured-links">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" style="float: left">
							<span class="sr-only"><?php esc_html_e( 'Primary Menu', 'idg-wp' ); ?></span>
						</button>
						<ul id="xfeatured-links" class="nav">
							<li class="nav-item">
								<a class="nav-link active" href="#">Active</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Disabled</a>
							</li>
						</ul>
						<div class="menu-wrapper">
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										MENU AQUI
									</div>
								</div>
							</div>
						</div>
						<?php
						/* wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );*/
						?>
					</nav>
				</div>
				<div class="col-lg-4">
					<input type="search" style="width: 100%;margin: 0;padding: 0 15px 0 20px;border: 0;background: #fff;border-radius: 30px;border: 1px solid hsla(0,0%,100%,.2);line-height: 30px;">
				</div>
			</div>
		</div>
	</div>
</header>