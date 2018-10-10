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

<header id="main-header">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-8">
				<p class="site-denomination mb-0"><?php bloginfo( 'description' ); ?></p>
				<h1 class="site-title mt-0 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="col-md-6 col-lg-4 d-none d-md-block">
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
			<div class="col-sm-1 col-md-8 col-lg-8">
				<nav id="featured-links">
					<button class="menu-toggle" data-toggle="collapse" data-target="#menu-wrapper" aria-controls="primary-menu" aria-expanded="false">
						<span class="sr-only"><?php esc_html_e( 'Primary Menu', 'idg-wp' ); ?></span>
					</button>
					<ul id="xfeatured-links" class="nav d-none d-md-flex">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo home_url('/pagina-exemplo'); ?>">Acesso à informação</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Editais</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Outro Link</a>
						</li>
					</ul>
					<?php
					/* wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );*/
					?>
				</nav>
			</div>
			<div class="col-sm-11 col-md-4 col-lg-4">
				<input type="search" style="width: 100%;margin: 15px 0 0 0;padding: 0 15px 0 20px;border: 0;background: #fff;border-radius: 30px;border: 1px solid hsla(0,0%,100%,.2);line-height: 30px;">
			</div>
		</div>
		<div id="menu-wrapper" class="collapse clearfix">
			<div class="menu-content container">
				<div class="row">
					<div class="col">
						<div class="menu-col">
							<h3 class="menu-title">Ipsum Lorem</h3>
							<ul>
								<li>
									<a href="<?php echo home_url('/ola-mundo'); ?>">Item #1</a>
								</li>
								<li>
									<a href="#">Item #2</a>
								</li>
								<li>
									<a href="#">Item #3</a>
								</li>
								<li>
									<a href="#">Item #4</a>
								</li>
								<li>
									<a href="#">Item #5</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col">
						<div class="menu-col">
							<h3 class="menu-title">Ipsum Lorem</h3>
							<ul>
								<li>
									<a href="#">Item #1</a>
								</li>
								<li>
									<a href="#">Item #2</a>
								</li>
								<li>
									<a href="#">Item #3</a>
								</li>
								<li>
									<a href="#">Item #4</a>
								</li>
								<li>
									<a href="#">Item #5</a>
								</li>

								<li>
									<a href="#">Item #6</a>
								</li>
								<li>
									<a href="#">Item #7</a>
								</li>
								<li>
									<a href="#">Item #8</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col">
						<div class="menu-col">
							<h3 class="menu-title">Ipsum Lorem</h3>
							<ul>
								<li>
									<a href="#">Item #1</a>
								</li>
								<li>
									<a href="#">Item #2</a>
								</li>
								<li>
									<a href="#">Item #3</a>
								</li>
								<li>
									<a href="#">Item #4</a>
								</li>
								<li>
									<a href="#">Item #5</a>
								</li>

								<li>
									<a href="#">Item #6</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col">
						<div class="menu-col">
							<h3 class="menu-title">Ipsum Lorem</h3>
							<ul>
								<li>
									<a href="#">Item #1</a>
								</li>
								<li>
									<a href="#">Item #2</a>
								</li>
								<li>
									<a href="#">Item #3</a>
								</li>
								<li>
									<a href="#">Item #4</a>
								</li>
								<li>
									<a href="#">Item #5</a>
								</li>
								<li>
									<a href="#">Item #6</a>
								</li>
								<li>
									<a href="#">Item #7</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col">
						<div class="menu-col">
							<h3 class="menu-title">Ipsum Lorem</h3>
							<ul>
								<li>
									<a href="#">Item #1</a>
								</li>
								<li>
									<a href="#">Item #2</a>
								</li>
								<li>
									<a href="#">Item #3</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>