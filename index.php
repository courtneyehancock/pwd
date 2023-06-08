<?php get_header(); ?>

<div class="main-content">
  <div class="internal-hero-image" style="background-color:#001b3d; background-image: linear-gradient(360deg, #00529be3, #00285ddb, #001a3d), url('https://pwd.aa.ufl.edu/wp-content/uploads/2021/03/0I1A5562-scaled.jpg');">
  <div class="container internal-div">
  <h1 class="internal-hero-text text-center">OPWD NEWS</h1>
  </div>
  </div>

  <div class="container pt-5 pb-5">
    <div class="row justify-content-center align-items-start">
    <?php
      if(have_posts()){

        while(have_posts()){
          the_post();?>
          <div class="col-xxl-2 m-3">
          <div class="card shadow">
            <img class="card-img-top" <?php the_post_thumbnail('medium'); ?><br>
          <img class="card-img-featured" <?php
            echo get_avatar( get_the_author_email(), '60' );
          ?> <br>
          <span class="badge badge-pill badge-primary spec"><?php the_category(); ?></span>
          <div class="card-body">
          <h3 class="post-title card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="block"></div>
          <div class="post-info">
            <p class="font-italic">Published: <?php echo get_the_date(); ?></p>
          </div>
          <p></p></div>
          <p>    <a href="<?php the_permalink(); ?>" class="btn btn-primary card-btn">READ POST</a>
          </p></div>
          </div>

    <?php
  } //ends while loop
      }//end if statement
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
