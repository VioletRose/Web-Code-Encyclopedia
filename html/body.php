<?php
    $PAGE_NAME = '&lt;body&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>The third of the three simplest, most all-encompassing elements in HTML, &lt;body&gt; defines the entire readable portion of the website, which all visible elements must be contained within.</p>
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
			<iframe class="htmlSized" src="/html/minimal.html"></iframe>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
