$(document).ready(function() {

	var leftBird = $('.bird_left');
	var rightBird = $('.bird_right');
	function adrift() {
		leftBird.animate({top:'+=10'}, 1000);
		leftBird.animate({top:'-=10'}, 1000, adrift);

		rightBird.animate({top:'+=30'}, 3000);
		rightBird.animate({top:'-=30'}, 3000, adrift);
	}

   adrift();
	
});