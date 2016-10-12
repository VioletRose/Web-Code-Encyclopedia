<?php
    $PAGE_NAME = '&lt;sub&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag styles the contained text as subscript, which is half a character below the rest of the line and sometimes in a smaller font relative to the page default, depending on the browser and the default page style rules.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;The chemical formula for water is H&lt;sub&gt;2&lt;/sub&gt;O.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>The chemical formula for water is H<sub>2</sub>O.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
