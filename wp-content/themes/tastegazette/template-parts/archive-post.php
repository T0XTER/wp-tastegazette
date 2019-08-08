<?php

$categories = get_the_category();
$category_id = $categories[0]->cat_ID;

$args = array(
	'orderby' => 'date',
	'order' => 'DESC',
	'post_type' => ['post'],
	'post_status' => ['publish'],
	'category__in' => $category_id,
	'posts_per_page' => 6
);

$query = new WP_Query($args);

if ($query->have_posts()) {
	while ($query->have_posts()) {
		$query->the_post();
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
	wp_reset_postdata();
}
?>

