<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
    <meta name="description" content="<?php bloginfo('description');?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class( ); ?>>
    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light" role="navigation">
          <div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php home_url();?>">
                  <img src="<?php echo get_template_directory_uri();?>/img/logo.png" width="180" height="95" alt="">
            </a>
            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav mr-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                    )
                  );
                  ?>
            </div>
            <form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline my-2 my-lg-0">
                <fieldset>
              		<div class="input-group">
              			<input type="text" name="s" id="search" placeholder="<?php _e("Search","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control mr-sm-2" />
              			<span class="input-group-btn">
              				<button type="submit" class="btn btn-outline-success my-2 my-sm-0"><?php _e("Search","wpbootstrap"); ?></button>
              			</span>
              		</div>
                </fieldset>
            </form>
        </nav>
    </header>
