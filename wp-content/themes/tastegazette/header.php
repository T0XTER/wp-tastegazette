<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tastegazette
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <title><?php bloginfo( 'name') ;
		echo " | "; bloginfo( 'description') ;?></title>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tastegazette' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<!--?php
			the_custom_logo(); ?>
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="< ?php echo esc_url( home_url( '/' ) ); ?>" rel="home">< ?php bloginfo( 'name' ); ?></a></h1>
				< ?php
			else :
				?>
				<p class="site-title"><a href="< ?php echo esc_url( home_url( '/' ) ); ?>" rel="home">< ?php bloginfo( 'name' ); ?></a></p>
				< ?php
			endif;
			$tastegazette_description = get_bloginfo( 'description', 'display' );
			if ( $tastegazette_description || is_customize_preview() ) :
				?>
				<p class="site-description">< ?php echo $tastegazette_description; /* WPCS: xss ok. */ ?></p>
			< ?php endif; ?>-->
		</div> <!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg">
			<div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                    </button>
                </div>
                <div class="navbar-brand custom-navbar">
					<?php the_custom_logo(); ?>
                </div>
                <div class="navbar-collapse collapse menu-block" id="navbarSupportedContent">
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'header-menu',
						'depth'             => 2,
						'container'         => false,
						'container_class'   => 'navbar-collapse collapse',
						'container_id'      => 'navbarSupportedContent',
						'menu_class'        => 'navbar-nav menu-block d-flex',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
					?>
                </div>
                <div class="navbar-nav header-soc-block d-none d-lg-inline-flex">
                    <a class="nav-link" href="https://twitter.com/GazetteTaste" target="_blank">
                        <i class="fab fa-twitter tw-hov"></i>
                    <a>
                    <a class="nav-link" href="https://facebook.com" target="_blank">
                        <i class="fab fa-facebook-f fb-hov"></i>
                    </a>
                </div>
            </div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
