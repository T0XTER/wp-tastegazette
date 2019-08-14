<div id="banner">
	<div class="banner-item-wrap">
		<article class="banner-item">
            <?php
			$args = array(
				'posts_per_page' => 1,
				'orderby' => 'date',
				'post_type'        => array( 'post' ),
				'post_status'      => array( 'publish' ),
				'order'            => 'DESC',
                'posts__not_in'    => ShownPosts::getPostIds(),
			);
			$query = new WP_Query($args);

			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();
					ShownPosts::addPostId(get_the_ID());
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
			wp_reset_postdata();
			?>
		</article>
	</div>
</div>
