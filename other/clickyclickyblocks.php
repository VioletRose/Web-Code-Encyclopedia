<?php
    $PAGE_NAME = 'Clicky Clicky Blocks';
	$EXTRA_PAGE_HEAD_LINES = array('<link rel="stylesheet" type="text/css" href="/stylesheets/blocks.css">', '<script src="/scripts/blocks.js"></script>');
    require_once($_SERVER["DOCUMENT_ROOT"].'/other/otherhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This was my first experiment attempting to use jQuery calls efficiently. Click on the blocks!</p>
	</section>
	<section>
		<div class="block redBlock">&nbsp;</div>
		<div class="block blueBlock">&nbsp;</div>
		<div class="block redBlock">&nbsp;</div>
		<div class="block blueBlock">&nbsp;</div>
		<br>
		<div class="block redBlock">&nbsp;</div>
		<div class="block blueBlock">&nbsp;</div>
		<div class="block redBlock">&nbsp;</div>
		<div class="block blueBlock">&nbsp;</div>
		<br>
		<div class="block redBlock">&nbsp;</div>
		<div class="block blueBlock">&nbsp;</div>
		<div class="block redBlock">&nbsp;</div>
		<div class="block blueBlock">&nbsp;</div>
		<br>
		<div class="block redBlock">&nbsp;</div>
		<div class="block blueBlock">&nbsp;</div>
		<div class="block redBlock">&nbsp;</div>
		<div class="block blueBlock">&nbsp;</div>
		<br>
		<button>Toggle and mark</button>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
