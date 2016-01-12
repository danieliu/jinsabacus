<section class="splash" style="background-image: url('<?php if ( has_post_thumbnail() ) {
    the_post_thumbnail_url('custom-splash');
  } else {
    echo bloginfo('template_directory') . "/dist/images/default-post-image.jpg";
  } ?>')">
</section>

<section class="main-content">
  <div class="container">
    <div class="row wide-row">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <div class="post-category <?php echo strtolower(esc_html( get_the_category()[0]->name )); ?>"><?php echo esc_html( get_the_category()[0]->name ); ?></div>
      <h2 class="post-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <hr class="post-separator <?php echo strtolower(esc_html( get_the_category()[0]->name )); ?>">
    <div class="post-content <?php echo strtolower(esc_html( get_the_category()[0]->name )); ?>">
      <?php the_content(); ?>
    </div>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
    </div>
  </div>
</section>