/*---------------------------------------- INFORMATION ------------------------------
Author:  Rachael Hill
Project: Miss Know It All - Advice Blog
Date: 01/01/2013
--------------------------------------------------------------------------------*/
$(document).ready(function() {
	 //Pagination plugin
	  $('.post-itm').flexipage();
	  
	 //Truncating plugin sets limit to text
	 $('.trunc').truncatable({
	   limit: 200,
	   hideText: '[hide]',
	 });
	 
	 $('.edit-resp').click(function(){
  	 $('.response-content').css('display', 'none');
  	 $('.edit-resp-content').css('display', 'block');
	 });
	 
	 $('.cancel-edit').click(function(){
  	 $('.response-content').css('display', 'block');
  	 $('.edit-resp-content').css('display', 'none');
	 });
	 
	 $('form').ketchup();
});     


              
