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
      <div class="third">
        <?php echo $text_left; ?>
      </div>
      <div class="third">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="third">
        <?php echo $text_right; ?>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="challenge">
      <h6>Challenge</h6>
      <p><?php echo $challenge; ?></p>
    </div>
  </div>
  <?php get_template_part('templates/background-image-section'); ?>
  <div class="results">
    <div>
      <h6>Result</h6>
      <p><?php echo $result; ?></p>
    </div>
    <div>
      Other results
    </div>
  </div>

<?php endwhile; ?>
