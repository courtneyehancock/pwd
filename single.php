<?php get_header(); ?>

<div class="main-content pt-5 pb-5">
  <div class="internal-hero-image-blog" style="background-color:#001b3d; background-image: linear-gradient(to bottom, rgba(2, 40, 93, 1), rgba(245, 246, 252, 0.52)), url('https://pwd.aa.ufl.edu/wp-content/uploads/2021/03/0I1A5562-scaled.jpg');">
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

        <div class="row shadow">
          <div class="col-md-3 p-4" style="background-color:#f4f4f4;">
            <?php
              echo get_avatar( get_the_author_email(), '60' );
            ?>
            <p class="written-by mt-3"><?php echo "Written by: " . get_the_author(); ?></p>
            <p class="published"><?php echo "Published: " . get_the_date(); ?></p>
            <hr>
            <p class="pl-2 pr-2"><em>Keep up with all things OPWD by reading our bi-monthly office updates.</em></p>

            <p class="pl-2 pr-2"><em>The Office of Professional and Workforce Development (OPWD) supports the Office of Teaching and Technology and the University of Florida in offering non-credit education for adult learners across multiple modalities, e.g. online, face-to-face, and conferences.</em></p>

            <p class="pl-2 pr-2"><em>Is there a topic under our umbrella that you would like to learn or see more about? Email Courtney Hancock at <a href="mailto:cehancock@mail.ufl.edu">cehancock@mail.ufl.edu</a> with your ideas.</em></p>
          </div>
          <div class="col-md-9 p-4">
            <div class="post-feature shadow">
              <?php the_post_thumbnail(); ?>
            </div>
            <h1 class="post-title mt-3"><?php the_title(); ?></h1>
            <div class="block"></div>
            <?php the_content(); ?>
          </div>
        </div>

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
