<section class="splash" style="background-image: url('<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail_url('custom-splash');
	} else {
		header_image();
	} ?>')">
	<div class="container">
		<div class="row">
			<h1 class="headline">learn abacus today</h1>
			<h2 class="tagline">Enhance your memory, concentration, and mental arithmetic ability</h2>
			<p>
				<a class="button btn-contact" href="<?php echo get_permalink( get_page_by_path( 'contact') ); ?>">Get Started</a>
			</p>
		</div>
	</div>
</section>

<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="recent-news">Recent News</h1>
			</div>
		</div>
		<div class="row">
		<?php
			$args = array( 'posts_per_page' => 6 );
			$lastposts = get_posts( $args );
			foreach ( $lastposts as $post ) :
				setup_postdata( $post ); ?>
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
						<p class="post-meta"><?php the_date( 'F j, Y') ?></p>
						<div class="post-excerpt"><?php the_excerpt(); ?></div>
						<div class="post-continued">
							<a href="<?php the_permalink(); ?>">Read more</a>
						</div>
					</div>
			</div>
			<?php endforeach; 
				wp_reset_postdata(); ?>
		</div>
		<a class="more-news" href="<?php echo get_permalink( get_page_by_path( 'news') ); ?>">See More</a>
	</div>
</section>