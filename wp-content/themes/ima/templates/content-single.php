<?php while (have_posts()) : the_post();
  $text_left = get_field('hero_text_left');
  $text_right = get_field('hero_text_right');
  $challenge = get_field('challenge');
  $result = get_field('result');
?>

  <div class="hero aspect-ratio-sixteen-four" style="background-image: url(<?php echo the_field('hero_background_image'); ?>);">
    <div class="content">
      <div class="header">
        <h6>Case Study</h6>
        <h2><?php the_title(); ?></h2>
      </div>
      <div>
        <?php echo $text_left; ?>
      </div>
      <div>
        <?php the_post_thumbnail(); ?>
      </div>
      <div>
        <?php echo $text_right; ?>
      </div>
    </div>
  </div>
  <div class="main">
  </div>

<?php endwhile; ?>
