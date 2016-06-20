<?php
    $PAGE_NAME = '&lt;iframe&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>This element embeds another webpage inside of a webpage. Although the similar &lt;frame&gt; element has now been fully deprecated from HTML5, &lt;iframe&gt; still exists in a more limited form than in previous years, mostly due to security reasons.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;iframe src="iframe.php"&gt;&lt;/iframe&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<iframe src="iframe.php"></iframe>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
