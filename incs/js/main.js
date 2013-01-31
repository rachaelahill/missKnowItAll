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
	 
});     


              
