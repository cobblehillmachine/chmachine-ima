<footer>
  <div class="footer-main">
    <div class="wrap">
      <img src="/wp-content/themes/ima/assets/images/footer-logo.png">
      <?php
        $number =  get_field('phone_number', 'option');
        $number_stripped = str_replace(".", "", $number);
      ?>
      <a href="tel:<?php echo $number_stripped; ?>"><?php echo $number; ?></a>
      <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
      <a href="<?php the_field('google_maps_link', 'option'); ?>"><?php the_field('address', 'option'); ?></a>
      <div class="footer-social">
        <a href="<?php echo the_field('youtube_url', 'option'); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        <a href="<?php echo the_field('linkedin_url', 'option'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <?php echo date("Y") ?> &copy; Independent Marketing Alliance. All Rights Reserved.
  </div>
</footer>
