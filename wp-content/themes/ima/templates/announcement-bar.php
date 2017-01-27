<?php if( get_field('announcement_bar', 'option') ) : ?>

<div class="announcement-bar">
  <a href="<?php the_field('announcement_bar_link'); ?>">
    <p><?php echo the_field('announcement_bar', 'option'); ?></p>
  </a>
</div>

<?php endif; ?>

