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
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif ?>
    <?php wp_head() ?>
      <style><?php include 'style.css';?></style>
  </head>

  <div  class="container-fluid p-0">
        <nav class="navbar navbar-expand-md navbar-light bg-primary py-3 sticky-top border-bottom border-white">
          <div class="container">
            <a class="navbar-brand" >Vancouver <br/> Tenants <br/> Union</a>
            <a class="navbar-brand"><img src="/wp-content/themes/tenantsunion_theme/assets/images/VTU_Logo.png" class="img-responsive" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <?php
              wp_nav_menu([
                'menu'            => 'primary',
                'theme_location'  => 'primary',
                'container'       => 'div',
                'container_id'    => 'bs4navbar',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav ml-auto px-3',
                'depth'           => 2,
                'fallback_cb'     => 'bs4navwalker::fallback',
                'walker'          => new bs4navwalker()
              ]);
            ?>
          </div>
        </nav>
