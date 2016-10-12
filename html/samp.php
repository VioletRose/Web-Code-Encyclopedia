<?php
    $PAGE_NAME = '&lt;samp&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This Syntactic Web tag designates the included text as sample output from a computer program, such as the result of a complex calculation or logical process, as well as displaying it in a monospace font by default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;samp&gt;Error: file not found.&lt;/samp&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<samp>Error: file not found.</samp>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
