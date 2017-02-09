<?php
    $PAGE_NAME = '&lt;img&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>The simplest and most commonly used way to insert an image into a webpage.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;img src="/images/violetflower.png"&gt;&lt;/img&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<img src="/images/violetflower.png">
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>alt</code></dt>
			<dd>Defines alternative text for the image, to be displayed if the image is incapable of loading for some reason.</dd>
			<dt><code>crossorigin</code></dt>
			<dd>This attribute's function is somewhat advanced and requires background information: due to recently tightened security in the HTML5 spec, it is possible for a server to deny scripts access to its content from external websites. This includes preventing scripts in <code>&lt;canvas&gt;</code> elements from reading the image. Depending on the individual server configuration, it may be able to grant permission only if it knows where the request is coming from, and that's where the <code>crossorigin</code> attribute comes in. When set to <code>anonymous</code>, the default behavior, no credentials will be supplied to the server hosting the image, but if set to <code>use-credentials</code>, the remote server will receive information about the origin of the request, and may grant permission if configured to do so.</dd>
			<dt><code>height</code></dt>
			<dd>Defines the height of the image, in pixels.</dd>
			<dt><code>ismap</code></dt>
			<dd>If present, defines the image as an image-map. When clicked on, the server receives the coordinates of the click and may have defined responses, depending on what, if anything, it is scripted to do.</dd>
			<dt><code>longdesc</code></dt>
			<dd>Specifies a URL to a page which contains a long description of the image.</dd>
			<dt><code>src</code></dt>
			<dd>Specifies the URL of the image to be displayed.</dd>
			<dt><code>usemap</code></dt>
			<dd>Specifies the name of a <code>&lt;map&gt;</code> element on the same page, which will be applied to the image.</dd>
			<dt><code>width</code></dt>
			<dd>Defines the height of the image, in pixels.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
