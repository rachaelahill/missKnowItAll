/*---------------------------------------- INFORMATION ------------------------------
Author:  Rachael Hill
Project: Miss Know It All - Advice Blog
Date: 01/28/2013
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
  	 return false;
	 });
	 
	 $('.answered').click(function(){
	   $('.unanswered a').removeClass('active');
  	 $('.answered a').addClass('active');
  	 return false;
	 });
*/
});                   
