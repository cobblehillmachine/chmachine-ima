<div class="hero aspect-ratio-sixteen-six" style="background-image: url(<?php echo the_field('hero_image'); ?>);">
  <video autoplay muted loop style="width: 100%; height: auto; position: absolute; top: 0; z-index:1">
    <source src="<?php echo the_field('hero_video'); ?>" type="">
    <img src="<?php echo the_field('hero_image'); ?>">
  </video>
</div>
