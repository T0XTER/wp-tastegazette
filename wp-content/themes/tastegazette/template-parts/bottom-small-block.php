<div class="bottom-block-right-small">
	<?php
	ShownPosts::addPostId($post->ID);
	$args = array(
		'posts_per_page' => '6',
		'orderby' => 'date',
		'post__not_in' => ShownPosts::getPostIds(),
	);

	$query = new WP_Query($args);
	//$ids5 = [];

	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			ShownPosts::addPostId(get_the_ID());
			?>
			<article class="bottom-block-right-small-item">
				<a href="<?php the_permalink(); ?>" class="bottom-block-right-small-item-link">
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
	//$ids = array_merge($ids1, $ids2, $ids3, $ids4, $ids5);
	wp_reset_postdata();
	?>
</div>
</div>
