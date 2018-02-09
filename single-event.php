<?php get_header( ); ?>
  <div class="container single-blog event">
      <?php if ( have_posts() ):?>
        <?php while ( have_posts() ): the_post(); ?>
            <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
              <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),
              'full', false, '' ); ?>
              <div class="container-fluid single-blog-image"
                  style="background-image: url('<?php echo esc_url( $src[0] ); ?>')"></div>
                  <?php the_title('<h1 class="entry-title">','</h1>'); ?>
                  <h6 class="the-date"><i class="fa fa-calendar"></i><?php echo date('l F j, Y', strtotime(get_field('time_date'))); ?></h6>
                  <h6 class="the-hour"><i class="fa fa-clock-o"></i><?php echo date('g:i a', strtotime(get_field('time_date')));?> -
                   <?php echo date('g:i a', strtotime(get_field('end-time')));?> </h6>
                  <h6 class="the-location"><i class="fa fa-map-marker"></i><?php the_field('location'); ?></h6>
                  <hr>
                <?php the_content(); ?>
                <hr>
            </article>
        <?php endwhile; ?>
      <?php endif; ?>
  </div>
<?php get_footer( ); ?>
