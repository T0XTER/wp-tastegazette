<div class="top-block">
	<div class="container">
		<div class="top-block-header">
			<h2>ALL OVER THE WORLD</h2>
		</div>
		<div class="top-block-items-wrap">
			<?php
			$args = array(
				'posts_per_page' => 3,
				'post__not_in' => ShownPosts::getPostIds(),
				'orderby' => 'date',
				'order' => 'DESC',
				'post_type' => array('post'),
				'post_status' => array('publish'),
			);

			$query = new WP_Query($args);
			//$ids3 = [];

			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();
					ShownPosts::addPostId(get_the_ID());
					?>
					<article class="top-block-item">
						<a href="<?php the_permalink(); ?>" class="img-hover">
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
								<h2 class="top-block-item-header text-hover"><?php the_title(); ?></h2>
								<p class="top-block-item-text"><?php  the_excerpt(); ?></p>
								<p class="more">Read more>></p>
							</div>
						</a>
					</article>
					<?php
				}
			}
			//$ids = array_merge($ids1, $ids2, $ids3);
			wp_reset_postdata();
            ?>
		</div>
	</div>
</div>
