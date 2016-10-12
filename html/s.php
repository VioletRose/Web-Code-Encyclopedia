<?php
    $PAGE_NAME = '&lt;s&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This Syntactic Web tag designates the included text as no longer correct or relevant, but has not been deleted or replaced, as well as styling it with a strikethrough.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;&lt;s&gt;I have 57 HTML tag pages.&lt;/s&gt;&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p><s>I have 57 HTML tag pages.</s></p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
