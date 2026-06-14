// NAVIGATION CALLBACK
jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:     500,
		animation: {opacity:'show',height:'show'},  
		speed:     'fast'
   	});
});

jQuery(function($){
	$( '.toggle-menu button' ).click( function(e){
        $( 'body' ).toggleClass( 'show-main-menu' );
        var element = $( '.side-nav' );
        business_card_resume_trapFocus( element );
    });

    $( '.closebtn' ).click( function(e){
        $( '.toggle-menu button' ).click();
        $( '.toggle-menu button' ).focus();
    });
    $( document ).on( 'keyup',function(evt) {
        if ( $( 'body' ).hasClass( 'show-main-menu' ) && evt.keyCode == 27 ) {
            $( '.toggle-menu button' ).click();
            $( '.toggle-menu button' ).focus();
        }
    });
    
	$(window).scroll(function(){
	    if ($(window).scrollTop() >= 100) {
	        $('.toggle-menu').addClass('sticky');
	    }
	    else {
	        $('.toggle-menu').removeClass('sticky');
	    }
	});

	$(window).scroll(function(){
		var sticky = $('.sticky-header'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-header');
		else sticky.removeClass('fixed-header');
	});

	setTimeout(function(){
		$(".tg-loader").delay(2000).fadeOut("slow");
	    $("#overlayer").delay(2000).fadeOut("slow");
	});

	setTimeout(function(){
		$(".preloader").delay(2000).fadeOut("slow");
	    $(".preloader .preloader-container").delay(2000).fadeOut("slow");
	});

	// back to top.
	$( window ).scroll( function() {
		if ( $( this ).scrollTop() > 200 ) {
			$( '.back-to-top' ).addClass( 'show-back-to-top' );
		} else {
			$( '.back-to-top' ).removeClass( 'show-back-to-top' );
		}
	});

	$( '.back-to-top' ).click( function() {
		$( 'html, body' ).animate( { scrollTop : 0 }, 200 );
		return false;
	});
});

function business_card_resume_trapFocus( element, namespace ) {
    var business_card_resume_focusableEls = element.find( 'a, button' );
    var business_card_resume_firstFocusableEl = business_card_resume_focusableEls[0];
    var business_card_resume_lastFocusableEl = business_card_resume_focusableEls[business_card_resume_focusableEls.length - 1];
    var KEYCODE_TAB = 9;

    business_card_resume_firstFocusableEl.focus();

    element.keydown( function(e) {
        var isTabPressed = ( e.key === 'Tab' || e.keyCode === KEYCODE_TAB );

        if ( !isTabPressed ) { 
            return;
        }

        if ( e.shiftKey ) /* shift + tab */ {
            if ( document.activeElement === business_card_resume_firstFocusableEl ) {
                business_card_resume_lastFocusableEl.focus();
                e.preventDefault();
            }
        } else /* tab */ {
            if ( document.activeElement === business_card_resume_lastFocusableEl ) {
                business_card_resume_firstFocusableEl.focus();
                e.preventDefault();
            }
        }

    });
}

(function( $ ) {
	jQuery(document).ready(function() {
		var owl = jQuery('#service-section .owl-carousel');
			owl.owlCarousel({
				nav: true,
				autoplay:true,
				autoplayTimeout:2000,
				autoplayHoverPause:true,
				loop: true,
				navText : ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
				responsive: {
				  0: {
				    items: 1
				  },
				  600: {
				    items: 2
				  },
				  1000: {
				    items: 3
				}
			}
		})
	})
})( jQuery );

	/*sticky copyright*/
	jQuery(window).on('scroll', function() {
	var $sticky = jQuery('.copyright-sticky');
	if ($sticky.length === 0) return;

	var scrollTop = jQuery(window).scrollTop();
	var windowHeight = jQuery(window).height();
	var documentHeight = jQuery(document).height();

	var isBottom = scrollTop + windowHeight >= documentHeight - 100;

	if (scrollTop >= 100 && !isBottom) {
		$sticky.addClass('copyright-fixed');
	} else {
		$sticky.removeClass('copyright-fixed');
	}
	});

jQuery(document).ready(function () {
	jQuery( ".tablinks" ).first().addClass( "active" );
});

function business_card_resume_project_tab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  jQuery('#'+ cityName).show()
  evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
	jQuery('.tabcontent').hide();
	jQuery('.tabcontent:first').show();
});
