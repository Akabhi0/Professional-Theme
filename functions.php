<?php //adding javascript and jquery files into wordpress theam
    function javascript_file(){	
    wp_enqueue_script( 'script', get_stylesheet_directory_uri()  . '/js/js.js', array('jquery'));
	}
  //appling action on this function
    add_action('init','javascript_file');
	
	//adding thumbmail for images
    add_theme_support( 'post-thumbnails' );	
	
   //we are going to make theam logo costom
  function theme_prefix_setup() {

	 add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 300,
		'flex-width' => true,
	 ) );
    }
    add_action( 'after_setup_theme', 'theme_prefix_setup' );
  //this action is used to call the logo

  function rt_menu(){
 //write menu code //function used regiter_nav_menu('position','string');
	   register_nav_menu('primary','Top navigation');
  }
  // applied action on this function 
  
  add_action('init','rt_menu');
  // after this we have to call the menu in header.php

  function rt_menu_footer(){
	  //write menu code //function used regiter_nav_menu('position','string');
	   register_nav_menu('footer','footer navigation');
  }
  // applied action on this function 
  
  add_action('init','rt_menu_footer');
  // after this we have to call the menu in footer.php
  
  //this is the methos to call the widget in the body.php
  
  function Akabhi_widgets_init() {
	//this is the widget part for the news widget
	
 	register_sidebar( array(
		'name'          => 'news widget', // this is the widget is used for //security and privacy
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<a href=" " class="widget-title">'.wpb_postsbycategory().'.',
		'after_title'   => '</a>',
	) );
	
	register_sidebar( array(
		'name'          => 'work widget', //this is the logo and partner widget 
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<a href=" " class="widget-title">',
		'after_title'   => '</a>',
	) );
	
	register_sidebar( array(
		'name' => 'stay widget',//this is used for stay in touch
		'before_widget' => '<div id="stay">',
		'after_widget'  => '</div>',
		'before_title'  => '<a href="" class="widget-title">',
		'after_title'   => '</a>',
	) );
	
	register_sidebar( array(
		'name'          => 'page widget', //this is the security and privacy widget 
		'before_widget' => '<div id="page">',
		'after_widget'  => '</div>',
		'before_title'  => '<a class="widget-title" href="">',
		'after_title'   => '</a>',
	) );
	
	register_sidebar( array(
		'name'          => 'sub-menu widget', //this is the sub-menu widget 
		'before_widget' => '<div id="sub">',
		'after_widget'  => '</div>',
		'before_title'  => '<a class="widget-title" href="">',
		'after_title'   => '</a>',
	) );
	
    }
	
	//this is the action to calling the widget on the wordpress theam
   add_action( 'widgets_init', 'Akabhi_widgets_init' );
   
   
   //adding the post categorie in news widget part 
   function wpb_postsbycategory() {
			// the query
			$the_query = new WP_Query( array( 'category_name' => 'news', 'posts_per_page' => 3) ); 

			// The Loop
			if ( $the_query->have_posts() ) {
				$string .= '<div id="one_one1"><ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
						// if no featured image is found
						$string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . substr(get_the_excerpt(),0,70) .'</a></li>';
						}
				} else {
				// no posts found
			}
			$string .= '</ul></div>';

			return $string;

			/* Restore original Post Data */
			wp_reset_postdata();
			}
			// Add a shortcode
			add_shortcode('categoryposts', 'wpb_postsbycategory');

			// Enable shortcodes in text widgets
			add_filter('widget_text', 'do_shortcode');

			//this is for calresole 
			
			function mwsmall_pagination_nav(){
	        global $wp_query, $post;
	
	if ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>
	<nav class="navigation paging-navigation" role="navigation">
		<?php if ( get_next_posts_link() ) : ?>
		<div class="nav-previous"><?php next_posts_link( __( 'Older posts', 'mw-small' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts', 'mw-small' ) ); ?></div>
		<?php endif; ?>
	<?php endif; ?>

	</nav>
	<?php
    }

?>