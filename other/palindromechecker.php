<?php
    $PAGE_NAME = 'Palindrome Checker';
	$EXTRA_PAGE_HEAD_LINES = array('<link rel="stylesheet" type="text/css" href="/stylesheets/palindrome.css">', '<script src="/scripts/palindrome.js"></script>');
    require_once($_SERVER["DOCUMENT_ROOT"].'/other/otherhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>A "palindrome" is a word or phrase that is the same whether the letters are in forwards or backwards order. Enter a word or phrase in the box below and my script will check to see if it's a palindrome or not!</p>
	</section>
	<section class="centeredText">
		<input id="userText" placeholder="Enter text here" type="text">
		<br>
		<button type="button">Check!</button>
		<h4 id="statusHeading">Waiting for user input…</h4>
		<div class="textDisplay" id="forwardsText">Nothing here yet!</div>
		<div class="textDisplay" id="backwardsText">Nothing here yet!</div>
		<h4 id="resultsHeading">The placeholder text is not a palindrome.</h4>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
