$(document).ready(function () {
	$('#nav > li > a').click(function(){
		if ($(this).attr('class') != 'active'){
			$('#nav li ul').slideUp();
			$(this).next().slideToggle();
			$('#nav li a').removeClass('active');
			$(this).addClass('active');
		}
	});
});

$('#accordion-1').dcAccordion({
	eventType: 'click',
	autoClose: true,
	saveState: true,
	disableLink: true,
	showCount: true,
	speed: 'slow'
});

$('#accordion-2').dcAccordion({
	eventType: 'click',
	autoClose: false,
	saveState: true,
	disableLink: true,
	showCount: true,
	speed: 'fast'
});

$('#accordion-3').dcAccordion({
	eventType: 'click',
	autoClose: false,
	saveState: false,
	disableLink: false,
	showCount: false,
	speed: 'slow'
});

$('#accordion-4').dcAccordion({
	eventType: 'hover',
	autoClose: true,
	saveState: true,
	disableLink: true,
	showCount: true,
	menuClose: false,
	speed: 'slow'
});

$('#accordion-5').dcAccordion({
	eventType: 'hover',
	autoClose: false,
	saveState: true,
	disableLink: true,
	showCount: true,
	menuClose: true,
	speed: 'fast'
});

$('#accordion-6').dcAccordion({
	eventType: 'hover',
	autoClose: false,
	saveState: false,
	disableLink: false,
	showCount: false,
	menuClose: true,
	speed: 'slow'
});