<?php
//Adds featured imgs to posts
  add_theme_support('post-thumbnails');


  /*-------------------------------------

  Adds style sheet and JavaScript files

  -----------------------------------------*/

  function custom_theme_scripts() {
  //Bootstrap integration
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

  //main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

  //font awesome
  	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/all.css');

  //Javascript files
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
  }

  add_action('wp_enqueue_scripts', 'custom_theme_scripts');


  //Widget Areas
  function blank_widgets_init() {

    //Home: Banner Widget
    register_sidebar(array(
      'name'          => ('Banner Home'),
      'id'            => 'banner-home',
      'description'   => 'Top banner widget area in home page',
      'before_widget' => '<div class="widget-home widget-top">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Footer: Left Widget
    register_sidebar(array(
      'name'          => ('Left Footer'),
      'id'            => 'left-footer',
      'description'   => 'Left widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Footer: Middle Widget
    register_sidebar(array(
      'name'          => ('Middle Footer'),
      'id'            => 'middle-footer',
      'description'   => 'Middle widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-menu-title">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Footer: Middle Right Widget
    register_sidebar(array(
      'name'          => ('Middle Right Footer'),
      'id'            => 'middle-right-footer',
      'description'   => 'Middle right widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Footer: Right Widget
    register_sidebar(array(
      'name'          => ('Right Footer'),
      'id'            => 'right-footer',
      'description'   => 'Right widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  }

  add_action('widgets_init', 'blank_widgets_init');

  //Author Box
  function wpb_author_info_box( $content ) {

  global $post;

  // Detect if it is a single post with a post author
  if ( is_single() && isset( $post->post_author ) ) {

  // Get author's display name
  $display_name = get_the_author_meta( 'display_name', $post->post_author );

  // If display name is not available then use nickname as display name
  if ( empty( $display_name ) )
  $display_name = get_the_author_meta( 'nickname', $post->post_author );

  // Get author's biographical information or description
  $user_description = get_the_author_meta( 'user_description', $post->post_author );

  // Get author's website URL
  $user_website = get_the_author_meta('url', $post->post_author);

  // Get link to the author archive page
  $user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));

  if ( ! empty( $display_name ) )

  $author_details = '<p class="author_name">About ' . $display_name . '</p>';

  if ( ! empty( $user_description ) )
  // Author avatar and bio

  $author_details .= '<p class="author_details">' . get_avatar( get_the_author_meta('user_email') , 90 ) . nl2br( $user_description ). '</p>';

  $author_details .= '<p class="author_links"><a href="'. $user_posts .'">View all posts by ' . $display_name . '</a>';
    
  // Check if author has a website in their profile
  if ( ! empty( $user_website ) ) {

  // Display author website link
  $author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">Website</a></p>';

  } else {
  // if there is no author website then just close the paragraph
  $author_details .= '</p>';
  }

  // Pass all this info to post content
  $content = $content . '<footer class="author_bio_section" >' . $author_details . '</footer>';
  }
  return $content;
  }

// Add our function to the post content filter
add_action( 'the_content', 'wpb_author_info_box' );

// Allow HTML in author bio section
remove_filter('pre_user_description', 'wp_filter_kses');
  //Custom Menus
  function custom_menus(){
    register_nav_menus(array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu'),
    ));
  }
  add_action('init', 'custom_menus');

  //Logo in the header
  add_theme_support( 'custom-header', array(
    'flex-width'      => true,
    'width'           => 260,
    'flex-height'     => true,
    'height'          => 100,
    'header-selector' => '.site-title a',
    'header-text'     => false
  ) );

  //Adds featured imgs to posts
    add_theme_support('post-thumbnails');


  ?>
