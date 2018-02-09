<?php get_header(); ?>
  <main>

<!--carousel slide-->
      <div id="myCarousel" class="carousel carousel-fade" data-ride="carousel" data-interval="3000">

          <!--carousel-inner-->
          <div role="listbox" class="carousel-inner embed-responsive embed-responsive-21by9">
              <?php
              $k = 0;
              $args = array('post_type' => 'home_page_slides');
              $query = new WP_Query($args);
              $array_rev = array_reverse($query->posts);
              $query->posts = $array_rev;
              while($query->have_posts()) : $query->the_post();
              ?>
              <!-- carousel-item -->
              <div class="carousel-item embed-responsive-item <?php if($k == 0){ echo 'active'; }?>">

                <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
                <?php if( get_field( 'radio_button_text' ) == 'Show text') :?>

                  <div class="container-fluid slide-heading">
                    <div class="carousel-caption">
                      <h1><?php the_field('large_heading'); ?></h1>
                      <div class="slider-paragraph"><p><?php the_field('description_text');?></p></div>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
              <?php $k++; ?>
              <?php endwhile; ?>
          </div>
          <!--carousel-inner-->

          <!--prev next index-->
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--prev next index end  -->

          <!--animated heading start -->
          <div class="caption v-middle text-center" id="animated-heading">
            <h2 class="cd-headline clip">
              <?php
                $args = array('post_type' => 'animated-heading');?>
              <?php $query = new WP_Query($args);
              while($query->have_posts()) : $query->the_post();?>
              <span class="blc"><?php the_field('heading_text'); ?> | </span>
              <?php
              $fields = get_post_meta($post->ID, 'text', false);
              if(count($fields) != 0) { ?>
                <span class="cd-words-wrapper">

                  <?php $count = 0 ?>
                    <?php foreach($fields as $fields): ?>
                      <b class="<?php if($count == 0){ echo 'is-visible'; }?>"><?php echo $fields; ?></b>
                      <?php $count++; endforeach;; ?>
                </span>
                <?php } ?>
                <?php endwhile; ?>
              </h2>
            </div><!--.caption-->
          <!--animated heading end  -->

        <!--button group -->
        <div id="button_group_id" class="container-fluid">
            <div class="btn-group btn-group-justified">
              <?php // TODO: insert url for buttons ?>
                <a href="#" class="btn btn-danger">Need Help</a>
                <a href="#" class="btn btn-success">Volunteer</a>
                <a href="#" class="btn btn-warning">Donate</a>
                <a href="#" class="btn btn-info">Wishlists</a>
            </div>
        </div>
      <!--button group end  -->

    </div><!--#myCarousel-->

    <!--title-component-->
    <div class="container-fluid title-conponent">
      <div class="row title-row justify-content-center">
        <div class="col separator"></div>
        <div class="col-auto title">
          <h1>WHAT WE DO</h1>
        </div>
        <div class="col separator"></div>
      </div>
      <p class="description">
        Nunc luctus in metus eget fringilla.
        Aliquam sed justo ligula. Vestibulum nibh erat,
        pellentesque ut laoreet vitae.
    </div>
    <!--title-component end-->
    <!--start of featured boxes with icons  -->
    <div class="row justify-content-center impact-boxes">
        <div class="col-lg item">
          <div data-bs-hover-animate="pulse" class="box">
            <i class="fa fa-eye icon"></i>
            <h3 class="title-of-box">Vision</h3> <!-- change tittle of box here-->
            <p class="description-of-box">
              Aenean tortor est, vulputate quis leo in,
              vehicula rhoncus lacus. Praesent aliquam in tellus eu.
            </p><!-- change description of box here-->
            <a href="#" class="learn-more-link">Learn more »</a>
          </div>
        </div>
        <div class="col-lg item">
          <div data-bs-hover-animate="pulse" class="box">
            <i class="fa fa-bullseye icon"></i>
            <h3 class="title-of-box">Mission</h3>
            <p class="description-of-box">
              Aenean tortor est, vulputate quis leo in,
              vehicula rhoncus lacus. Praesent aliquam in tellus eu.
            </p>
            <a href="#" class="learn-more-link">Learn more »</a>
          </div>
        </div>
        <div class="col-lg item">
          <div data-bs-hover-animate="pulse" class="box">
            <i class="fa fa-line-chart icon"></i>
            <h3 class="title-of-box">Impact</h3>
            <p class="description-of-box">
              Aenean tortor est, vulputate quis leo in,
               vehicula rhoncus lacus. Praesent aliquam in tellus eu.
             </p>
            <a href="#" class="learn-more-link">Learn more »</a>
          </div>
        </div>
    </div>
    <!--end of featured boxes with icon  -->
    <!--title-component-->
    <div class="container-fluid title-conponent">
      <div class="row title-row justify-content-center">
        <div class="col separator"></div>
        <div class="col-auto title">
          <h1>FEATURED CONTENT</h1>
        </div>
        <div class="col separator"></div>
      </div>
      <p class="description">
        Nunc luctus in metus eget fringilla.
        Aliquam sed justo ligula. Vestibulum nibh erat,
        pellentesque ut laoreet vitae.
    </div>
    <!--title-component end-->
    <!--Featured content updated-->
    <div class="row container-fluid post-contents">
     <div class="col-4 single-post">
<?php//==========================================================================
          $args = array(
            'posts_per_page' => '6',
            'post_type' => 'event',
            'orderby' => 'meta_value',
            'meta_key' => 'time_date',
            'order' => 'ASC'
              );
      $event_query = new WP_Query($args);
      $check = true;
      if($event_query->have_posts() ):
          $currDate = new DateTime(current_time( 'Y-m-d H:i' ));
          while($event_query->have_posts() && $check == true) : $event_query->the_post();
                $calDate = new DateTime(get_field( 'time_date' ));
                  if($calDate >= $currDate){
                    get_template_part( 'content', 'featured' );
                    $check = false;
                    }
          endwhile;
      endif;
      wp_reset_postdata();
?>
     </div>
     <div class="col-4 single-post">
<?php//=========================================================================
      $args = array(
        'post_type' => 'news',
        'posts_per_page' => 1
      );
      $news_query = new WP_Query($args);
      if($news_query->have_posts() ):
          while($news_query->have_posts()) : $news_query->the_post();
              get_template_part( 'content', 'featured' );
          endwhile;
      endif;
?>
     </div>
     <div class="col-4 single-post">
<?php//=========================================================================
      $args = array(
        'post_type' => 'blog-post',
        'posts_per_page' => 1
      );
      $blog_query = new WP_Query($args);
      if($blog_query->have_posts() ):
          while($blog_query->have_posts()) : $blog_query->the_post();
              get_template_part( 'content', 'featured' );
          endwhile;
      endif;
?>
     </div>
    </div>
    <!--Featured content updated end-->

        <!--   $args_cat = array(
           'include'   =>  '14, 15, 16'
          );
          $categories = get_categories($args_cat);
          foreach($categories as $category):

              $args = array(
                'type'            =>    'post',
                 'posts_per_page'   =>     1,
                 'category__in'    =>    $category->term_id,
               ); -->

    <!--title-component-->
    <div class="container-fluid title-conponent">
      <div class="row title-row justify-content-center">
        <div class="col separator"></div>
        <div class="col-auto title">
          <h1>STAY CONNECTED</h1>
        </div>
        <div class="col separator"></div>
      </div>
      <p class="description">
        Nunc luctus in metus eget fringilla.
        Aliquam sed justo ligula. Vestibulum nibh erat,
        pellentesque ut laoreet vitae.
    </div>
    <!--title-component end-->
    <div class="container-fluid newsletter">
      <div class="row no-gutters newsletter-content">
        <div class="col-3 title">
            <i class="fa fa-newspaper-o"></i>
            <h1>Subscribe<br />To Our<br /><span>Newsletter</span></h1>
        </div>
        <div class="col-1 triangle">
            <i class="fa fa-play"></i>
        </div>
        <div class="col-5 info">
          <label for="exampleInputEmail1"><h3>What is your email?</h3></label>
          <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="col-3 submit">
          <h3>What is your interest?</h3>
          <ul>
            <li>
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Zaman Programs
              </label>
            </li>
            <li>
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck2">
                Volunteering
              </label>
            </li>
            <li>
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck3">
                Good Deeds Resale
              </label>
            </li>
            <li>
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck4">
                Donations
              </label>
            </li>
          </ul>
          <button type="submit" class="btn">Submit</button>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>
