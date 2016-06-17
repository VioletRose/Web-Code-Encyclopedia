<?php
    $PAGE_NAME = '&lt;p&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>One of the simplest, most commonly used tags in HTML, &lt;p&gt; defines a paragraph of text. That's it.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;p&gt;This is a paragraph! Or, at least that's what we're telling the web browser.&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p>This is a paragraph! Or, at least that's what we're telling the web browser.</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
