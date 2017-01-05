//add in the drop down menu in wordpress theme
jQuery(document).ready(function(){
  jQuery("ul#parent > li").hover(function(){
    jQuery(this).find("ul.child").stop().slideToggle(200);
 });
});


