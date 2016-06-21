<?php
    $PAGE_NAME = '&lt;html&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>The first of the three simplest, most all-encompassing elements in HTML, &lt;html&gt; begins and ends the entire webpage.</p>
	<h4>Example of use:</h4>
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
