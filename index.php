<?php get_header(); ?><!--this is the vode for adding the header section in our body or index.php-->
	<div id="body">
	  <ul>
	    <li id="javascript"> 
                <div id="pic">
				<?php 
	            $htitle = get_theme_mod( 'mwsmall_home_title' );
	            $home_text = get_theme_mod( 'mwsmall_home_text' );
	            if ( !empty( $htitle ) || !empty( $home_text ) ) {
                ?>
				<section class="home_text text-center col-lg-12 col-md-12 col-sm-12">
					<?php if ( !empty( $htitle ) ) { ?>
					<h2><?php echo $htitle; ?></h2>
					<?php } ?>
					<?php if ( !empty( $home_text ) ) { ?>
					<p><?php echo $home_text; ?></p>
					<?php } ?>
				</section><?php } ?>
				
				<section id="primary" class="container content-area col-lg-9 col-md-9 col-sm-8">
	            <div id="content" class="site-content" role="main">
		        <?php 
			        $hide_slider = get_theme_mod( 'hide_slider_post' );
			        if ( ( $hide_slider == '' && is_front_page() ) || ( $hide_slider == '' && is_home() ) ) {
				    get_template_part( 'inc/slider-post' );
			        }
		        ?>
		
		        <?php if ( have_posts() ) : ?>
			    <?php /* Start the Loop */ ?>
			    <?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part( 'content', get_post_format() ); ?>
				
			    <?php endwhile; ?>
			
			    <?php mwsmall_pagination_nav(); ?>
			
		        <?php else : ?>

			    <?php get_template_part( 'content', 'none' ); ?>

		        <?php endif; ?>

	            </div><!-- #content -->

                </section><!-- #primary -->
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