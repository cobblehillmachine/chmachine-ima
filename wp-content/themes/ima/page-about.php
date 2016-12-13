<?php while (have_posts()) : the_post();
  $missionhead = get_field('mission_headline');
  $missiontext = get_field('mission_text');
  $missionphoto = get_field('mission_photo');
  $visionhead = get_field('vision_headline');
  $visiontext = get_field('vision_text');
?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/inner-hero'); ?>

  <div class="about-intro">
    <div class="about-row">
      <div class="about-item">
        <div class="about-content">
          <h2><?php echo $missionhead; ?></h2>
          <p><?php echo $missiontext; ?></p>
        </div>
        <img src="<?php echo $missionphoto; ?>">
      </div>
      <div class="about-item">
        <div class="about-content">
          <h2><?php echo $visionhead; ?></h2>
          <p><?php echo $visiontext; ?></p>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>
