<?php
    $PAGE_NAME = '&lt;body&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>The third of the three simplest, most all-encompassing elements in HTML, &lt;body&gt; defines the entire readable portion of the website, which all visible elements must be contained within.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;html&gt;
			<br>
			&lt;head&gt;
			<br>
			&lt;/head&gt;
			<br>
			&lt;body&gt;
			<br>
			&lt;/body&gt;
			<br>
			&lt;/html&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<iframe src="/html/minimal.html"></iframe>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
