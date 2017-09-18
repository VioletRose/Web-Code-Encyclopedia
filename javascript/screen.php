<?php
	$PAGE_NAME = 'Screen';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>The Screen object represents the user's screen, and contains information related to its size and color capabilities.</p>
	</section>
	<section>
		<h4>Screen Object Properties:</h4>
		<dl>
			<dt><code>availHeight</code></dt>
			<dd>A number of pixels representing the height of the screen, excluding the Windows Taskbar if applicable.</dd>
			<dt><code>availWidth</code></dt>
			<dd>A number of pixels representing the width of the screen, excluding the Windows Taskbar if applicable.</dd>
			<dt><code>colorDepth</code></dt>
			<dd>The bit depth of the screen's color palette.</dd>
			<dt><code>height</code></dt>
			<dd>A number of pixels representing the total height of the screen.</dd>
			<dt><code>pixelDepth</code></dt>
			<dd>A number of pixels representing the total height of the screen. Note that as this returns the same information as <code>colorDepth</code> and is more widely supported, there is no reason for this property to be used.</dd>
			<dt><code>width</code></dt>
			<dd>A number of pixels representing the total width of the screen.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
