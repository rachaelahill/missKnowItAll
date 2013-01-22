$(document).ready(function(){
var win = $(window);
	var doc = $(document);
	var btt = $('#btt');
		
	win.on('scroll', function(){

    var diff = win.scrollTop() - (doc.height() - win.height());

		if(diff >= -100){
			$.ajax({
				type:	'get',
				dataType: 'html',
				url:	"http://localhost/MKIA/index.php/client/",
				success: function(posts){
					console.log("works");
				}
			})
		}
	});
});	
