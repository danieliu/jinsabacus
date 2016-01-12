<div class="col-sm-6 col-lg-4 news-item">
	<a href="<?php the_permalink(); ?>">
		<div class="post-image" style="background-image:url('<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail_url('custom-thumb');
			} else {
				echo bloginfo('template_directory') . "/dist/images/default-post-image.jpg";
			} ?>')"></div>
	</a>
	<div class="post-content <?php echo strtolower(esc_html( get_the_category()[0]->name )); ?>">
		<div class="post-category"><?php echo esc_html( get_the_category()[0]->name ); ?></div>
		<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="post-meta"><?php the_time( 'F j, Y') ?></p>
		<div class="post-excerpt"><?php the_excerpt(); ?></div>
		<div class="post-continued">
			<a href="<?php the_permalink(); ?>">Read more</a>
		</div>
	</div>
</div>