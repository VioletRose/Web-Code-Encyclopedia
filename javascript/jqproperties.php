<?php
	$PAGE_NAME = 'jQuery Properties';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The jQuery library, like everything else in Javascript, is an object and has a small number of properties, including two which can be used to set animation options.</p>
	</section>
	<section>
		<dl>
			<dt><code>jquery</code></dt>
			<dd>&#10551; The version number of the server's copy of the jQuery library.</dd>
				<!--Is there any way to access this other than through this method-like process?-->
			<dt><code>fx.interval</code></dt>
			<dd>&#10551; The animation firing rate in milliseconds; defaults to <code>13</code>. It can be raised or lowered for improved performance or smoother animations. Note that changes will only take effect while no jQuery animations are currently running.</dd>
				<!--What's this business about having no effect if the browser supports requestAnimationFrame? That's.. all of them more or less.-->
			<dt><code>fx.off</code></dt>
			<dd>&#10551; A boolean controlling whether jQuery animations are disabled or not; defaults to <code>false</code>. If it is set to <code>true</code>, animation methods will simply skip from the initial state to the end state without any animated transition.</dd>
			<dt><code>support</code></dt>
			<dd>&#10551; Contains a number of boolean subproperties which return <code>true</code> if the relevant functionality is supported in this browser, and <code>false</code> if it is not. This is intended for jQuery's use and not the web developer directly.</dd>
				<!--How does it know? Are these 'properties' actually functions/methods that run tests or did the tests get run when the library was loaded?-->
			<dt><code>length</code></dt>
			<dd>&#10551; </dd>
				<!--What even is this?-->
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
