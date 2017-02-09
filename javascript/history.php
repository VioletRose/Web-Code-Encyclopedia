<?php
	$PAGE_NAME = 'History';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The History object contains the URL history of the window - specifically, what can be accessed by use of the forward and back buttons on that page. For obvious reasons, using it will not work on a fresh window or tab. Note that this is not the privacy problem it would at first appear to be, since Javascript is not capable of accessing the actual URLs in the window's history, only knowing how many there are and able to tell the browser to go that many steps back or forward. The actual URL it ends up navigating to if those methods are used is resolved entirely client-side.</p>
	</section>
	<section>
		<h4>History Properties:</h4>
		<dl>
			<dt><code></code></dt>
			<dd>The number of URLs in the window's history.</dd>
		</dl>
	</section>
	<section>
		<h4>History Methods:</h4>
		<dl>
			<dt><code>back()</code></dt>
			<dd>Instructs the browser to go back one page in the history.</dd>
			<dt><code>forward()</code></dt>
			<dd>Instructs the browser to go forward one page in the history.</dd>
			<dt><code>go()</code></dt>
			<dd>Accepts either a positive or negative number (not 0) or a string in its argument; if a number is used, the browser is instructed to go that many pages forward or back in the window's history, while if a string is used, the browser will search for a URL containing that string in the window's history and navigate to the first match.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
