<div class="hero aspect-ratio-<?php if (is_page('about')):?>sixteen-six<?php else: ?>sixteen-three<?php endif; ?>" style="background-image: url(<?php echo the_field('hero_background_image'); ?>);">
  <div class="content">

    <?php echo the_field('hero_text'); ?>

  </div>
</div>
