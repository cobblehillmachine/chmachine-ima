<div class="hero aspect-ratio-<?php if (is_page('about')):?>sixteen-six<?php elseif (is_page('exclusive_brands')): ?>sixteen-three<?php else: ?>sixteen-four<?php endif; ?>" style="background-image: url(<?php echo the_field('hero_background_image'); ?>);">
  <div class="content">

    <?php echo the_field('hero_text'); ?>

  </div>
</div>
