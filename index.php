<?php get_header(); ?><!--this is the vode for adding the header section in our body or index.php-->
	<div id="body">
	  <ul>
	    <li id="javascript"> 
                <div id="pic">
			    <?php 
				    $args = array(
                   'post__in' => array(131)
                    );
						$lastposts = get_posts( $args );
						if ( $lastposts ) {
							foreach ( $lastposts as $post ) { ?>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									  <!-- Indicators -->
									  <ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1"></li>
										<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									  </ol>

									  <!-- Wrapper for slides -->
									  <div class="carousel-inner" role="listbox">
										<div class="item active">
										  <?php  if ( has_post_thumbnail()){
										                       the_post_thumbnail(); } ?>
										  <div class="carousel-caption">
										   <h3><?php the_title();//this is the code to show thw title of post ?></h3>
				                           <?php echo substr(get_the_excerpt(),0,200); ?> 
										  </div>
										</div>
										<div class="item">
										  <img src="..." alt="...">
										  <div class="carousel-caption">
											...
										  </div>
										</div>
										...
									  </div>

									  <!-- Controls -->
									  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									  </a>
									  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									  </a>
									</div>    
						<?php }  }?>
			
                </div>			   
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
					 $dis = get_page($post1);?>				
				     <h4><?php echo  $dis->post_title; ?></h4>
					 <p><?php echo  substr($dis -> post_content,0,130);  ?></p>
				</li>
				
			 </ul>
			 </div></center>
		</li><!-- this is the part where child page display here here -->
	  </ul>
	</div>
<?php get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->