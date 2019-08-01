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

		<!--?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text">< ?php single_post_title(); ?></h1>
				</header>
				< ?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>-->

            <div id="banner">
                <div class="banner-item-wrap">
                    <article class="banner-item">
                        <?php
                        $args = array(
                            'posts_per_page' => '1',
                            'orderby' => 'date'
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>
                                <a class="banner-item-link" href="<?php the_permalink(); ?>">
                                    <div class="banner-image-wrap">
	                                    <?php
	                                    $imageArray = get_post_thumbnail_id()
		                                    ? wp_get_attachment_image_src(get_post_thumbnail_id(), '1920x550')
		                                    : [];
	                                    $imageSrc = array_key_exists(0, $imageArray)
		                                    ? $imageArray[0]
		                                    : '';
	                                    ?>
                                        <div class="banner-image" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                                    </div>
                                    <div class="banner-text-wrap">
                                        <h2 class="banner-header"><?php the_title(); ?></h2>
                                        <p class="banner-cat">
                                            <span><img src="<?php bloginfo('template_url'); ?>/assets/images/banner-brand.png" alt="Brand"></span>
                                            <span>
                                                <?php
                                                $category = get_the_category();
                                                echo $category[0]->cat_name;
                                                ?>
                                            </span>
                                        </p>
                                        <p class="banner-meta">
                                            <span><?php the_author(); ?></span>
                                            <span>-</span>
                                            <span><?php the_time('j.n.y'); ?></span>
                                        </p>
                                    </div>
                                </a>
                                <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </article>
                </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
