$(document).ready(function() {
    $('.slideshow1').cycle({
		fx: 'scrollRight',
		delay: -20000,
		timeout: 32000
	});	
	
	$('.slideshow2').cycle({
		fx: 'scrollRight',
		delay: -30000,
		timeout: 32000
	});
	
	$('.slideshow3').cycle({
		fx: 'scrollRight',
		delay: -18000,
		timeout: 32000
	});	
	
	$('.slideshow4').cycle({
		fx: 'scrollRight',
		delay: -28000,
		timeout: 32000
	});	
	
	$('.slideshow5').cycle({
		fx: 'scrollRight',
		delay: -12000,
		timeout: 32000
	});	
	
	$('.slideshow6').cycle({
		fx: 'scrollRight',
		delay: -10000,
		timeout: 32000
	});	
	
	$('.slideshow7').cycle({
		fx: 'scrollRight',
		delay: -4000,
		timeout: 32000
	});	
	
	$('.slideshow8').cycle({
		fx: 'scrollRight',
		delay: 0,
		timeout: 32000
	});	
	
	$('.slideshow9').cycle({
		fx: 'scrollRight',
		delay: -6000,
		timeout: 32000
	});	
	
	$('.slideshow10').cycle({
		fx: 'scrollRight',
		delay: -26000,
		timeout: 32000
	});	
	
	$('.slideshow11').cycle({
		fx: 'scrollRight',
		delay: -16000,
		timeout: 32000
	});	
	
	$('.slideshow12').cycle({
		fx: 'scrollRight',
		delay: -22000,
		timeout: 32000
	});	
	
	$('.slideshow13').cycle({
		fx: 'scrollRight',
		delay: -10000,
		timeout: 32000
	});	
	
	$('.slideshow14').cycle({
		fx: 'scrollRight',
		delay: -14000,
		timeout: 32000
	});	
	
	$('.slideshow15').cycle({
		fx: 'scrollRight',
		delay: -8000,
		timeout: 32000
	});	
	
	$('.slideshow16').cycle({
		fx: 'scrollRight',
		delay: -24000,
		timeout: 32000
	});	
});

// Fading rollovers
var $j = jQuery;
$j(document).ready(function(){
	$j(".fade img").hover(function(){
		$j(this).fadeTo("fast", 0.7);
			},function(){
		$j(this).fadeTo("fast", 1.0);
	});
});