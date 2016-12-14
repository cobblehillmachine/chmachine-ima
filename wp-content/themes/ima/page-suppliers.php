<?php while (have_posts()) : the_post();
?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/inner-hero'); ?>

  <div class="main">
    <div class="full-width-text-block">
      <h2>Partnership Benefits</h2>
    </div>
    <div class="benefits">

    <?php
      if( have_rows('partnership_benefit') ):
        while ( have_rows('partnership_benefit') ) : the_row();
    ?>

    <div class="benefit">
      <h3><?php echo the_sub_field('benefit_title'); ?></h3>
      <p><?php echo the_sub_field('benefit_description'); ?></p>
    </div>

    <?php endwhile; endif; ?>

    </div>
  </div>

  <?php get_template_part('templates/background-image-section'); ?>

  <div class="main">
    <div class="full-width-text-block">
      <h2>Case Studies</h2>
    </div>
    <div class="benefits">
    <div class="case-study-section">

      <?php
        $args = array(
            'post_type'    => array(
                'case_study'
            ),
            'posts_per_page' => 3,
            'orderby' => 'menu_order'
         );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>

      <div class="case-study">

        <a href="<?php the_permalink(); ?>">

          <?php the_post_thumbnail(); ?>

        </a>
      </div>

      <?php endwhile; ?>

      </div>
  </div>

<?php endwhile; ?>