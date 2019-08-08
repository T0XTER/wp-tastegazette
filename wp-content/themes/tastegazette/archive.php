<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tastegazette
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container">
                <div class="top-block-header">
                    <h2 class="category-header"><?php single_cat_title(); ?></h2>
                </div>
                <?php get_template_part('template-parts/archive-post'); ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
