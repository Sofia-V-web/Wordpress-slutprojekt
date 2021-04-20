(function($){

	// Menu icon

	$('.menu-icon').click(function(){
		$(this).toggleClass('fa-bars fa-close');
		$('#nav').slideToggle();
	});

	// Search icon

	$('.fa-search').click(function(){
		$('.mobile-search').slideToggle();
	});


	//slider
	$(window).on('load', function() {
		$('.flexslider').flexslider({
		  animation: "slide",
		  animationLoop: false,
		  itemWidth: 1200,
		  itemMargin: 2
		});
	  });


})(jQuery);