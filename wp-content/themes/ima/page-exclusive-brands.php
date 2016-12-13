<?php while (have_posts()) : the_post();
?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/inner-hero'); ?>

  <div class="main">
    <div class="brands">


        <?php
          $args = array(
              'post_type'    => array(
                  'brand'
              ),
              'posts_per_page' => -1,
              'orderby' => 'menu_order'
           );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
        ?>

        <div class="brand">

            <?php the_post_thumbnail(); ?>
            <h2><?php the_title(); ?></h2>

            <p class="subtitle">

              <?php echo the_field('subtitle'); ?>

            </p>

            <?php the_content(); ?>

        </div>

        <?php endwhile; ?>

    </div>
  </div>

<?php endwhile; ?>
