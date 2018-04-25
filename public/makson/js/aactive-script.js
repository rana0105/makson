

$(document).ready(function(){

	// person animation
		TweenMax.set('.new-person-right-area-before', {x: 675});
		// backto postion
		var backPositionPersonBg = TweenMax.to('.new-person-right-area-before', .85, {x: 0, ease:Linear.easeNone, delay: .5});
		// register on ScrollMagic.Controller
		var controller = new ScrollMagic.Controller();
		// slide affcet
		var backToPositionPersonBg = new ScrollMagic.Scene({
			triggerElement: '.new-person-left-area',
			triggerHook: 1,
			offset: 400
		})
		.setTween(backPositionPersonBg)

		.addTo(controller)
		;

	// personTextFade animation
		$('.new-person-left-area h2').each(function(){
			var personText = new ScrollMagic.Scene({
				triggerElement: this,
				triggerHook: 0.80
			}) 
			.setClassToggle(this, 'fadeInUp')

			.addTo(controller);
		});
		$('.new-person-left-area h3').each(function(){
			var personText = new ScrollMagic.Scene({
				triggerElement: this,
				triggerHook: 0.80,
				offset: -20
			}) 
			.setClassToggle(this, 'fadeInUp')

			.addTo(controller);
		});
		$('.new-person-left-area p').each(function(){
			var personText = new ScrollMagic.Scene({
				triggerElement: this,
				triggerHook: 0.80,
				offset: -50
			}) 
			.setClassToggle(this, 'fadeInLeft')

			.addTo(controller);
		});
		$('.concat-right-area').each(function(){
			var personText = new ScrollMagic.Scene({
				triggerElement: this,
				triggerHook: 0.40
			}) 
			.setClassToggle(this, 'border-box')
	
			.addTo(controller);
		});
















					
// $(function(){
//   let $hoge = $('#hoge');
//   $hoge.ripples({
//     resolution: 1000,
//     dropRadius: 8,
//     perturbance: 10
//   });
// });

	
	
	
	$('.new-concerns-slider').owlCarousel({
	    loop:true,
	    margin:0,
		responsiveClass:true,
		dots:true,
		 autoplayTimeout:4000,
			animateOut: 'fadeOut',
	  	nav:false,
	  	navText : ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		responsive:{
	        0:{
	            items:1,
	            dots:true,
	        },
	        768:{
	            items:2,
	            dots:true,
	        },
			992:{
	            items:3,
	            dots:true,
	        },
			1000:{
	            items:4
	        }
	    }
	})

	
	$('.authority-right-slider').owlCarousel({
	    loop:true,
	    margin:0,
		responsiveClass:true,
		dots:false,
		animateOut: 'zoomOut',
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
		animateOut: 'fadeOutUp',
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
			responsiveClass:true,
			dots:true,
			autoplay:true,
		    autoplayTimeout:8000,
			animateOut: 'fadeOut',
			autoplayHoverPause: false,
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
		
		
		
		
		$('.authority-left-area').owlCarousel({
		    loop:true,
		    margin:20,
			responsiveClass:true,
			dots:false,
			autoplay:true,
		    autoplayTimeout:6000,
			animateOut: 'fadeOut',
			autoplayHoverPause: false,
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
 









});



// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {        // If page is scrolled more than 50px
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



var x = 0,
    container = $('.porund'),
    items = container.find('li'),
    containerHeight = 0,
    numberVisible = 8,
    intervalSec = 4000;

if(!container.find('li:first').hasClass("first")){
  container.find('li:first').addClass("first");
}


items.each(function(){
  if(x < numberVisible){
    containerHeight = containerHeight + $(this).outerHeight();
    x++;
  }
});

container.css({ height: containerHeight, overflow: "hidden" });
  
function vertCycle() {
  var firstItem = container.find('li.first').html();
    
  container.append('<li>'+firstItem+'</li>');
  firstItem = '';
  container.find('li.first').animate({ marginTop: "-170px" }, 1000,
  	function(){
  		$(this).remove(); container.find('li:first').addClass("first");
  	});
}

if(intervalSec < 700){
  intervalSec = 700;
}

var init = setInterval("vertCycle()",intervalSec);

container.hover(function(){
  clearInterval(init);
}, function(){
  init = setInterval("vertCycle()",intervalSec);
});







$(window).on('load', function() { // makes sure the whole site is loaded 
$('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(35).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(35).css({'overflow':'visible'});
})
const slinky = $('.responsive-menu-slinky').slinky();




