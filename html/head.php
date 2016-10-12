<?php
    $PAGE_NAME = '&lt;head&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>The second of the three simplest, most all-encompassing elements in HTML, &lt;head&gt; contains information the browser should have before it even begins loading the page, such as the page title that appears on top of the browser window, font information, and other things as needed.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
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
		<figure class="renderFigure">
			<iframe src="/html/minimal.html"></iframe>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
