<div class="bottom-block">
	<div class="container">
		<div class="bottom-blocks-wrap">
			<div class="bottom-block-right">
				<div class="bottom-block-right-big">
					<?php
					ShownPosts::addPostId($post->ID);
					$args = array(
						'posts_per_page' => '1',
						'orderby' => 'date',
						'post__not_in' => ShownPosts::getPostIds(),
					);

					$query = new WP_Query($args);
					//$ids4 = [];

					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();
							ShownPosts::addPostId(get_the_ID());
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
										<div class="bottom-block-right-big-item-image" style="background-image: url('<?php echo $imageSrc ?>');"></div>
									</div>
									<div class="bottom-block-right-big-item-text-wrap">
										<h2 class="text-hover"><?php the_title(); ?></h2>
										<span class="text-hover"><?php the_author(); ?></span>
										<span class="text-hover divider">|</span>
										<span class="text-hover"><?php the_time('j/n/y'); ?></span>
									</div>
								</a>
							</article>
							<?php
						}
					}
					//$ids = array_merge($ids1, $ids2, $ids3, $ids4);
					wp_reset_postdata();
					?>
				</div>
