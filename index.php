<?php get_header(); ?>

<div class="main-content">
  <div class="internal-hero-image" style="background-color:#001b3d; background-image: linear-gradient(120deg, rgba(2, 40, 93, 1), rgba(245, 246, 252, 0.52)), url('https://pwd.aa.ufl.edu/wp-content/uploads/2021/03/0I1A5562-scaled.jpg');">
  <div class="container internal-div">
  <h1 class="hero-text">OPWD INSIDER</h1>
  </div>
  </div>
      <div class="container d-flex p-5 justify-content-center align-content-center align-items-center">
    <h2 class="pr-3">Looking for something specific?</h2><form role="search" method="get" id="searchform" class="searchform" action="https://pwd.aa.ufl.edu/">
				<div>
					<label class="screen-reader-text" for="s">Search for:</label>
					<input type="text" value="" name="s" id="s">
					<input type="submit" id="searchsubmit" value="Search">
				</div>
			</form>
      </div>

  <div class="container pb-5">
    <div class="row justify-content-center align-items-start">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>
          <div class="col-xxl-2 m-2">
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
      <!--  <div class="col-lg-3 posts p-3">
            <?php the_post_thumbnail('medium'); ?>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <?php
              $archive_year = get_the_time('Y');
              $archive_month = get_the_time('m');
              $archive_day = get_the_time('d');
            ?>
            <div class="post-info">
              <p class="font-italic">Published: <?php echo get_the_date(); ?></p>-->
            <!--  <p class="category-label font-italic">Category: <?php the_category(); ?></p>
            </div>
          </div>-->
    <?php } //ends while loop
      }//end if statement
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
