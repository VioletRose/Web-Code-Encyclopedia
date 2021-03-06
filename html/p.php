<?php
    $PAGE_NAME = '&lt;p&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>One of the simplest, most commonly used tags in HTML, &lt;p&gt; defines a paragraph of text. And unlike uncontained text, each <code>&lt;p&gt;</code> element will have a margin above and below it by default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;This is a paragraph! Or, at least that's what we're telling the web browser.&lt;/p&gt;
				<br>
				&lt;p&gt;And this is also an alleged paragraph.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>This is a paragraph! Or, at least that's what we're telling the web browser.</p>
			<p>And this is also an alleged paragraph.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
