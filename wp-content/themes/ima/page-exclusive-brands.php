<?php while (have_posts()) : the_post();
?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/inner-hero'); ?>



    <?php
      if( have_rows('story_block') ):
        while ( have_rows('story_block') ) : the_row(); ?>

        <div class="story-block-row">
          <div class="story-item">
            <img src="<?php the_sub_field('block_image'); ?>">
          </div>
          <div class="story-item">
            <div class="story-text">
              <p><span><?php echo the_sub_field('block_intro'); ?></span><?php echo the_sub_field('block_text'); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; endif; ?>

    </div>
<?php endwhile; ?>
