<?php /* Template Name: Search Page */
get_header();
?>
<div class="main-content">
  <div class="container pt-5 pb-5">
        <h1>Search Results</h1>
        <?php if(have_posts()){?>
                <h2><?php printf(__('Results for: %s'), '<span>' . get_search_query() . '</span>');?></h2>
                <hr>
                <?php while(have_posts()){
                  the_post(); ?>
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php the_excerpt();
                }
              }else{?>
                <h1>Nothing was found</h1>
                <p>Try another search term.</p>
                <?php
                get_search_form();
              }
        ?>
  </div>
</div>
<?php get_footer(); ?>
