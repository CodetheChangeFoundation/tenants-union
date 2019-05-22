<?php
/**
 * Code the Change template for the index
 *
 * @package startertheme
 */
 ?>

<?php get_header(); ?>

<?php
  if(have_posts()):
    while(have_posts()): the_post(); ?>
    <h1><?php echo the_title(); ?></h1>
    <p><?php echo the_content(); ?></p>
    <?php endwhile;
  endif;
?>



<?php get_footer(); ?>
