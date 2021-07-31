$(function () {
	$(window).scroll(function() {
	    $('#expectation').each(function(){
	        var imagePos = $(this).offset().top;

	        var topOfWindow = $(window).scrollTop();
	        if (imagePos < topOfWindow+650) {
	            $(this).addClass("flip");
	        }
	    });
	});
	$(window).scroll(function() {
	    $('#ticket').each(function(){
	        var imagePos = $(this).offset().top;

	        var topOfWindow = $(window).scrollTop();
	        if (imagePos < topOfWindow+650) {
	            $(this).addClass("rollIn");
				console.log("roll in!")
	        }
	    });
	});
})