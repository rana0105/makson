$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(35).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(35).css({'overflow':'visible'});
})
$(document).ready(function(){
	$('#circle').circleProgress({
		value: 0.26,
		size: 200,
		fill: {
		  gradient: ["#e34f26"]
		}
	  });
	$('#circle1').circleProgress({
	  value: 0.14,
	  size: 200,
	  fill: {
	    gradient: ["#0d84ce"]
	  }
	});
	$('#circle2').circleProgress({
		value: 0.60,
		size: 200,
		fill: {
		  gradient: ["#f0e040"]
		}
	  });
	  $('#circle3').circleProgress({
		value: 100,
		size: 200,
		fill: {
		  gradient: ["#83cd29"]
		}
	  });
	  $('#circle4').circleProgress({
		value: 0.26,
		size: 200,
		fill: {
		  gradient: ["#e34f26"]
		}
	  });
	$('#circle5').circleProgress({
	  value: 0.13,
	  size: 200,
	  fill: {
	    gradient: ["#0d84ce"]
	  }
	});
	$('#circle6').circleProgress({
		value: 0.60,
		size: 200,
		fill: {
		  gradient: ["#f0e040"]
		}
	  });
	  $('#circle7').circleProgress({
		value: 1,
		size: 200,
		fill: {
		  gradient: ["#83cd29"]
		}
	  });
	$('.concerns-slider-area').owlCarousel({
	    loop:true,
	    margin:30,
		responsiveClass:true,
		dots:false,
	  	nav:true,
	  	navText : ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    },
	    autoplay:true,
	    autoplayTimeout:5000
	})
	$('.authority-right-slider').owlCarousel({
	    loop:true,
	    margin:0,
		responsiveClass:true,
		dots:false,
		animateOut: 'fadeOut',
	  	nav:true,
	  	navText : ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	})
	$('.clientele-slider').owlCarousel({
	    loop:true,
	    margin:0,
		responsiveClass:true,
		dots:true,
	  	nav:false,
	  	navText : ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	})
	$('.homepage-banner-slider-area').owlCarousel({
		    loop:true,
		    margin:0,
		    autoplay:true,
		   	autoplayTimeout:5000,
			responsiveClass:true,
			dots:true,
			lazyLoad:true,
			animateOut: 'lightSpeedOut',
		  	nav:false,
		  	navText : ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
			responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		})
	$('.home-page-video').parent().click(function () {
	    if($(this).children(".home-page-video").get(0).paused){
	        $(this).children(".home-page-video").get(0).play();
	        $(this).children(".video-icon-text-area").fadeOut();
	    }else{
	       $(this).children(".home-page-video").get(0).pause();
	        $(this).children(".video-icon-text-area").fadeIn();
	    }
	});


$('.con-slider').owlCarousel({
    stagePadding: 290,
    loop:true,
    margin:35,
    nav:false,
    responsive:{
        0:{
            items:1,
			stagePadding: 50
        },
        500:{
			items:1,
			stagePadding: 50
        },
        1000:{
            items:1
        }
    }
})








});

// ===== Ticker ==== 
var width = $('.ticker-text').width(),
    containerwidth = $('.ticker-container').width(),
    left = containerwidth;
$(document).ready(function(e){
	function tick() {
        if(--left < -width){
            left = containerwidth;
        }
        $(".ticker-text").css("margin-left", left + "px");
        setTimeout(tick, 10);
      }
      tick();
});

// ===== TimelIne Slider ==== 
var titleMain  = $("#animatedHeading");
var titleSubs  = titleMain.find("slick-active");

if (titleMain.length) {

  titleMain.slick({
    autoplay: false,
    arrows: false,
    dots: false,
    slidesToShow: 7,
    centerPadding: "10px",
    draggable: false,
    infinite: true,
    pauseOnHover: false,
    swipe: false,
    touchMove: false,
    vertical: true,
    autoplaySpeed: 5000,
    useTransform: true,
    cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',

  });

  // On init
  $(".slick-dupe").each(function(index, el) {
    $("#animatedHeading").slick('slickAdd', "<div>" + el.innerHTML + "</div>");
  });

  // Manually refresh positioning of slick
  titleMain.slick('slickPlay');
};


// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

// const slinky = $('.responsive-menu-slinky').slinky();