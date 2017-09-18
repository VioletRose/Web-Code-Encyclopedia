<?php
	$PAGE_NAME = 'jQuery Properties';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>The jQuery library, like everything else in Javascript, is an object and has a small number of properties, including three global properties and one associated with the currently running jQuery statement.</p>
	</section>
	<section>
		<h4>jQuery Object Properties</h4>
		<dl>
			<dt><code>jquery</code></dt>
			<dd>The version number of the server's copy of the jQuery library.</dd>
			<dt><code>fx.interval</code></dt>
			<dd>The animation firing rate in milliseconds; defaults to <code>13</code>. It can be raised or lowered for improved performance or smoother animations. Note that changes will only take effect while no jQuery animations are currently running, and also that this property does not function in modern browsers which support the <code>window.requestAnimationFrame()</code> method, being largely a holdover from older versions where animations might cause more lag.</dd>
			<dt><code>fx.off</code></dt>
			<dd>A boolean controlling whether jQuery animations are disabled or not; defaults to <code>false</code>. If it is set to <code>true</code>, animation methods will simply skip from the initial state to the end state without any animated transition.</dd>
			<dt><code>length</code></dt>
			<dd>The number of elements selected by the current jQuery statement.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
