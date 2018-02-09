<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php $src =
  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
  <div class="news-image-wrapper" style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
      <div class=" post-title-group">
        <small class="post-credits">Posted by <strong><?php echo get_the_author();?></strong> on <?php the_time('l, F jS, Y') ?></small>
        <?php the_title( sprintf('<h1 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
      </div>
  </div>
</article>
