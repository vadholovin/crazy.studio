jQuery(document).ready(function ($) {
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

// DROPNAV
(function() {
  const button = document.querySelector(".dropnav__hamburger");
  const dropnav = document.querySelector(".dropnav");
  const links = document.querySelectorAll(".dropnav__item");

  button.addEventListener('click', function() {
    dropnav.classList.toggle("is-hidden");
  });

  for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function() {
      dropnav.classList.add("is-hidden");
    });
  }

  window.onkeydown = function(e) {
    if (e.keyCode === 27) {
      if (!dropnav.classList.contains("is-hidden")) {
        dropnav.classList.add("is-hidden");
      }
    }
  }

  window.onclick = function(e) {
    if (!dropnav.classList.contains("is-hidden")) {
      if (e.target !== dropnav && e.target !== button) {
        dropnav.classList.add("is-hidden");
      }
    }
  }

  window.onresize = function() {
    if (window.innerWidth >= 768 && !dropnav.classList.contains("is-hidden")) {
      dropnav.classList.add("is-hidden");
    }
  }
})();