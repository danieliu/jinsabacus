<section class="splash" style="background-image: url('<?php echo bloginfo('template_directory') . "/dist/images/default-search.jpg"; ?>')">
	<div class="container">
		<div class="row">
			<h1 class="headline">Search</h1>
			<h2 class="tagline"><?php get_search_form(); ?></h2>
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
  <?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>
		</div>
<?php the_posts_navigation(); ?>
	</div>
</section>