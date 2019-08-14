<div class="bottom-block-left">
	<div class="bottom-block-left-ad">
		<div class="bottom-ad-block">
			<a href="#">
				<img src="<?php bloginfo('template_url');?>/assets/images/layer173.png" alt="WP Ad">
			</a>
		</div>
	</div>
	<div class="bottom-block-left-post">
		<?php
		ShownPosts::addPostId($post->ID);
		$args = array(
			'posts_per_page' => '6',
			'orderby' => 'date',
			'post__not_in' => ShownPosts::getPostIds(),
		);
		//$ids5 = [];
		$query = new WP_Query($args);


		if ($query->have_posts()) {
			while ( $query->have_posts() ) {
				$query->the_post();
			    ShownPosts::addPostId(get_the_ID());
				?>
				<article class="bottom-block-left-post-item">
					<a href="<?php the_permalink(); ?>" class="">
						<div class="bottom-block-left-item-image-wrap">
							<?php
							$imageArray = get_post_thumbnail_id()
								? wp_get_attachment_image_src( get_post_thumbnail_id(), '350x235' )
								: [];
							$imageSrc   = array_key_exists( 0, $imageArray )
								? $imageArray[0]
								: '';
							?>
							<div class="bottom-block-left-item-image"
							     style="background-image: url('<?php echo $imageSrc ?>');"></div>
						</div>
						<div class="bottom-block-left-item-text-wrap">
							<h2><?php the_title(); ?></h2>
							<p><?php the_excerpt(); ?></p>
						</div>
					</a>
				</article>
				<?php
			}
		}
		wp_reset_postdata();
		?>
	</div>
</div>
</div>
</div>
</div>

