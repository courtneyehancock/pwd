<?php /* Template Name: Search Page */
get_header();
?>
<div class="main-content internal-div">
  <div class="container pt-5">
        <?php if(have_posts()){?>
                <h1><?php printf(__('SEARCH RESULTS FOR : %s'), '<span>' . get_search_query() . '</span>');?></h1>
                <div class="block"></div>
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
              }else{?>
                <h1 class="text-center hero-text" style="text-transform:uppercase; color:#00529b;">Nothing was found</h1>
                <h2 class="text-center mb-5">Try another search term.</h2>
                <div class="text-center"><?php
                get_search_form();
              }
        ?></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
