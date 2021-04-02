<?php get_header(); ?>

<div class="main-content pt-5 pb-5">
  <div class="hero-image" style="background-color:#001b3d; background-image: linear-gradient(to bottom, rgba(0, 27, 61, 1), rgba(245, 246, 252, 0.52)), url('https://pwd.aa.ufl.edu/wp-content/uploads/2021/03/0I1A5562-scaled.jpg'); height:300px; background-position: 50% 25%; background-size:cover;">
<div class="container internal-div">
<h1 class="hero-text" style="margin-top:80px;">OPWD INSIDER</h1>
<div class="block"></div>
</div>
</div>
  <div class="container">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>
        <div class="post-feature">
          <?php the_post_thumbnail(); ?>
        </div>
        <h2 class="post-title mt-3"><?php the_title(); ?></h2>
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
