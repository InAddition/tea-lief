$(function() {



///////// Variables

var 
	html = $('html'),
	win = $( window ),
	hamburger = $('.hamburger'),
	closeReferer = $('.close-referer');

///////// Retina Class

if (window.matchMedia) { 
	var mq = window.matchMedia("only screen and (-moz-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen  and (min-device-pixel-ratio: 1.3), only screen and (min-resolution: 1.3dppx)");
	if(mq && mq.matches) {
		document.documentElement.className += ' retina';
	}
}

///////// Loaded Class

win.on( 'load', function() {
	html.addClass( 'loaded' );
});

///////// Hamburger

hamburger.click(function(e){
	e.preventDefault();
	html.toggleClass('js-nav-open');
});

///////// Close Referer

closeReferer.click(function(e){
	e.preventDefault();
	html.addClass('js-referer-closed');
});

//////// Flickity

var flickityGallery = $( '.js-slider' );

flickityGallery.flickity({
	cellAlign: 'left',
	contain: true,
	autoPlay: 4500,
	pageDots: true,
	prevNextButtons: true,
	imagesLoaded: true
});

//////// Sticky Footer

function stickyFooter() {
	var footerHeight = $("footer").height();
	$(".site-wrapper").css("padding-bottom", footerHeight);
	$("footer").css("margin-top", -footerHeight);
}
win.on( 'load resize', stickyFooter );

//////// Venobox

$('.venobox').venobox(); 

/*===============================================
IE 10
===============================================*/

if (navigator.userAgent.match('MSIE 10.0;')) {
  $('html').addClass('ie10');
}

if (Object.hasOwnProperty.call(window, "ActiveXObject") && !window.ActiveXObject) {
    $('html').addClass('ie11');
}

}); // jQuery