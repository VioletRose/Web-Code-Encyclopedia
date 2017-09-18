<?php
	$PAGE_NAME = 'SNEK'; 
	$EXTRA_PAGE_HEAD_LINES = array('<link rel="stylesheet" type="text/css" href="/stylesheets/snek.css">', '<script src="/scripts/snek.js"></script>');
	require_once($_SERVER["DOCUMENT_ROOT"].'/other/otherhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Guide your snek with the arrow keys on the keyboard or by clicking the up/right/down/left quadrants of the game area to collect pellets and become longer, but don't run into your own body or you'll have to start over!</p>
	</section>
	<section>
		<div id="snekArea">
			<canvas id="snekCanvas" height="512" width="512" tabindex="0">If you are seeing this message, your browser does not support the <code>&lt;canvas&gt;</code> element.</canvas>
			<div id="scoreboard">
			Pause/Unpause Game: <img id="pauseButton" src="/images/pausebutton.png">
			<br>
			High Score: <span id="highScoreDisplay">0</span> Pellets
			<br>
			Current Score: <span id="currentScoreDisplay">0</span> Pellets
			<br>
			Time Played: <span id="timePlayedDisplay">0</span> Seconds
			</div>
		</div>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
