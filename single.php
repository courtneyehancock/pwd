<?php get_header(); ?>

<div class="main-content pt-5 pb-5">
  <div class="internal-hero-image" style="margin-top: 42px; background-color:#001b3d; background-image: linear-gradient(to bottom, rgba(2, 40, 93, 1), rgba(245, 246, 252, 0.52)), url('https://pwd.aa.ufl.edu/wp-content/uploads/2021/03/0I1A5562-scaled.jpg');">
<div class="container internal-div">
<h1 class="hero-text">OPWD INSIDER</h1>
<div class="block"></div>
</div>
</div>
  <div class="container mt-5">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>
        <div class="post-feature">
          <?php the_post_thumbnail(); ?>
        </div>
        <h2 class="post-title mt-3"><?php the_title(); ?></h2>
        <?php
          echo get_avatar( get_the_author_email(), '60' );
        ?>
        <p class="written-by"><?php echo "This post is written by: " . get_the_author(); ?></p>
        <p class="published"><?php echo "| Published: " . get_the_date(); ?></p>
        <?php the_content(); ?>

      </div>
        <?php
      }
    }
  /*  if (comments_open() || get_comments_number()):
      comments_template();
    endif;*/
  ?>
  </div>
</div>
<?php get_footer(); ?>
