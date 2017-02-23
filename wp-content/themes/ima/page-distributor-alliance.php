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
          'posts_per_page' => 2,
          'orderby' => 'title',
          'order' => 'ASC'
       );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <div class="member">
      <?php the_post_thumbnail(); ?>
      <?php the_content(); ?>
      <?php $title_data = str_replace(' ', '-', strtolower(get_the_title()) ); ?>
      <a data-title="<?php echo $title_data; ?>" class="place-order" href="<?php the_field('member_url'); ?>" target="_blank">Place an Order</a>
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
            'orderby' => 'title',
            'order' => 'ASC',
            'offset' => 2
         );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>
      <div class="member flex-item">
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php $title_data = str_replace(' ', '-', strtolower(get_the_title()) ); ?>
        <a data-title="<?php echo $title_data; ?>" class="place-order" href="<?php the_field('member_url'); ?>">Place an Order</a>
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
          'orderby' => 'title',
          'order' => 'ASC',
          'offset' => 4
       );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <div class="member flex-item">
      <?php the_post_thumbnail(); ?>
      <?php the_content(); ?>
      <?php $title_data = str_replace(' ', '-', strtolower(get_the_title()) ); ?>
      <a data-title="<?php echo $title_data; ?>" class="place-order" href="<?php the_field('member_url'); ?>">Place an Order</a>
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
            'posts_per_page' => 3,
            'meta_key'    => 'category',
            'meta_value'  => 'member'
         );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        $category = get_field('category');
        if ( $category === 'member' ): 
      ?>
        <div class="case-study flex-item">
          <a href="<?php the_permalink(); ?>">
            <h5 class="show-small"><?php the_title(); ?></h5>
            <div class="case-study-wrapper">
                <?php the_post_thumbnail(); ?>
            </div>
            <h5 class="hide-small"><?php the_title(); ?></h5>
          </a>
        </div>
      <?php endif; endwhile; ?>
    </div>
  </div>
  <div class="link-wrap">
    <a class="link-out" href="/case-studies">More Case Studies</a>
  </div>
</div>

<?php endwhile; ?>
