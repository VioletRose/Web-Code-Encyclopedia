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
		<figure class="exampleFigure">
			<code>
				&lt;embed src="/flash/floppysword.swf" height="550" width="400"&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<embed src="/flash/floppysword.swf" height="550" width="400">
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>height</code></dt>
			<dd>Defines the embedded content's display height, in pixels.</dd>
			<dt><code>src</code></dt>
			<dd>Specifies the URL of the file to be embedded.</dd>
			<dt><code>type</code></dt>
			<dd>Specifies the type of file targeted by <code>src</code>. See <a href="https://www.iana.org/assignments/media-types/media-types.xhtml">here</a> for a complete list of accepted values.</dd>
			<dt><code>width</code></dt>
			<dd>Defines the embedded content's display width, in pixels.</dd>
		</dl>
	</section>
</main>
<footer>
	<h6>Example flash animation provided by Lumina, and used with permission.</h6>
</footer>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
