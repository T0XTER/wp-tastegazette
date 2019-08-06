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
                        $ids = [];
                        $ids1 = [];

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $ids1[] = get_the_ID();
                                ?>
                                <a class="banner-item-link img-hover" href="<?php the_permalink(); ?>">
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
                                        <div class="container">
                                            <p class="banner-cat">
                                                <span class="banner-brand"><img src="<?php bloginfo('template_url'); ?>/assets/images/banner-brand.png" alt="Brand"></span>
                                                <span class="banner-cat-title text-uppercase">
                                                    <?php
                                                    $category = get_the_category();
                                                    echo $category[0]->cat_name;
                                                    ?>
                                                </span>
                                            </p>
                                            <h2 class="banner-header text-hover"><?php the_title(); ?></h2>
                                            <p class="banner-meta">
                                                <span class="text-uppercase">By <?php the_author(); ?></span>
                                                <span>-</span>
                                                <span><?php the_time('j/n/y'); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            }
                        }
                        ?>
                    </article>
                </div>
            </div>
            <div class="top-ad">
                <div class="container">
                    <div class="top-ad-wrap">
                        <div class="top-ad-block">
                            <a href="#">
                                <img src="<?php bloginfo('template_url');?>/assets/images/layer154.png" alt="PayPal Ad">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-slider">
                <div class="container">
                    <div class="top-slider-arrows">
                        <div class="prev-arr"></div>
                        <div class="next-arr"></div>
                        <div class="top-slider-wrap">
                            <div class="top-slider-items">
                                <div class="slick-list">
                                    <div class="slick-track">
	                                    <?php
	                                    $args = array(
	                                            'posts_per_page' => '6',
                                                'orderby' => 'date',
                                                'post__not_in' => $ids1
                                        );

	                                    $query = new WP_Query($args);
	                                    $ids2 = [];

	                                    if ($query->have_posts()) {
		                                    while ($query->have_posts()) {
			                                    $query->the_post();
			                                    $ids2[] = get_the_ID();
			                                    ?>
                                                <article class="top-slider-item">
                                                    <a href="<?php the_permalink(); ?>" class="">
                                                        <div class="top-slider-image-wrap">
	                                                        <?php
	                                                        $imageArray = get_post_thumbnail_id()
		                                                        ? wp_get_attachment_image_src(get_post_thumbnail_id(), '550x425')
		                                                        : [];
	                                                        $imageSrc = array_key_exists(0, $imageArray)
		                                                        ? $imageArray[0]
		                                                        : '';
	                                                        ?>
                                                            <div class="top-slider-image" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                                                        </div>
                                                        <div class="top-slider-text-wrap">
                                                            <h2 class="top-slider-header text-hover"><?php the_title(); ?></h2>
                                                        </div>
                                                    </a>
                                                </article>
			                                    <?php
		                                    }
	                                    }
	                                    $ids = array_merge($ids1, $ids2);
	                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-block">
                <div class="container">
                    <div class="top-block-header">
                        <h2>ALL OVER THE WORLD</h2>
                    </div>
                    <div class="top-block-items-wrap">
                        <?php
                        $args = array(
                                'posts_per_page' => '3',
                                'orderby' => 'date',
                                'post__not_in' => $ids
                        );

                        $query = new WP_Query($args);
                        $ids3 = [];

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $ids3[] = get_the_ID();
                        ?>
                        <article class="top-block-item">
                            <a href="<?php the_permalink(); ?>" class="">
                                <div class="top-block-item-image-wrap">
	                                <?php
	                                $imageArray = get_post_thumbnail_id()
		                                ? wp_get_attachment_image_src(get_post_thumbnail_id(), '360x275')
		                                : [];
	                                $imageSrc = array_key_exists(0, $imageArray)
		                                ? $imageArray[0]
		                                : '';
	                                ?>
                                    <div class="top-block-item-image" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                                </div>
                                <div class="top-block-item-text-wrap">
                                    <h2 class="top-block-item-header"><?php the_title(); ?></h2>
                                    <p class="top-block-item-text"><?php  the_excerpt(); ?></p>
                                    <p>Read more>></p>
                                </div>
                            </a>
                        </article>
                            <?php
                            }
                        }
                        $ids = array_merge($ids1, $ids2, $ids3);
                        ?>
                    </div>
                </div>
            </div>
            <div class="middle-ad">
                <div class="container">
                    <div class="middle-ad-wrap">
                        <div class="middle-ad-block">
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/layer123.png" alt="Mobile Store Ad">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-block">
                <div class="container">
                    <div class="bottom-blocks-wrap">
                        <div class="bottom-block-right">
                            <div class="bottom-block-right-big">
	                            <?php
	                            $args = array(
	                                    'posts_per_page' => '1',
                                        'orderby' => 'date',
                                        'post__not_in' => $ids
                                );

	                            $query = new WP_Query($args);
	                            $ids4 = [];

	                            if ($query->have_posts()) {
		                            while ($query->have_posts()) {
			                            $query->the_post();
			                            $ids4[] = get_the_ID();
			                            ?>
                                        <article class="bottom-block-right-big-item">
                                            <a href="<?php  the_permalink(); ?>" class="">
                                                <div class="bottom-block-right-big-item-image-wrap">
	                                                <?php
	                                                $imageArray = get_post_thumbnail_id()
		                                                ? wp_get_attachment_image_src(get_post_thumbnail_id(), '790x415')
		                                                : [];
	                                                $imageSrc = array_key_exists(0, $imageArray)
		                                                ? $imageArray[0]
		                                                : '';
	                                                ?>
                                                    <div class="bottom-block-right-right-big-item-image" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                                                </div>
                                                <div class="bottom-block-right-big-item-text-wrap">
                                                    <h2><?php the_title(); ?></h2>
                                                    <span><?php the_author(); ?></span>
                                                    <span>|</span>
                                                    <span><?php the_time('j/n/y'); ?></span>
                                                </div>
                                            </a>
                                        </article>
			                            <?php
		                            }
	                            }
	                            $ids = array_merge($ids1, $ids2, $ids3, $ids4);
	                            ?>
                            </div>
                            <div class="bottom-block-right-small">
	                            <?php
	                            $args = array(
	                                    'posts_per_page' => '6',
                                        'orderby' => 'date',
                                        'post__not_in' => $ids
                                );

	                            $query = new WP_Query($args);
	                            $ids5 = [];

	                            if ($query->have_posts()) {
		                            while ($query->have_posts()) {
			                            $query->the_post();
			                            $ids5[] = get_the_ID();
			                            ?>
                                        <article class="bottom-block-right-small-item">
                                            <a href="<?php the_permalink(); ?>" class="">
                                                <div class="bottom-block-right-small-item-image-wrap">
	                                                <?php
	                                                $imageArray = get_post_thumbnail_id()
		                                                ? wp_get_attachment_image_src(get_post_thumbnail_id(), '110x80')
		                                                : [];
	                                                $imageSrc = array_key_exists(0, $imageArray)
		                                                ? $imageArray[0]
		                                                : '';
	                                                ?>
                                                    <div class="bottom-block-right-small-item-image" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                                                </div>
                                                <div class="bottom-block-right-small-item-text-wrap">
                                                    <h2><?php the_title(); ?></h2>
                                                </div>
                                            </a>
                                        </article>
			                            <?php
		                            }
	                            }
	                            $ids = array_merge($ids1, $ids2, $ids3, $ids4, $ids5);
	                            ?>
                            </div>
                        </div>
                        <div class="bottom-block-left">
                            <div class="bottom-block-left-ad">
                                <div class="bottom-ad-block">
                                    <a href="#">
                                        <img src="<?php bloginfo('template_url');?>/assets/images/layer173.png" alt="WP Ad">
                                    </a>
                                </div>
                            </div>
                            <div class="bottom-block-left-post">
                                <article class="bottom-block-left-post-item">
                                    <a href="<?php  the_permalink(); ?>" class="">
                                        <div class="bottom-block-left-item-image-wrap">
	                                        <?php
	                                        $imageArray = get_post_thumbnail_id()
		                                        ? wp_get_attachment_image_src(get_post_thumbnail_id(), '350x235')
		                                        : [];
	                                        $imageSrc = array_key_exists(0, $imageArray)
		                                        ? $imageArray[0]
		                                        : '';
	                                        ?>
                                            <div class="bottom-block-left-item-image" style="background-image: url('<?php echo $imageSrc ?>');"></div>
                                        </div>
                                        <div class="bottom-block-left-item-text-wrap">
                                            <h2><?php the_title(); ?></h2>
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
