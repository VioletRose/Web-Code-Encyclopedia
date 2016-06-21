<?php
    $PAGE_NAME = '&lt;head&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>The second of the three simplest, most all-encompassing elements in HTML, &lt;head&gt; contains information the browser should have before it even begins loading the page, such as the page title that appears on top of the browser window, font information, and other things as needed.</p>
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
