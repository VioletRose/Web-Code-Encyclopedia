<?php
    $PAGE_NAME = '&lt;em&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This Semantic Web tag designates the included text as emphasized, as if spoken with a louder or more emotional tone, as well as italicizing it by default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;This text is &lt;em&gt;emphatic!&lt;/em&gt;&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>This text is <em>emphatic!</em></p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
