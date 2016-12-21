<?php while (have_posts()) : the_post();
?>
<?php get_template_part('templates/content', 'page'); ?>
<?php get_template_part('templates/inner-hero'); ?>

<div class="main">
  <div class="full-width-text-block">
    <h2>Partnership Benefits</h2>
  </div>
  <div class="benefits flex-container">
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
<?php get_template_part('templates/form-supplier'); ?>

<div class="hero aspect-ratio-sixteen-five">
  <div class="content">
    <p><?php the_field('added_value'); ?></p>
  </div>
</div>
<div class="main">
  <div class="full-width-text-block">
    <h2>Case Studies</h2>
  </div>
  <div class="benefits">
    <div class="case-study-section flex-container flex-three-column">
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
        $category = get_field('category');
        // if ( $category === 'supplier' ): 
      ?>
      <div class="case-study flex-item">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
      </div>
      <?php endwhile; ?>
      <!-- endif; -->
    </div>
  </div>
  <div class="link-wrap">
    <a class="link-out" href="/case-studies">More Case Studies</a>
  </div>
</div>

<?php endwhile; ?>