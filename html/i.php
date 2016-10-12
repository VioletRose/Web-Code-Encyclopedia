<?php
    $PAGE_NAME = '&lt;i&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag styles text inline to be italicized. Note, however, that due to the Syntactic Web design philosophy, this tag should usually be avoided in favor of other tags depending on the actual reason for the difference. Usually, italic text is used to indicate an emphatic tone, as if emulating spoken words using a louder, sharper tone, and for this purpose, the &lt;em&gt; tag is better suited. Generally speaking, a tag like this should only be used in cases where none of the normal contexts apply, such as if the text is meant to look different for a purely aesthetic reason.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;The eighth word in this sentence is &lt;i&gt;italicized&lt;/i&gt; for no reason!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>The eighth word in this sentence is <i>italicized</i> for no reason!</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
