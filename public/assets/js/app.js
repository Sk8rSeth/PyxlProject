$(document).ready(function() {

	// bird floating animation
	var leftBird = $('.bird_left');
	var rightBird = $('.bird_right');
	function adrift() {
		//both move up and down different amounts and at different speeds to keep from looking dumb
		leftBird.animate({top:'+=10'}, 1000);
		leftBird.animate({top:'-=10'}, 1000, adrift);

		rightBird.animate({top:'+=30'}, 3000);
		rightBird.animate({top:'-=30'}, 3000, adrift);
	}
	adrift();


	//newsletter mail AJAX
	$('footer .button').on('click', function(e){
		e.preventDefault();

		// make sure this is a real email
		var emailRegex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i; 
		var email = $('.email input').val();
		console.log(email);
		var test = emailRegex.test(email);
		console.log(test);

		if (test) {
			console.log('regex pass');
			var sendData = {
				email: email
			}
			console.log(sendData);
			var link = $(this).attr('href');
			//AJAX CALL
			$.ajax({
				type: "POST",
				url: link, 
				data: sendData,
				success: function(returnData){
					console.log(returnData);
				}
			});
			$('.email input').effect("highlight", {color: '#22ee5b'}, 2000);
			$('.email input').val('');
		} else {
			$('.email input').effect("highlight", {color: '#e13737'}, 2000);
		}
	});
	
});