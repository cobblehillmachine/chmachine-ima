<?php while (have_posts()) : the_post();
  $header = get_field('header');
  $content = get_field('content');
?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/hero'); ?>

  <div class="main">
    <div class="full-width-text-block">
      <div class="arrow-up"></div>
      <h2><?php echo $header; ?></h2>
      <?php echo $content; ?>
    </div>
  </div>

<?php endwhile; ?>
