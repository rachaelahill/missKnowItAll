/*---------------------------------------- INFORMATION ------------------------------
Author:  Rachael Hill
Project: Miss Know It All - Advice Blog
Date: 01/24/2013
--------------------------------------------------------------------------------*/
$(document).ready(function() {
	 //Pagination plugin
	  $('.post-itm').flexipage();
	  
	 //Truncating plugin sets limit to text
	 $('.trunc').truncatable({
	   limit: 200,
	   hideText: '[hide]',
	 });
	 
	 $('.unanswered').click(function(){
	 $('.answered a').removeClass('selected');
  	 $('.unanswered a').addClass('selected');
  	 
  	 return false;
	 });
	 
	 $('.answered').click(function(){
	 $('.unanswered a').removeClass('selected');
  	 $('.answered a').addClass('selected');
  	 
  	 return false;
	 });
});                   
