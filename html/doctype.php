<?php
    $PAGE_NAME = '&lt;DOCTYPE&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This element is placed at the very beginning of every HTML document to clarify to the browser what type of HTML file it is opening. Previous specifications of HTML used it more extensively, but as <code>html</code> is the only allowed declaration for this element in HTML5, it's effectively used today to inform the browser that the page was written in HTML5 and not a prior version.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;!DOCTYPE html&gt;
			</code>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
