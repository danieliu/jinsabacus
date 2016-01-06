<section class="splash about-splash">
	<div class="container">
		<div class="row">
			<?php get_template_part('templates/page', 'header'); ?>
		</div>
	</div>
</section>
<section class="main-content">
	<div class="container">
		<?php while (have_posts()) : the_post(); ?>
		  <?php get_template_part('templates/content', 'page'); ?>
		<?php endwhile; ?>
	</div>
</section>
