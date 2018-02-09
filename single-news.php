<?php get_header( ); ?>
  <div class="container single-blog">
      <?php if ( have_posts() ):?>
        <?php while ( have_posts() ): the_post(); ?>
            <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
              <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),
              'full', false, '' ); ?>
              <div class="container-fluid single-blog-image"
                  style="background-image: url('<?php echo esc_url( $src[0] ); ?>')"></div>
                  <?php the_title('<h1 class="entry-title">','</h1>'); ?>
                  <small class="single-blog-credits"><i class="fa fa-pencil"></i>Posted by <strong><?php echo get_the_author();?></strong>
                      <span class="single-blog-tags"><?php the_tags('<i class="fa fa-tags"></i>',' / ') ?></span>
                  </small>
                  <hr>
                <?php the_content(); ?>
                <hr>
            </article>
        <?php endwhile; ?>
      <?php endif; ?>
  </div>
<?php get_footer( ); ?>
