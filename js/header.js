$(document).ready(function() {
	var windowWidth = $(window).width();

	$( ".cross" ).hide();

	if(windowWidth < 640) {
		$( ".header-list" ).hide();
		$(".hamburger").show();
	} else {
		$(".hamburger").hide();
		$( ".header-list" ).show();
	}

	$( ".hamburger" ).click(function() {
		toggleMenu(true);
	});

	$( ".cross" ).click(function() {
		toggleMenu(false);
	});
});

$(document).resize(function() {
	if(windowWidth < 640) {
		$( ".header-list" ).hide();
		$(".hamburger").show();
	} else {
		$( ".header-list" ).show();
		$(".hamburger").hide();
	}
});

function toggleMenu(show) {
	if(show) {
		$( ".header-list" ).slideToggle( "slow", function() {
			$( ".hamburger" ).hide();
			$( ".cross" ).show();
		});
	} else {
		$( ".header-list" ).slideToggle( "slow", function() {
			$( ".cross" ).hide();
			$( ".hamburger" ).show();
		});
	}
}