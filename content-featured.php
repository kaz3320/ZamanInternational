<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php $post_type = get_post_type( ); ?>
  <h1><?php echo $post_type; ?></h1>
  <div class="post-image">
    <a href="#">
        <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
    </a>
  </div>
  <div class="post-content">
    <div class="post-header">
      <img class"img-responsive" src="<?php echo get_template_directory_uri();?>/img/logo-b.png" alt="">

    </div>
        <?php the_title( sprintf('<h2 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
        <?php the_excerpt(); ?>
    <a class="transparent-bg-btn medium-btn"href="<?php echo get_permalink(); ?>">Read More</a>
  </div>
</article>
