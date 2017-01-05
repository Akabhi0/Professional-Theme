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
	  
 	  <li id="menu"><!--this is the code for drop down menu--> 
	    <ul  id="parent" class="nav nav-pills">
			   <li> Home 
				 <ul class ="child">
				   <li><a href="#"> Nike </a></li>
				   <li><a href="#"> Addidas </a></li>
				   <li><a href="#"> New Balance </a></li>
				   <li><a href="#"> Reebok </a></li>
				 </ul>
			   </li>
			   <li> About Us
			 
				  <ul class ="child">
				   <li><a href="#"> Nike </a></li>
				   <li><a href="#"> Addidas </a></li>
				   <li><a href="#"> New Balance </a></li>
				   <li><a href="#"> Reebok </a></li>
				 </ul>

			   </li>

			   <li> Contact Us 

				 <ul class ="child">
				   <li><a href="#"> Nike </a></li>
				   <li><a href="#"> Addidas </a></li>
				   <li><a href="#"> New Balance </a></li>
				   <li><a href="#"> Reebok </a></li>
				 </ul>

			   </li>
			   <li> Blog 
				  <ul class ="child">
				   <li><a href="#"> Nike </a></li>
				   <li><a href="#"> Addidas </a></li>
				   <li><a href="#"> New Balance </a></li>
				   <li><a href="#"> Reebok </a></li>
				 </ul>
			   </li>
			   <li> Product </li>
			 </ul><!--code of drop dowm n=menu is ennde here -->
 	  </li>
	  </ul>
	</div>