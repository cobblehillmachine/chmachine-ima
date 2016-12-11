<?php while (have_posts()) : the_post();
  $header = get_field('header');
  $content = get_field('content');
?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/hero'); ?>

  <div class="main">
    <div class="full-width-text-block">
      <div class="arrow-up"></div>
      <h2><?php echo $header; ?></h2>

      <?php echo $content; ?>

    </div>

    <?php get_template_part('templates/four-blocks'); ?>
    <?php get_template_part('templates/background-image-section'); ?>

    <div class="full-width-text-block">
      <h2>Distributor Alliance</h2>
    </div>
    <div class="members">

      <?php
        $args = array(
            'post_type'    => array(
                'member'
            ),
            'posts_per_page' => -1,
            'orderby' => 'menu_order'
         );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>

      <div class="member">

        <?php the_post_thumbnail(); ?>

      </div>

      <?php endwhile; ?>

    </div>

  </div>

<?php endwhile; ?>
