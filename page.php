<?php get_header(); ?><!--this is the vode for adding the header section in our body or index.php-->
	<div id="body">
	  <ul>
	    <li id="javascript"> 
                <div id="pic">
			    <?php  
				   /* $args = array(
                   'post__in' => array(154,127,129)
                    );
						$lastposts = get_posts( $args );
							foreach ( $lastposts as $post ) { 
							if($post == 154 || 131 || 129 ){  */?>
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
									    <?php /* if ( has_post_thumbnail()){
	                                             the_post_thumbnail();
							              } */
									     ?>
									  <div class="carousel-caption">
										...
									  </div>
									</div>
									<div class="item">
									   <?php 
									        /* if ( has_post_thumbnail()){
	                                             the_post_thumbnail();
						                       	 } */
									 ?>
									  <div class="carousel-caption">
										...
									  </div>
									</div>
								    
									<div class="item">
									   <?php 
									        /* if ( has_post_thumbnail()){
	                                             the_post_thumbnail();
						                       	} } */
									 ?>
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
																
							<?php /*} */ ?>
			
                </div>			   
		</li><!-- this is the part where feature image display here -->
				
	    
	  </ul>
	</div>
<?php get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->