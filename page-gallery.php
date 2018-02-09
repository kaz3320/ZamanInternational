<?php
get_header(  );
get_template_part( 'content', 'banner' );
 ?>

<div class="container-fluid gallery-container">
  <?php echo do_shortcode( '[2jgallery 647]'); ?>
</div>

<?php get_footer(); ?>
