<?php while (have_posts()) : the_post();
	$image = get_field('form_background_image');
?>
  <?php get_template_part('templates/content', 'page'); ?>
  <div class="form form-contact" style="background-image: url(<?php echo $image; ?>);">
  <div class="main">
    <h2>Contact</h2>

      <?php
        $number =  get_field('phone_number', 'option');
        $number_stripped = str_replace(".", "", $number);
      ?>

      <p>
        <a href="tel:<?php echo $number_stripped; ?>"><?php echo $number; ?></a> &#8226; <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
      </p>
      <p>
        <a href="<?php the_field('google_maps_link', 'option'); ?>"><?php the_field('address', 'option'); ?></a>
      </p>

      <?php echo gravity_form( 2, false, false, false, '', false ); ?>

  </div>
</div>
<?php endwhile; ?>
