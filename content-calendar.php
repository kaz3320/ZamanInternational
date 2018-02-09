<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php $src =
  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
<div class="row no-gutters container-fluid calendar-content">
  <div class="col-3 calendar-date">
      <h2 class="date text-center"><?php echo date('M', strtotime(get_field('time_date'))); ?></h1>
      <h1 class="date text-center"><?php echo date('j', strtotime(get_field('time_date'))); ?></h1>
  </div>
  <div class="col-6 calendar-title">
  <?php the_title( sprintf('<h1 class="title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
      <small><i class="fa fa-calendar"></i><?php echo date('l F j, Y', strtotime(get_field('time_date'))); ?> |
      <span class="the-hour"><?php echo date('g:i a', strtotime(get_field('time_date')));?> -
       <?php echo date('g:i a', strtotime(get_field('end-time')));?>  </span> </small>
       <h6><i class="fa fa-map-marker"></i><?php the_field('location'); ?></h6>
  </div>
    <div class="col-3 calendar-image"
         style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
    </div>
</div>
</article>
