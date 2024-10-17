<?php /*Template Name: Internal Page Template*/ ?>

<?php get_header(); ?>

<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
  
<div class="main-content">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post();?>
        <?php the_content();
      }
    }
  ?>
</div>

<?php get_footer(); ?>
