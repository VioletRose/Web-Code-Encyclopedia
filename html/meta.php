<?php
    $PAGE_NAME = '&lt;meta&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>Except for setting the text encoding of the page, the &lt;meta&gt; tag is almost exclusively for use by site-scanning software such as search engines to contain useful metadata. It can only be placed in the &lt;head&gt; of the website, not in the &lt;body&gt;.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;meta charset="UTF-8"&gt;
			<br>
			&lt;meta name="description" content="Personal visual reference for web design"&gt;
			<br>
			&lt;meta name="keywords" content="HTML,CSS,Javascript"&gt;
			<br>
			&lt;meta name="author" content="Violet Rose"&gt;
		</code>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
