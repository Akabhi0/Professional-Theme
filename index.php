<?php get_header(); ?><!--this is the vode for adding the header section in our body or index.php-->
	<div id="body">
	   <ul>
	     <li id="javascript"></li>
		 <li id="page"></li>
	     <li id="widget">
		    <ul id="widget_part">
			
                  <li>  
				  <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('news widget') ): ?>
	              <?php endif; ?>
			      </li>
				  
				  <li>
                  <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('work widget') ): ?>
	              <?php endif; ?>				  
			      </li>
				  
				  <li>
				  <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('stay widget') ): ?>
	              <?php endif; ?>	
			      </li>
				  
				  <li>
	              <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('page widget') ): ?>
	              <?php endif; ?>
			      </li>
				  
			</ul>
		 </li>
	</div>
<?php get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->