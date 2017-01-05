//add in the drop down menu in wordpress theme
jQuery(document).ready(function(){
  jQuery(".menu > li").hover(function(){
    jQuery(this).find(".sub-menu").stop().slideToggle(200);
 });
});


