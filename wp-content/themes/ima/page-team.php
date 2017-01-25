<?php while (have_posts()) : the_post();
?>
<?php get_template_part('templates/content', 'page'); ?>
<?php get_template_part('templates/inner-hero'); ?>

<div class="main">
  <h2>Executive Team</h2>
  <div class="news-section flex-container flex-three-column">
    <?php
      $args = array(
          'post_type'    => array(
              'team_member'
          ),
          'posts_per_page' => -1
       );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      $division = get_field('team_division');
      if ( $division === 'executive' ):
    ?>
    <div class="news-item flex-item">
      <img src="<?php the_field('thumbnail_image'); ?>" alt="">
      <h5><?php the_title(); ?></h5>
      <a href="<?php the_permalink(); ?>">Read&nbsp;More</a>
    </div>
    <?php elseif ( $division === 'marketing'): ?>
    <div class="news-item flex-item">
      <img src="<?php the_field('thumbnail_image'); ?>" alt="">
      <h5><?php the_title(); ?></h5>
      <a href="<?php the_permalink(); ?>">Read&nbsp;More</a>
    </div>
    <?php elseif ( $division === 'business'): ?>
    <div class="news-item flex-item">
      <img src="<?php the_field('thumbnail_image'); ?>" alt="">
      <h5><?php the_title(); ?></h5>
      <a href="<?php the_permalink(); ?>">Read&nbsp;More</a>
    </div>
    <?php elseif ( $division === 'qa'): ?>
    <div class="news-item flex-item">
      <img src="<?php the_field('thumbnail_image'); ?>" alt="">
      <h5><?php the_title(); ?></h5>
      <a href="<?php the_permalink(); ?>">Read&nbsp;More</a>
    </div>
    <?php endif; endwhile; ?>
  </div>
</div>

<?php endwhile; ?>
