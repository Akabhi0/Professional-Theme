<?php get_header(); ?><!--this is the vode for adding the header section in our body or index.php-->
	<div id="body">
	  <ul>
	    <li id="javascript"> 
		
            <div id="pic">
				<?php query_posts('showposts=4&post_type=post'); ?>
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				  </ol>
				  <div class="carousel-inner" role="listbox">
                <?php if(have_posts() == 178 || 176 || 173 || 180 ) : while (have_posts()) : the_post(); $i++;  ?>
				<?php if($i == 1) { ?>
				  <!-- Wrapper for slides -->
					<div class="item active">
				<?php } else { ?>
				    <div class="item ">
				<?php } ?>
				    <?php if ( has_post_thumbnail() ) {
	                          $url = wp_get_attachment_url(get_post_thumbnail_id()); ?>
					  <img src="<?php echo $url; ?>" alt="<?php the_title; ?>">
					<?php } ?>
					  <div class="carousel-caption">
					<h2><?php the_title(); ?></h2>
					<p><?php echo substr(get_the_excerpt(),0,250); ?></p>
					  </div>
					</div>
				    <?php endwhile; endif;  ?>	
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
				<?php wp_reset_query(); ?> 
	        </div><!-- #content -->	
        
		</li><!-- this is the part where feature image display here -->
				
	    <li id="jquery">
             <center><div id="sub_pages"><!--this is the part where sub pages are going to show-->
			 <ul>
			    <li id="no1">
				<?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sub-menu widget') ): ?>
	            <?php endif; ?>
				</li>
				
				
				<!--this is the part of child page-->
				<?php
                $post = array( 38 ,52, 54) ;
			    foreach( $post as $key ){
				if($key == 38 || $key == 52 || $key == 54){
			    ?>
				<!-- featuring page image title and dec -->
			    <li id="block1">
				    <?php
			         echo get_the_post_thumbnail($key); // <!--this is the code for the importing the backgorund image-->
                          $dis = get_page($key); ?>					
					<h4><?php  echo  $dis->post_title; ?></h4>
				        <?php echo  substr($dis -> post_content,0,100); } }  ?>
		        </li>
				
			 </ul>
			 </div></center>
		</li><!-- this is the part where child page display here here -->
	  </ul>
	</div>
<?php get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->