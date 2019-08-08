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