<div class="four-blocks">
  <?php if ( have_rows('block')):
    while ( have_rows('block')): the_row();
      $image = get_sub_field('background_image');
      $header = get_sub_field('block_header');
      $text = get_sub_field('block_text');
  ?>

  <div class="block" style="background-image: url(<?php echo $image; ?>);">
    <div>
      <h3><?php echo $header; ?></h3>
      <p><?php echo $text; ?></p>
    </div>
  </div>

  <?php endwhile; endif; ?>
</div>
