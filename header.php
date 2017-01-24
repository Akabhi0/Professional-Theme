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
	    <ul  id="parent" class="nav nav-pills">
 			   <li>  navaigatin bar
                  <ul id="child">
		              <li><a> child 1 </a></li>
					  <li><a> child 2 </a>
					      <ul id="baby">
						    <li><a> baby 1 </a></li>
							<li><a> baby 2 </a></li>
							<li><a> baby 3 </a></li>
						  </ul>
					  </li>
					  <li><a> child 3 </a></li>
					  <li><a> child 4 </a></li>
				  </ul>
			   </li>
			   <li> About us </li>
			   <li> Contact Us</li>
               <li> Fast </li>
			   </ul>
	    </li>
	   
	   
	  </ul>
	</div>