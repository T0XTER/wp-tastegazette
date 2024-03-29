<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tastegazette
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
        <?php
        get_template_part('template-parts/banner');
        get_template_part('template-parts/top-ad');
        get_template_part('template-parts/slider');
        get_template_part('template-parts/top-block');
        get_template_part('template-parts/mid-ad');
        get_template_part('template-parts/bottom-big-block');
        get_template_part('template-parts/bottom-small-block');
        get_template_part('template-parts/bottom-left-block');
        ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer();
