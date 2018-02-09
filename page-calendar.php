<?php
get_header(  );
get_template_part( 'content', 'banner' );
 ?>
 <!--title-component-->
 <div class="container-fluid title-conponent">
   <div class="row title-row justify-content-center">
     <div class="col separator"></div>
     <div class="col-auto title">
       <h1>UPCOMING EVENTS</h1>
     </div>
     <div class="col separator"></div>
   </div>
   <p class="description">
     Nunc luctus in metus eget fringilla.
     Aliquam sed justo ligula. Vestibulum nibh erat,
     pellentesque ut laoreet vitae.
 </div>
 <!--title-component end-->
 <div class="row container-fluid calendar-main-container">
   <div class="col-3 calendar-left-container">
        <?php // TODO: sidebar goes here ?>
   </div>
   <div class="col-6 calendar-center-container ">
<?php
     $args = array(
                   'posts_per_page' => '5',
                   'post_type' => 'event',
                   'orderby' => 'meta_value',
                   'meta_key' => 'time_date',
                   'order' => 'ASC'
     );
     // TODO: fix the post per page problem
     $query = new WP_Query($args);
     $currDate = new DateTime(current_time( 'Y-m-d H:i' ));
     while($query->have_posts() ) : $query->the_post();
        $calDate = new DateTime(get_field( 'time_date' ));

   // following var dumps are used for testing the time functions
   //var_dump($calDate == $currDate);
   //var_dump($calDate > $currDate);
   //var_dump($calDate < $currDate);

  // check if date is older than current or not
      if($calDate >= $currDate){
        get_template_part('content', 'calendar');
      }
      endwhile;
      wp_reset_postdata();
?>
   </div>
   <div class="col-3 calendar-right-container">
     <div class="background">
       <h1 class="past-events-title">PAST EVENTS</h1>
       <hr>
       <?php
            $args = array(
                          'posts_per_page' => '3' ,
                          'post_type' => 'event',
                          'orderby' => 'meta_value',
                          'meta_key' => 'time_date',
                          'order' => 'ASC'
            );
            $query = new WP_Query($args);
            $currDate = new DateTime(current_time( 'Y-m-d H:i' ));
            while($query->have_posts() ) : $query->the_post();
          $calDate = new DateTime(get_field( 'time_date' ));
//        function to check if date is older than current
             if($calDate < $currDate){
               get_template_part('content', 'pastEvent');

             }
       ?>
       <?php endwhile;
       wp_reset_postdata();
       ?>
       <hr>
       <div class="btn-group btn-group-justified">
         <?php // TODO: insert url for buttons ?>
           <a href="#" class="btn btn-success">Volunteer</a>
           <a href="#" class="btn btn-warning">Donate</a>
       </div>
     </div>
   </div>
 </div>
<?php get_footer(); ?>
