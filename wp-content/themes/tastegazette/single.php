<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tastegazette
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container">
                <div class="left-block">
                    <?php get_template_part('template-parts/article'); ?>
                </div>
                <?php get_template_part('template-parts/aside'); ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
