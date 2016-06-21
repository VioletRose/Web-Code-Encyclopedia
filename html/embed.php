<?php
    $PAGE_NAME = '&lt;embed&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>Importantly distinct from the &lt;video&gt; tag, &lt;embed&gt; is specifically meant to contain external applications or plugin content, the most common use being Flash videos.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;embed src="/flash/floppysword.swf" height="550" width="400"&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<embed src="/flash/floppysword.swf" height="550" width="400">
		</figure>
	</section>
</main>
<footer>
	<h6>Example flash animation provided by Lumina, and used with permission.</h6>
</footer>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
