<?php
    $PAGE_NAME = 'Other Stuff';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<section>
		<p>This section showcases a few of the scripting demos and other experiments I've done while working on the site, mostly to learn more about Javascript and JQuery. Don't expect the highest grade of professionalism, it's more a collection of scraps than anything else, but I decided to put them up here for fun and for ease of sharing.</p>
	</section>
	<section class="spookySection">
		<style>
			@keyframes spookyApparition {
				from {
					color: black;
				}
				to {
					color: orange;
				}
			}
			.spookyEye {
				background-color: black;
				border-radius: 50%;
				display: inline-block;
				height: 20px;
				margin: 20px 13px 0;
				width: 20px;
			}
			.spookySection {
				background-color: black;
				color: orange;
			}
			.spookySpan {
				animation: spookyApparition 0.5s linear 1s 1 forwards;
			}
			#spookyGhost {
				background-color: white;
				display: inline-block;
				float: left;
				height: 100px;
				width: 100px;
			}
			#spookyHauntedDiv {
				margin: 8px 0;
			}
			#spookyWriting {
				border: solid orange;
				height: 100px;
				margin-left: 105px;
				padding: 0 8px;
			}
		</style>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				document.getElementById('spookyButton').addEventListener('click', function(){
					var spookySpeech = document.getElementById('spookyP');
					var ghostWritesThis = document.getElementById("ghostReadsThis").value;
					spookySpeech.innerHTML = '';
					spookySpeech.style.color = 'black';
					for(var i = 0; i < ghostWritesThis.length; i++) {
						var letter = ghostWritesThis.charAt(i);
						var spookySpan = document.createElement('span');
						spookySpan.setAttribute("class", "spookySpan");
						spookySpan.innerHTML = letter;
						spookySpan.style.animationDelay = (i / 2)+'s';
						spookySpeech.appendChild(spookySpan);
					}
				})
			}, false);
		</script>
		<h4 class="centeredText">Spooky Ghost Writer~</h4>
		<p>Enter some text below, then command the spooky ghost to read it back to you!</p>
		<input id="ghostReadsThis" placeholder="Spooky placeholder text~" type="text">
		<button id="spookyButton" type="button">I command you, spirit, speak!</button>
		<br>
		<div id="spookyHauntedDiv">
			<div id="spookyGhost">
				<div class="spookyEye"></div>
				<div class="spookyEye"></div>
			</div>
			<div id="spookyWriting"><p id="spookyP">. . .</p></div>
		</div>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
