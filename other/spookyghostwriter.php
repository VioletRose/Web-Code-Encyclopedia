<?php
    $PAGE_NAME = 'Spooky Ghost Writer';
	$EXTRA_PAGE_HEAD_LINES = array('<link rel="stylesheet" type="text/css" href="/stylesheets/writer.css">', '<script src="/scripts/writer.js"></script>');
    require_once($_SERVER["DOCUMENT_ROOT"].'/other/otherhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This is a project I made for Halloween 2016. Enter some text below, then command the spooky ghost to read it back to you!</p>
	</section>
	<section class="spookySection">
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
