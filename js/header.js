<<<<<<< HEAD
var windowWidth;
var showMenu = false;

$(document).ready(function() {
	windowWidth = $(window).width();

	$(".cross").hide();

	if(windowWidth < 768) {
		$( ".header-list" ).hide();

		if(showMenu) {
			$(".hamburger").hide();
			$(".cross").show();
		} else {
			$(".hamburger").show();
			$(".cross").hide();
		}
	} else {
		$(".hamburger").hide();
		$(".header-list").show();
	}

	$(".hamburger").on("click", function() {
		showMenu = true;
		toggleMenu();
	});

	$(".cross").on("click", function() {
		showMenu = false;
		toggleMenu();
	});
});

$(window).resize(function() {
	windowWidth = $(window).width();

	if(windowWidth < 768 && !showMenu) {
		$(".header-list").hide();
		$(".hamburger").show();
		$(".cross").hide();
	} else {
		$(".header-list").show();
		$(".hamburger").hide();
		$(".cross").hide();
	}
});

function toggleMenu() {
	if(showMenu) {
		$(".hamburger").fadeOut(200);
		$(".cross").show();
	} else {
		$(".hamburger").show();
		$(".cross").hide();
	}

	$(".header-list").animate({height: 'toggle'}, 350);
}
=======
$('button').click(function() {
  
$(this).toggleClass('expanded').siblings('div').slideToggle();
});
>>>>>>> origin/master
