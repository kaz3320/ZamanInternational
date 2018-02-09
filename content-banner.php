<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="wrapper container-fluid">
  <?php $src =
  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
  <div class="row image" style="background-image: url('<?php echo esc_url( $src[0] ); ?>')">
    <div class="col-9 title-header">
        <h1 class="title">Zaman |<strong> <?php wp_title('');?></strong></h1>
    </div>
    <div class="col-3">
      <div class="info">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
            endif; ?>
      </div>
    </div>
  </div>
</div>
</article>
