<?php get_header(); ?><!--this is the vode for adding the header section in our body or index.php-->
	<div id="body">
	  <ul>
	    <li id="javascript"> javascript
         
		</li><!-- this is the part where feature image display here -->
		
	    <li id="jquery">
             <center><div id="sub_pages"><!--this is the part where sub pages are going to show-->
			 <ul>
			    <li id="no1"> 
				<?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sub-menu widget') ): ?>
	            <?php endif; ?>
				</li>
				
				
				
				<?php
                $post = array( "page1" => 38 ,"page2" => 52, "page3" => 54) ;
			    foreach( $post as $key )
			    ?>
				
			    <li id="block1">
				    <?php $post1 = $post["page1"];
			         echo get_the_post_thumbnail($post1); // <!--this is the code for the importing the backgorund image-->
                          $dis = get_page($post1); ?>					
					<h4><?php echo  $dis->post_title; ?></h4>
					<p><?php echo  substr($dis -> post_content,0,130); ?></p>
		        </li>
				
			    <li id="block2"><?php $post1 = $post["page2"];
			         echo get_the_post_thumbnail($post1); // <!--this is the code for the importing the backgorund image-->				
					 $dis = get_page($post1); ?>	
					<h4><?php echo  $dis->post_title; ?></h4>
					<p><?php echo  substr($dis -> post_content,0,130); ?></p>
				</li>
				
			    <li id="block3"><?php $post1 = $post["page3"];
			         echo get_the_post_thumbnail($post1); // <!--this is the code for the importing the backgorund image-->				
					 $dis = get_page($post1);	?>				
				     <h4><?php echo  $dis->post_title; ?></h4>
					 <p><?php echo  substr($dis -> post_content,0,130); ?></p>
				</li>
				
			 </ul>
			 </div></center>
		</li><!-- this is the part where child page display here here -->
	  </ul>
	</div>
<?php get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->