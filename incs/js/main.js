/*---------------------------------------- INFORMATION ------------------------------
Author:  Rachael Hill
Project: Miss Know It All - Advice Blog
Date: 01/30/2013
--------------------------------------------------------------------------------*/
$(document).ready(function() {
	 //Pagination plugin
	  $('.post-itm').flexipage();
	  
	 //Truncating plugin sets limit to text
	 $('.trunc').truncatable({
	   limit: 200,
	   hideText: '[hide]',
	 });
	 
	 /*
$('.unanswered').click(function(){
	   $('.answered a').removeClass('active');
  	 $('.unanswered a').addClass('active'); 
  	 $.post('admin/unanswered_posts', function(data){
  	   $('.post-wrapper').html(data);
  	   console.log(data);
  	 });
  	 return false;
   });
	 
	 $('.answered').click(function(){
	   $('.unanswered a').removeClass('active');
  	 $('.answered a').addClass('active');
  	 $.post('admin/answered_posts', function(data){
  	   $('.post-wrapper').html(data);
  	 });
  	 return false;
	 });
*/
	 
});     


              
