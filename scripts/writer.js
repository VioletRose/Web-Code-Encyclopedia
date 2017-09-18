document.addEventListener('DOMContentLoaded', function() {
	document.getElementById('spookyButton').addEventListener('click', function(){
	var spookySpeech = document.getElementById('spookyP');
	var ghostWritesThis = document.getElementById("ghostReadsThis").value;
	spookySpeech.innerHTML = '';
	spookySpeech.style.color = 'rgba(255, 165, 0, 0)';
	for(var i = 0; i < ghostWritesThis.length; i++) {
		var letter = ghostWritesThis.charAt(i);
		var spookySpan = document.createElement('span');
		spookySpan.setAttribute("class", "spookySpan");
		spookySpan.innerHTML = letter;
		spookySpan.style.animationDelay = (i / 2)+'s';
		spookySpeech.appendChild(spookySpan);
		}
	});
}, false);