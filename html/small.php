<?php
    $PAGE_NAME = '&lt;small&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This tag will have a particular section of text be smaller relative to the page default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;This website continues to progress apace, and by the time it's done, I'll be a genius at web development!&lt;/p&gt;
				<br>
				&lt;p&gt;&lt;small&gt;Note: I will likely not be a genius at web development. Though it is possible.&lt;/small&gt;&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>This website continues to progress apace, and by the time it's done, I'll be a genius at web development!</p>
		<p><small>Note: I will likely not be a genius at web development. Though it is possible.</small></p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
