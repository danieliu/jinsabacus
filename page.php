<section class="splash" style="background-image: url('<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail_url('custom-splash');
	} else {
		header_image();
	} ?>')">
	<div class="container">
		<div class="row">
			<h1 class="headline"><?php get_template_part('templates/page', 'header'); ?></h1>
		</div>
	</div>
</section>

<section class="main-content">
	<div class="container">
		<div class="row">
			<?php while (have_posts()) : the_post(); ?>
			  <?php get_template_part('templates/content', 'page'); ?>
			<?php endwhile; ?>
		</div>
	</div>
</section>