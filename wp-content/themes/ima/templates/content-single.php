<?php while (have_posts()) : the_post(); ?>

<div class="hero aspect-ratio-sixteen-three">
  <div class="content">
    <p><?php the_date('m.d.y'); ?></p>
    <h2><?php the_title(); ?></h2>
  </div>
</div>
<div class="main">
  <div class="mobile-content">
    <p><?php the_date('m.d.y'); ?></p>
    <h2><?php the_title(); ?></h2>
  </div>
  <div class="header-image">
  	<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
  </div>
  <div class="content">
    <?php the_content(); ?>
  </div>
  <div class="flex-container prev-next-section">
  	<div>
  		<?php previous_post_link('%link', '<span><i class="fa fa-arrow-left"></i> Prev</span>'); ?>
  	</div>
  	<div>
  		<?php next_post_link('%link', '<span>Next <i class="fa fa-arrow-right"></i></span>'); ?>
  	</div>
  </div>
</div>

<?php endwhile; ?>