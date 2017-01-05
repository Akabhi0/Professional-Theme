<?php //adding javascript and jquery files into wordpress theam
    function javascript_file(){	
    wp_enqueue_script( 'script', get_stylesheet_directory_uri()  . '/js/js.js', array('jquery'));
	}
  //appling action on this function
    add_action('init','javascript_file');
	
	
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
  // after this we have to call the menu in header.php
  
  
  
  
?>