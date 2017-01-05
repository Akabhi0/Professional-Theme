

<div id="footer">
   <ul>
    <li>
	 <!--this is the code for costimzable footer logo-->
	    <img id="logo_pic" src="<?php $custom_logo_id = 41;/*41 is the id of the logo */
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        echo $image[0]; ?>" />
	</li>
	<!-- this is for the footer menu-->
    <li id="menu_footer"><?php wp_nav_menu(array("location"=>"footer")); ?></li>
	
	<!-- this code is for link of company-->
	<li id="link">
	<a href="<?php echo esc_url( __( '#', '&copy; 2016 Ak_Abhi.  All right reserver' ) ); ?>">
	<?php printf( __( '&copy; 2016 Ak_Abhi.  All right reserver.Designed by %s', 'Rt Camp' ),'Ak_Abhi' ); ?></a>
	</li>
   </ul>

<?php wp_footer(); ?>
</div>
 </body>
 </html>