<?php get_header(); ?>

<div class="main-content">
  <div class="internal-hero-image" style="background-color:#001b3d; background-image: linear-gradient(to bottom, rgba(2, 40, 93, 1), rgba(245, 246, 252, 0.52)), url('https://pwd.aa.ufl.edu/wp-content/uploads/2021/03/0I1A5562-scaled.jpg'); height:300px; background-position: 50% 25%; background-size:cover;">
  <div class="container internal-div">
  <h1 class="hero-text">OPWD INSIDER</h1>
  <div class="block"></div>
  </div>
  </div>
      <div class="container d-flex p-4 justify-content-center align-content-center align-items-end">
    <h2 class="pr-3">Looking for something specific?</h2><form role="search" method="get" id="searchform" class="searchform" action="https://pwd.aa.ufl.edu/">
				<div>
					<label class="screen-reader-text" for="s">Search for:</label>
					<input type="text" value="" name="s" id="s">
					<input type="submit" id="searchsubmit" value="Search">
				</div>
			</form>
      </div>

  <div class="container-fluid">
    <div class="row justify-content-center">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>

          <div class="col-lg-3 posts">
            <?php the_post_thumbnail('medium'); ?>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <?php
              $archive_year = get_the_time('Y');
              $archive_month = get_the_time('m');
              $archive_day = get_the_time('d');
            ?>
            <div class="post-info">
              <p class="font-italic">Published: <?php echo get_the_date(); ?></p>
            <!--  <p class="category-label font-italic">Category: <?php the_category(); ?></p>-->
            </div>
          </div>
    <?php } //ends while loop
      }//end if statement
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
