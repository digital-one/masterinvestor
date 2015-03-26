var isTouchDevice = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isTouchDevice.Android() || isTouchDevice.BlackBerry() || isTouchDevice.iOS() || isTouchDevice.Opera() || isTouchDevice.Windows());
    }
};



$(function(){

var _handleShown = true,
	_fullpageActive = false,
	_isTablet,
	_isMobile,
	_isDesktop,
	_container,
	_scrollDirection,
	_currentPathName;

//Homepage slider

if($('#slider').length){


$('#slider').on('init', function(event, slick){
	var _total = $('.slick-slide',$(this)).length;
	$('#slider').prepend('<div class="page-count"><span class="page">1</span> of <span class="total">'+_total+'</span></div>');

});

$('#slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		$('.page-count .page',$(this)).text(nextSlide+1);
	})
/*
$('#slider').on('afterChange', function(event, slick, currentSlide){
	$('.page-count .page',$(this)).text(currentSlide+1);
	
});
*/



$('#slider').slick({
    dots: false,
    autoplay: true,
    fade: true,
    autoplaySpeed: 4000,
    speed: 600,
    pauseOnHover: true,
    arrows: true
  });


}


if($('#twitter-slider').length){ 


initTwitterFeedSlick = function(){
	$('#twitter-slider').slick({
    dots: false,
    autoplay: true,
    fade: true,
    autoplaySpeed: 4000,
    speed: 600,
    pauseOnHover: true,
    arrows: true
  });
}


	handleTweets = function(_tweets){
		var x = _tweets.length,
			n = 0,
			element = document.getElementById('twitter-slider');
var html = '';
while(n < x) {
html += '<div class="slide"><div class="vcenter">' + _tweets[n] + '</div></div>';
n++;
}
//html += '</ul>';
element.innerHTML = html;
	initTwitterFeedSlick();
}


var mi_feed = {
	"id": '581190015948058624',
    "domId": '',
	"maxTweets": 3,
	"enableLinks": true,
	"showUser": false,
	"showTime": false,
	"dateFunction": '',
	"showRetweet": false,
	"customCallback": handleTweets,
	"showInteraction": false
    };
 twitterFetcher.fetch(mi_feed);
}


/*

if($('#carousel').length){
$('#carousel').slick({
  		dots: false,
  		arrows: true,
  		infinite: true,
  		autoplay: true,
  		 autoplaySpeed: 4000,
  		speed: 600,
  		slidesToShow: 3,
  		slidesToScroll: 1,
  		responsive: [
    	{
      		breakpoint: 767,
      		settings: {
        	slidesToShow: 2,
        	slidesToScroll: 1,
        	infinite: true,
        	dots: false
      	}
    },
    	
    	{
      	breakpoint: 379,
      	settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    	}
 	 ]
	});
}

*/


});