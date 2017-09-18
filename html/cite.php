<?php
    $PAGE_NAME = '&lt;cite&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This Semantic Web tag designates the included text as the title of a creative work such a book, TV show, game, painting, etc. as well as italicizing it by default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;&lt;cite&gt;Stardew Valleylt;/cite&gt; is developed by Eric Barone, and was first released on February 16, 2016.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p><cite>Stardew Valley</cite> is developed by Eric Barone, and was first released on February 16, 2016.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
