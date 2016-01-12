<section class="splash index-splash" style="background-image: url('<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail_url('custom-splash');
	} else {
		echo bloginfo('template_directory') . "/dist/images/default-news.jpg";
	} ?>')">
	<div class="container">
		<div class="row">
			<h1 class="headline info-title"><?php get_template_part('templates/page', 'header'); ?></h1>
		</div>
	</div>
</section>

<section class="main-content">
	<div class="container">
		<div class="row news-row">

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

		</div>
		<?php the_posts_navigation(); ?>
	</div>
</section>