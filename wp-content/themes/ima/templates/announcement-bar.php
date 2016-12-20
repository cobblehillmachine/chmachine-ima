<?php if( get_field('announcement_bar', 'option') ) : ?>

<div class="announcement-bar">
  <p><?php echo the_field('announcement_bar', 'option'); ?></p>
</div>

<?php endif; ?>

