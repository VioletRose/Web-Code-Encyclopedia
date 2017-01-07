<?php
	$PAGE_NAME = 'Style';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The Style object is Javascript's way of interacting with CSS properties. HTML <code>&lt;style&gt;</code> tags and <code>style</code> attributes can be accessed as Javascript Style objects. Note, however, that Style objects are part of the DOM and that CSS stylesheets have no effect on the DOM, so any styles resulting from stylesheets will not be accessible in this way, though they can be overwritten by it.</p>
	</section>
	<section>
		<h4>Style Properties:</h4>
		<p>Style objects can have, as properties, any CSS property, the value of which can be set to create that effect on the page.</p>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
