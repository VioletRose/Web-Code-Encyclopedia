<?php
    $PAGE_NAME = '&lt;html&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>The first of the three simplest, most all-encompassing elements in HTML, &lt;html&gt; begins and ends the entire code of the webpage.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;!DOCTYPE html&gt;
				<br>
				&lt;html&gt;
				<br>
				&lt;head&gt;
				<br>
				&lt;meta charset="UTF-8"&gt;
				<br>
				&lt;title&gt;This text will display in the browser's toolbar!&lt;/title&gt;
				<br>
				&lt;/head&gt;
				<br>
				&lt;body&gt;
				<br>
				&lt;main&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;This text will display in the web browser!&lt;/p&gt;
				<br>
				&lt;/main&gt;
				<br>
				&lt;/body&gt;
				<br>
				&lt;/html&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<iframe src="/html/minimal.html"></iframe>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
