/*-------------------------------------------------------------------------

	Theme Name: Surreal Studio
	
-------------------------------------------------------------------------*/

$(document).ready(function () {
	/*vars used throughout*/
	var wh,
		scrollSpeed = 1000,
		parallaxSpeedFactor = 0.6,
		scrollEase = 'easeOutExpo',
		targetSection,
		sectionLink = 'a.navigateTo',
	 	section = $('.section');


//INIT --------------------------------------------------------------------------------/
	if (isMobile == true) {
		$('.header').addClass('mobileHeader');	//add mobile header class
		$('body').addClass('touch-device');
	} else {
		$('.page').addClass('desktop');
		$('.parallax').addClass('fixed-desktop');
	}


//MENU --------------------------------------------------------------------------------/
	$(".menu a, .dropnav__item").click(function () {
    $("html, body").animate({
      scrollTop: $($(this).attr("href")).offset().top + "px"
    }, {
      duration: 1000,
      easing: "swing"
    });
    return false;
  });


//PARALLAX ----------------------------------------------------------------------------/
	$(window).bind('load', function () {
		parallaxInit();						  
	});

	function parallaxInit() {
		if (isMobile == true) return false;
		$('#parallax-1').parallax();
		$('#parallax-2').parallax();
		$('#parallax-3').parallax();
		/*add as necessary*/
	}


//HOMEPAGE SPECIFIC -----------------------------------------------------------------/
	function sliderHeight() {
		wh = $(window).height();
		$('#homepage').css({height: wh});
	}
	sliderHeight();


//WINDOW EVENTS ---------------------------------------------------------------------/	
	 
	$(window).bind('resize',function () {

		//Update slider height
		sliderHeight();

	});

});
