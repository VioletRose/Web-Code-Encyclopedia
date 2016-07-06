<?php
    $PAGE_NAME = '&lt;object&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag is a general container for nearly any other type of content that can be embedded into a webpage, such as audio, video, Java applets, ActiveX, PDFs, Flash, and even other websites. However, it should be used with care as many of those things already have specific elements dedicated to them, and it's important to use the right thing for the right task.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;object data="/html/iframe.php" height="959" width="539"&gt;
				<br>
				&lt;/object&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<object data="/html/iframe.php" height="959" width="539">
			</object>
		</figure>
	</section>
	<section>
		<h4>Child tags of <code>&lt;object&gt;</code></h4>
		<dl>
			<dt><code>&lt;param&gt;</code></dt>
			<dd>&#10551; This tag is used to define parameters for plugin content inside of the <code>&lt;object&gt;</code> element. Note that use of this requires knowledge of what parameters the plugin uses.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;object&gt;</code></h4>
		<dl>
			<dt><code>data</code></dt>
			<dd>&#10551; Specifies the URL of the content to be embedded.</dd>
			<dt><code>form</code></dt>
			<dd>&#10551; Specifies the id of an associated <code>&lt;form&gt;</code> element.</dd>
			<dt><code>height</code></dt>
			<dd>&#10551; Defines the height of the element, in pixels.</dd>
			<dt><code>name</code></dt>
			<dd>&#10551; Defines a name for the element. This can be used to target it with Javascript.</dd>
			<dt><code>type</code></dt>
			<dd>&#10551; Specifies the type of content targeted by <code>data</code>. See <a href="https://www.iana.org/assignments/media-types/media-types.xhtml">here</a> for a complete list of accepted values.</dd>
			<dt><code>usemap</code></dt>
			<dd>&#10551; Specifies the name of a <code>&lt;map&gt;</code> element on the same page, which will be associated with the <code>&lt;object&gt;</code> element. Note that this only works if the embedded content is an image file.</dd>
			<dt><code>width</code></dt>
			<dd>&#10551; Defines the width of the element, in pixels.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;param&gt;</code></h4>
		<dl>
			<dt><code>name</code></dt>
			<dd>&#10551; Specifies the name of the parameter to be defined.</dd>
			<dt><code>value</code></dt>
			<dd>&#10551; Specifies the value the parameter will be defined with.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
