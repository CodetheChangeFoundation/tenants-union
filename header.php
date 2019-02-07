<?php
/**
 * Code the Change template for the header
 *
 * @package startertheme
 */
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description') ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif ?>
    <?php wp_head() ?>
  </head>

<!-- <body <?php body_class() ?>>

        <?php /* Primary navigation */
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'container-menu-class collapse navbar-collapse',
            'container_id'      => 'main-nav',
            'menu_class'        => 'nav navbar-nav navbar-right',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );

    ?>

      </div>
    </nav>
  </div> -->

  <!-- <body <?php body_class() ?>>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-md navbar-light bg-danger py-3 sticky-top border-bottom border-white">
        <div class="container">
          <div id="hack" class="collapse navbar-collapse" href="<?php echo get_home_url() ?>">Vancouver Tenants Union

          <?php

            wp_nav_menu([
              'menu'            => 'primary',
              'theme_location'  => 'primary',
              // 'container'       => 'div',
            //  'container_id'    => 'main-nav',
              'container_class' => 'collapse navbar-collapse',
              'menu_id'         => false,
              'menu_class'      => 'navbar-nav ml-auto px-3',
              'depth'           => 2,
              // 'fallback_cb'     => 'bs4navwalker::fallback',
              'walker'          => new bs4navwalker()
            ]);
          ?>
        </div>
        </div>
      </nav>
      <hr/> -->

      <!-- <div class="container-fluid">
       <div id="hack" class="collapse navbar-collapse" href="<?php echo get_home_url() ?>">Vancouver Tenants Union

     </div>

     <?php
     wp_nav_menu([
     'menu'            => 'primary',
     'theme_location'  => 'primary',
     'container'       => 'div',
     'container_id'    => 'bs4navbar',
     'container_class' => 'collapse navbar-collapse',
     'menu_id'         => false,
     'menu_class'      => 'navbar-nav mr-auto h-100',
     'depth'           => 2,
     'fallback_cb'     => 'bs4navwalker::fallback',
     'walker'          => new bs4navwalker()
     ]);
     ?>
   </nav> -->

   <div class="container-fluid">
        <!-- <img class="navbar-brand" src="<?php echo get_template_directory_uri(); ?>/assets/images/ClimateHubLogo.png" alt="logo" width=auto height=130/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
      </div>

      <?php
      wp_nav_menu([
      'menu'            => 'primary',
      'theme_location'  => 'primary',
      'container'       => 'div',
      'container_id'    => 'bs4navbar',
      'container_class' => 'collapse navbar-collapse',
      'menu_id'         => false,
      'menu_class'      => 'navbar-nav mr-auto h-100',
      'depth'           => 2,
      'fallback_cb'     => 'bs4navwalker::fallback',
      'walker'          => new bs4navwalker()
      ]);
      ?>
    </nav>
