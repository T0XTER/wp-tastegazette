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
								'posts_per_page' => 6,
								'orderby' => 'date',
								'post__not_in' => ShownPosts::getPostIds(),
								'post_type'        => array( 'post' ),
								'post_status'      => array( 'publish' ),
								'order'            => 'DESC'
							);

							$query = new WP_Query($args);

							if ($query->have_posts()) {
								while ($query->have_posts()) {
									$query->the_post();
                                    ShownPosts::addPostId(get_the_ID());
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
							//$ids = array_merge($ids1, $ids2);
							wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>