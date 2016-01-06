<section class="splash">
	<div class="container">
		<div class="row">
			<h1><?php bloginfo('name'); ?></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</div>
	</div>
</section>

<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('templates/content', 'page'); ?>
				<?php endwhile; ?>
			</div>
			<div class="col-md-6">
				This will be an image.
			</div>
		</div>
	</div>
</section>
<section class="recent-news">
	<div class="container">
		<div class="row">
		<?php
			$args = array( 'posts_per_page' => 6 );
			$lastposts = get_posts( $args );
			foreach ( $lastposts as $post ) :
				setup_postdata( $post ); ?>
				<div class="col-md-4">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
			</div>
			<?php endforeach; 
				wp_reset_postdata(); ?>
		</div>
	</div>
</section>