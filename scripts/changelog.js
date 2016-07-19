document.addEventListener('DOMContentLoaded', function() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if(xhr.readyState !== 4) return;
		document.getElementById('changelog').innerHTML = xhr.responseText.replace(/&/g, '&amp;').replace(/>/g, '&gt;').replace(/</g, '&lt;');
	};
	xhr.open('GET', '/changelog.txt');
	xhr.send();
});