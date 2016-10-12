<?php
    $PAGE_NAME = '&lt;sup&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag styles the contained text as superscript, which is half a character above the rest of the line and sometimes in a smaller font relative to the page default, depending on the browser and the page's style rules. This is the most common appearance for citation markers.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;The world wide web is full of content of every type, from the most everyday to the most bizarre&lt;sup&gt;[citation needed]&lt;/sup&gt;.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>The world wide web is full of content of every type, from the most everyday to the most bizarre<sup>[citation needed]</sup>.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
