<?php while (have_posts()) : the_post();
?>
<?php get_template_part('templates/content', 'page'); ?>
<?php get_template_part('templates/inner-hero'); ?>

<div class="main">
  <div class="news-section flex-container flex-three-column">
    <?php
      $args = array(
          'post_type'    => array(
              'post'
          ),
          'posts_per_page' => -1,
          'orderby' => 'date',
          'order' => 'DESC'
       );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <div class="news-item flex-item">
      <img src="<?php the_field('thumbnail_image'); ?>" alt="">
      <h5><?php the_title(); ?></h5>
      <a href="<?php the_permalink(); ?>">Read&nbsp;More</a>
    </div>
    <?php endwhile; ?>
  </div>
</div>

<?php endwhile; ?>
