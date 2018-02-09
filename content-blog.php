<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="row post-wrapper">
      <?php $src =
      wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
      <div class="col-3 post-image" style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
      </div>
      <div class="col-9 post-content">
        <?php the_title( sprintf('<h1 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
        <?php the_excerpt(); ?>

        <div class="credits">
              <small class="post-credits"><i class="fa fa-pencil"></i>Posted by <strong><?php echo get_the_author();?></strong> on <?php the_time('l, F jS, Y') ?>
                  <span class="tags"><?php the_tags('<i class="fa fa-tags"></i>',' / ') ?></span>
              </small>
          <hr>
        </div>
      </div>
  </div>
</article>
