<?php get_header( );
  get_template_part( 'content', 'banner' );?>
<div class="row">

  <div class="col-xs-12 col-sm-9">

    <div class="blog-container container-fluid">
      <?php
          $blog_loop = new WP_Query(array(
                  'post_type'   => 'blog-post',
                  'posts_per_page' => 3,
                  'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1)
          );

          while($blog_loop->have_posts() ) : $blog_loop->the_post(); ?>

              <?php get_template_part( 'content', 'blog' ); ?>

          <?php endwhile;?>
      <div class="pagination">
          <?php
              $big = 999999999;
                 echo paginate_links( array (
                   'base' => str_replace( $big, '%#%',get_pagenum_link($big) ),
                   'format' => '?paged=%#%',
                   'current'=> max(1 , get_query_var('paged') ),
                   'total' => $blog_loop->max_num_pages
              ) );
          ?>
      </div>        
    </div>
  </div>
  <div class="col-xs-12 col-sm-3 column">
      <div class="icon-sidebar-container container-fluid">

        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" width="300" height="165" alt="">

        <div class="social-media sidebar-social-media">
          <h1 class="widget-title">Folow Us On Social Media.</h1>
          <?php // TODO: insert url values for social media anchors to call contact us page ?>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <div class="sidebar-container container-fluid">

        		<?php get_sidebar(); ?>

        </div>
    </div>
	</div>
</div>
<?php get_footer(); ?>
