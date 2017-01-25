<html>
 <head>
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
	<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" >
	<link href="<?php bloginfo('template_url'); ?>/bootstrap.css" rel="stylesheet">
	<?php wp_head(); ?>
 </head>
 </body>
    <div id="header">
	<ul id="main">
	  <li id="logo"> 
        <!--thih is the code part where we write the costimze code for logo-->
	          <img id="logo_pic" src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        echo $image[0]; ?>" />
	  </li>
	  

	  <!--this is the frame work of two level drop down -->
	  <li id="menu_level">
	     <?php wp_nav_menu(array("location"=>"primary")); ?>
	  </li>
	   
	   
	  </ul>
	</div>