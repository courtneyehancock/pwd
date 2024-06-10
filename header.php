<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PZVDB2M');</script>
  <!-- End Google Tag Manager -->
  <!--Facebook Meta Tag-->
  <meta name="facebook-domain-verification" content="rtkjhpxmfz6ny9m5emxv1v6j2up7jk" />


  <!--Classica Web Font-->
  <link rel="stylesheet" href="https://use.typekit.net/roz5znz.css">
  <!--font awesome-->
  <script src="https://kit.fontawesome.com/45fdff44f1.js" crossorigin="anonymous"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZVDB2M"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
<header>
  <div class="align-content-center">
    <div class="row main-nav">
      <div class="col-md-3" id="site-logo">
          <div>
          <!--If/else for Logo and Site Title-->
          <?php if(get_header_image() == '') { ?>
            <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php
          }else{?>
            <a href="<?php echo home_url('/'); ?>"><img class="align-middle uf-logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
            <?php
          }
          ?>
        </div>
      </div>

      <div class="col-md-9 d-flex align-items-center justify-content-end search-nav">
        <div class="col-md-4 text-right">
          <!--Middle Right Footer-->
          <?php dynamic_sidebar('head-social-widget'); ?>
        </div>
        <div class="d-flex align-items-center"><i class="fas fa-search mr-2" style="color:#ff590e;"></i>
        <form role="search" method="get" id="searchform" class="searchform" action="https://pwd.aa.ufl.edu/">
    				<div>
    					<label class="screen-reader-text" for="s">Search for:</label>
    					<input type="text" value="" name="s" id="s">
    					<input type="submit" id="searchsubmit" value="Search">
    				</div>
    			</form>
      </div>
    </div>
      <div class="col-md-12" id="site-nav">
        <!--Navigation-->
        <?php wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container-class' => 'menu-header'
          ));
        ?>
      </div>
    </div>
  </div>
</header>
