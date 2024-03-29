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
		<h2 class="screen-reader-text">Posts navigation</h2>
		<div class="nav-links">
			<?php if( get_previous_posts_link() ): ?>
				<div class="nav-next"><?php previous_posts_link( '&laquo; Newer Posts' ); ?></div>
			<?php endif ?>
			<?php if( get_next_posts_link() ): ?>
				<div class="nav-previous"><?php next_posts_link( 'Older Posts &raquo;', '' ); ?></div>
			<?php endif ?>
		</div>
	</div>
</section>