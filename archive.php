<?php /* Template Name: Archive Page */
get_header();
?>
<div class="main-content">
  <div class="internal-hero-image" style="background-color:#001b3d; background-image: linear-gradient(120deg, rgba(2, 40, 93, 1), rgba(245, 246, 252, 0.52)), url('https://pwd.aa.ufl.edu/wp-content/uploads/2021/03/0I1A5562-scaled.jpg');">
  <div class="container internal-div">
  <h1 class="hero-text">OPWD INSIDER</h1>
  </div>
  </div>
  <div class="container mt-5 mb-5 pb-5">
        <h1 class="archive-title hero-text text-center pb-5" style="color:#00529b !important;">Category: <span style="border-bottom:2px solid #ff590e;"><?php
          if(is_category()){
            single_cat_title();
          }elseif(is_tag()){
            single_tag_title();
          }elseif(is_day()){
            echo "Daily Archives: " . get_the_date();
          }elseif(is_month()){
            echo "Monthly Archives: " . get_the_date('F Y');
          }elseif(is_year()){
            echo "Yearly Archives: " . get_the_date('Y');
          }else{
            echo "Archives";
          }
         ?></span>
       </h1>
        <div class="row justify-content-center align-items-start">

        <?php if(have_posts()){
                while(have_posts()){
                  the_post(); ?>
                  <div class="col-xxl-2 m-3">
                  <div class="card shadow">
                    <img class="card-img-top" <?php the_post_thumbnail('medium'); ?><br>
                  <img class="card-img-featured" <?php
                    echo get_avatar( get_the_author_email(), '60' );
                  ?> <br>
                  <span class="badge badge-pill badge-primary spec"><?php the_category(); ?></span>
                  <div class="card-body">
                  <h2 class="post-title card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </h2>
                  <div class="block"></div>
                  <div class="post-info">
                    <p class="font-italic">Published: <?php echo get_the_date(); ?></p>
                <!--<p class="category-label font-italic">Category: <?php the_category(); ?></p>-->
                  </div>
                  <p></p></div>
                  <p>    <a href="<?php the_permalink(); ?>" class="btn btn-primary card-btn">READ POST</a>
                  </p></div>
                  </div>
              <?php  }
              }
        ?>
      </div>
</div>
</div>

<?php get_footer(); ?>
