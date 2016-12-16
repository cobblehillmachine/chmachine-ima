<?php while (have_posts()) : the_post();

?>

<div class="hero aspect-ratio-sixteen-three">
  <div class="content">
    <p><?php the_date('m.d.y'); ?></p>
    <h2><?php the_title(); ?></h2>
  </div>
</div>
<div class="main">
  <div class="aspect-ratio-sixteen-six post-image" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>">
  </div>
  <div class="content">
    <?php the_content(); ?>
  </div>
</div>


<?php endwhile; ?>
