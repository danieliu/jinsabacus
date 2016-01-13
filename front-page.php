<section class="splash front-splash" style="background-image: url('<?php if ( has_post_thumbnail() ) {
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

<section class="front-content">
	<div class="container">
		<div class="row news-row">
			<div class="col-sm-12">
				<h1 class="recent-news">Recent News</h1>
			</div>
		</div>
		<div class="row news-row">
		<?php
			$args = array( 'posts_per_page' => 6 );
			$lastposts = get_posts( $args );
			foreach ( $lastposts as $post ) :
				setup_postdata( $post ); ?>
			
			<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
			
			<?php endforeach; 
				wp_reset_postdata(); ?>
		</div>
		<a class="more-news" href="<?php echo get_permalink( get_page_by_path( 'news') ); ?>">See More</a>
	</div>
</section>