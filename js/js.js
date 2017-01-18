//add in the drop down menu in wordpress theme
jQuery(document).ready(function(){
  jQuery(".menu > li").hover(function(){
    jQuery(this).find(".sub-menu").stop().slideToggle(200);
 });
});


//this is the code for pages part 

jQuery(document).ready(function(){
	jQuery("#menu-item-79").hover(function(){
			jQuery("#block1").css({
				'background':'red'
			});
		});
	jQuery("#menu-item-79").mouseout(function(){
		jQuery("#block1").css({
	      'background':'#fff'		
		});
	 });
});

