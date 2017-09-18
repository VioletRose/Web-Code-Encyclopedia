$(document).ready(function(){
	var alphabet = 'abcdefghijklmnopqrstuvwxyz';
	function checkString(){
		
	}
	$('button').on('click', function(){
		$('#statusHeading').html('Checking…');
		var userInput = document.getElementById("userText").value;
		var userInput = userInput.toLowerCase();
		for(var i = 0; i < userInput.length; i++) {
			var n = alphabet.indexOf(userInput.charAt(i));
			if (n == -1) {
				userInput = userInput.substr(0, i) + userInput.substr(i+1);
				i--;
			}
		}
		$('.textDisplay').html(userInput);
		for(var i = 0; i < Math.ceil(userInput.length / 2); i++) {
			var x = userInput.charAt(i);
			var y = userInput.charAt((userInput.length - 1) - i);
			if (x != y) {
				$('#statusHeading').html('Check complete.');
				$('#resultsHeading').html('This is not a palindrome.');
				return
			}
		}
		$('#statusHeading').html('Check complete.');
		$('#resultsHeading').html('This is a palindrome!');
	});
});