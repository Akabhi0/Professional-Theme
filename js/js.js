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

jQuery(document).ready(function(){
	jQuery("#menu-item-77").hover(function(){
			jQuery("#block2").css({
				'background':'red'
			});
		});
	jQuery("#menu-item-77").mouseout(function(){
		jQuery("#block2").css({
	      'background':'#fff'		
		});
	 });
});


jQuery(document).ready(function(){
	jQuery("#menu-item-78").hover(function(){
			jQuery("#block3").css({
				'background':'red'
			});
		});
	jQuery("#menu-item-78").mouseout(function(){
		jQuery("#block3").css({
	      'background':'#fff'		
		});
	 });
});
