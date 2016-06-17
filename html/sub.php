<?php
    $PAGE_NAME = '&lt;sub&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>This tag styles inline text as a subscript, which is half a character below the rest of the line and sometimes in a smaller font, depending on the browser and the default page style rules.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;p&gt;The chemical formula for water is H&lt;sub&gt;2&lt;/sub&gt;O.&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p>The chemical formula for water is H<sub>2</sub>O.</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
