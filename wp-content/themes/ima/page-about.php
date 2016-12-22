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
  <div class="about-row flex-container flex-two-column">
    <div class="about-item flex-item">
      <div class="about-content">
        <h2><?php echo $missionhead; ?></h2>
        <p><?php echo $missiontext; ?></p>
      </div>
      <img src="<?php echo $missionphoto; ?>">
    </div>
    <div class="about-item flex-item">
      <div class="about-content">
        <h2><?php echo $visionhead; ?></h2>
        <p><?php echo $visiontext; ?></p>
      </div>
    </div>
  </div>
</div>
<div class="full-width-text-block">
  <h2>History</h2>
</div>
<div class="story-block-wrapper">
  <?php if( have_rows('story_block') ):
  while ( have_rows('story_block') ) : the_row(); ?>
  <div class="story-block-row flex-container flex-two-column">
    <div class="story-item flex-item">
      <img src="<?php the_sub_field('block_image'); ?>">
    </div>
    <div class="story-item flex-item">
      <div class="story-text">
        <p><span><?php echo the_sub_field('block_intro'); ?></span><?php echo the_sub_field('block_text'); ?></p>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
</div>

<?php endwhile; ?>