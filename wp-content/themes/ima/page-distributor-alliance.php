<?php while (have_posts()) : the_post();
?>
<?php get_template_part('templates/content', 'page'); ?>
<?php get_template_part('templates/inner-hero'); ?>

<div class="main">
  <div class="link-wrap">
    <p>To find out more about our exclusive brands, contact one of our members below.</p>
  </div>
  <?php get_template_part('templates/map'); ?>
  <div class="members flex-container flex-two-column">
    <?php
      $args = array(
          'post_type'    => array(
              'member'
          ),
          'posts_per_page' => 2
       );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <div class="member">
      <?php the_post_thumbnail(); ?>
      <?php the_content(); ?>
      <a href="<?php the_field('member_url'); ?>" target="_blank">Place an Order</a>
    </div>
    <?php endwhile; ?>
   </div>
</div>
<div class="members-wrap">
  <div class="main">
    <div class="members flex-container flex-two-column">
      <?php
        $args = array(
            'post_type'    => array(
                'member'
            ),
            'posts_per_page' => 2,
            'offset' => 2
         );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>
      <div class="member flex-item">
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <a href="<?php the_field('member_url'); ?>">Place an Order</a>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<div class="main">
  <div class="members flex-container flex-two-column">
    <?php
      $args = array(
          'post_type'    => array(
              'member'
          ),
          'posts_per_page' => 2,
          'offset' => 4
       );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <div class="member flex-item">
      <?php the_post_thumbnail(); ?>
      <?php the_content(); ?>
      <a href="<?php the_field('member_url'); ?>">Place an Order</a>
    </div>
    <?php endwhile; ?>
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
            'posts_per_page' => 3
         );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>
      <?php if ( get_field('category') === 'member' ): ?>
      <div class="case-study flex-item">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
      </div>
      <?php endif; ?>
      <?php endwhile; ?>
    </div>
  </div>
  <div class="link-wrap">
    <a class="link-out" href="/case-studies">More Case Studies</a>
  </div>
</div>

<?php endwhile; ?>
