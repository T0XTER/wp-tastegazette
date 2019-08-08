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
