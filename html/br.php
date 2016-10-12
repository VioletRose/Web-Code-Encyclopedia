<?php
    $PAGE_NAME = '&lt;br&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag creates a single line break, which is required because normally, all text entered in an HTML document will ignore line breaks and render sequentially.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				This is not
				<br>
				a valid way to insert a line break. You must use the &amp;lt;br&amp;gt; tag, like this:
				<br>
				&lt;br&gt;
				<br>
				to accomplish that.
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			This is not a valid way to insert a line break. You must use the &lt;br&gt; tag, like this:
			<br>
			to accomplish that.
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
