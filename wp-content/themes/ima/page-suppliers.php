<?php while (have_posts()) : the_post();
  $image = get_field('form_background_image');
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

<div class="hero aspect-ratio-sixteen-five added-value-section">
  <div class="content">
    <p><?php the_field('added_value'); ?></p>
  </div>
</div>

<div class="form form-supplier" style="background-image: url(<?php echo $image; ?>);">
  <div class="main">
    <h6>Interested in becoming a supplier?</h6>
    <p>Fill out the form below and we'll be in touch shortly.</p>
    <?php echo gravity_form( 1, false, false, false, '', false ); ?>
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
            'orderby' => 'menu_order',
            'meta_key'    => 'category',
            'meta_value'  => 'supplier'
         );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>
        <div class="case-study flex-item">
          <a href="<?php the_permalink(); ?>">
          <h5 class="show-small"><?php the_title(); ?></h5>
            <div class="case-study-wrapper">
                <?php the_post_thumbnail(); ?>
                <p>Challenge: <?php the_field('challenge'); ?></p>
            </div>
            <h5 class="hide-small"><?php the_title(); ?></h5>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <div class="link-wrap">
    <a class="link-out" href="/case-studies">More Case Studies</a>
  </div>
</div>

<?php endwhile; ?>