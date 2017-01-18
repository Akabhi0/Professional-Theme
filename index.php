<?php get_header(); ?><!--this is the vode for adding the header section in our body or index.php-->
	<div id="body">
	  <ul>
	    <li id="javascript"> 
                <div id="pic">
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
									  <div class="carousel-caption">
										...
									  </div>
									</div>
									<div class="item">
									  <div class="carousel-caption">
										...
									  </div>
									</div>
								    
									<div class="item">
									  <div class="carousel-caption">
										...
									  </div>
									</div>
									
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
                $post = array( 38 ,52, 54) ;
			    foreach( $post as $key ){
				if($key == 38 || $key == 52 || $key == 54){
			    ?>
				
			    <li id="block1">
				    <?php
			         echo get_the_post_thumbnail($key); // <!--this is the code for the importing the backgorund image-->
                          $dis = get_page($key); ?>					
					<h4><?php echo  $dis->post_title; ?></h4>
				<?php echo  substr($dis -> post_content,0,130); } } ?>
		        </li>
				
			    
			 </ul>
			 </div></center>
		</li><!-- this is the part where child page display here here -->
	  </ul>
	</div>
<?php get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->