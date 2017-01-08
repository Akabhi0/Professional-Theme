<?php get_header(); ?><!--this is the vode for adding the header section in our body or index.php-->
	<div id="body">
	   <ul>
	     <li id="javascript"></li>
		 <li id="page"></li>
	     <li id="widget">
		    <ul id="widget_part">
			
                  <li>  
				  <th><p><b>RECENT NEWS</b></p></th> 
				  <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('news widget') ): ?>
	              <?php endif; ?>
			      </li>
				  
				  <li>
                  <?php  if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('work widget') ): ?>
	              <?php endif; ?>				  
			      </li>
				  
				  <li>
	              <th><p><b>STAY IN TOUCH</b></p></th>  
			      </li>
				  
				  <li>
	              <th><p><b>SECURITY AND PRIVACY</b></p></th>  
			      </li>
				  
			</ul>
		 </li>
	</div>
<?php get_footer(); ?><!--this is the vode for adding the footer section in our body or index.php-->