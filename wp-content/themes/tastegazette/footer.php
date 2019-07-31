<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tastegazette
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-widgets-wrap">
                <div class="footer-brand">
                    <a href="#">
                        <img src="<?php bloginfo('template_url');?>/assets/images/footer-brand.png" class="img-fluid">
                    </a>
                </div>
                <div class="footer-widgets-right">
                    <div class="footer-about">
                        <?php get_sidebar(); ?>
                    </div>
                    <div class="footer-widgets">
                        <?php ?>
                        <article>
                            <a href="<?php the_permalink(); ?>">

                            </a>
                        </article>
                        <?php ?>
                    </div>
                    <div class="footer-social-wrap"></div>
                </div>
            </div>
        </div>
        <div class="footer-menu-block">
            <div class="container">
	            <?php
	            wp_nav_menu( array(
		            'theme_location'    => 'footer-menu',
		            'depth'             => 1,
		            'container'         => false,
		            'container_class'   => 'flex-wrap',
		            'menu_class'        => 'list-inline d-flex',
		            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		            'walker'            => new WP_Bootstrap_Navwalker(),
	            ) );
	            ?>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
