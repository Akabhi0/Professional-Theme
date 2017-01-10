<?php get_header(); ?><!--this is the vode for adding the header section in our body or index.php-->
	<div id="body">
	  <ul>
	    <li id="javascript"> javascript </li><!-- this is the part where feature image display here -->
	    <li id="jquery">
             <center><div id="sub_pages"><!--this is the part where sub pages are going to show-->
			 <ul>
			    <li id="no1"> 
				<?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sub-menu widget') ): ?>
	            <?php endif; ?>
				</li>
			    <li> block2 </li>
			    <li> block3 </li>
			    <li> block4 </li>
			 </ul>
			 </div></center>
		</li><!-- this is the part where child page display here here -->
	  </ul>
	</div>
<?php get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->