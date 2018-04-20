var $ = jQuery;

$(document).ready(function ($) {
	$('a[href="#"]').click(function (e) {
		e.preventDefault();
	});
});

$(function () {
	if ($('body.home').length) {
		homepageScripts();
	} else if ($('body.single-project').length) {
		singleProjectScripts();
	} else if ($('body.page-template-page-team').length) {
		teamPageScripts();
	}
	sidebarScripts();
});

function homepageScripts() {
	var $section1 = $('.home-section-1');
	var $section2 = $('.home-section-2');
	var $section3 = $('.home-section-3');
	var $logo = $('.home-section-2 .forerunner-logo');
	var $heroContent = $('.home-section-1 .hb-content, .home-section-1 .hb-part1');

	function onScroll() {
		var scrollTop = $(this).scrollTop();
		var section1 = $section1.outerHeight();
		var section2 = $section2.innerHeight();
		var section3 = $section3.innerHeight();
		var scrollProgress = (section1 - scrollTop) / section1;

		$logo.css('opacity', 2 * scrollProgress);
		$heroContent.css('opacity', scrollProgress);

		if (scrollTop < section1 + 40) {
			$('#header').css({
				background: 'none',
				borderColor: 'rgba(255,255,255,0)'
			});
			$('#header').addClass('desktop-no-bg');
		} else if (scrollTop < section1 + section2) {
			$('#header').css({
				borderColor: 'rgba(255,255,255,1)',
				background: '#011832',
				fill: 'rgb(255,255,255)'
			});
			$('#header').addClass('desktop-no-bg');
		} else if (scrollTop < section1 + section2 + section3) {
			$('#header').css({
				borderColor: '#011832',
				background: 'rgb(255,255,255)',
				fill: '#011832'
			});
			$('#header').removeClass('desktop-no-bg');
		} else {
			$('#header').css({
				background: '#9e9e9c',
				fill: 'white',
				borderColor: 'white'
			});
			$('#header').removeClass('desktop-no-bg');
		}
	}
	$(window).scroll(onScroll);

	var bannerImages = $(".hero-banner-full");
	var selectedImageIndex = 0;
	function transitionHeroImage() {
		var nextImageIndex = (selectedImageIndex === bannerImages.length - 1) ? 0 : selectedImageIndex + 1;
		$(bannerImages[selectedImageIndex]).animate({ opacity: 0 }, 1500);
		$(bannerImages[nextImageIndex]).animate({ opacity: 1 }, 1500);
		selectedImageIndex = nextImageIndex;
	}
	setInterval(transitionHeroImage, 8000);
}

function singleProjectScripts() {
	var $section1 = $('.single-project-section-1');
	var $section2 = $('.single-project-section-2');
	$(window).scroll(function () {

		var scrollTop = $(this).scrollTop();
		var section1 = $section1.innerHeight();
		var section2 = $section2.innerHeight();

		if (scrollTop < section1) {
			$('#header').css({
				fill: 'white',
				background: 'none',
				borderColor: 'transparent'
			});
		} else if (scrollTop < section1 + section2) {
			$('#header').css({
				borderColor: 'rgba(255,255,255,1)',
				background: 'rgba(0,23,51,1)',
				fill: 'white'
			});
		} else {
			$('#header').css({
				borderColor: '#011832',
				background: 'white',
				fill: '#011832'
			});
		}
	});
}

function teamPageScripts() {
	$('.team-content .team-member').click(function () {
		$('.team-content .team-detail-outer').animate({
			height: $('.team-detail').outerHeight(),
			opacity: 1
		}, null, function () {
			$('.team-content .team-detail-outer').css({
				height: 'auto'
			})
		});
		$("html, body").animate({
			scrollTop: $('.team-detail').offset().top
		});
	});

	$('a.close-btn').click(function () {
		$('.team-content .team-detail-outer').animate({
			height: 0,
			opacity: 0
		});
	});
}

function sidebarScripts() {
	var hamburgerBtn = $('#header .hamburger');
	var closeBtn = $('#header .close-btn');
	var body = $('body');
	var header = $('#header');

	function open() {
		$('#header .sidebar').animate({
			right: '0em'
		});
	}
	function close() {
		$('#header .sidebar').animate({
			right: '-40em'
		});
	}

	hamburgerBtn.click(open);
	closeBtn.click(close);
	body.click(close);

	header.click(function (e) {
		e.stopPropagation();
	})
}
