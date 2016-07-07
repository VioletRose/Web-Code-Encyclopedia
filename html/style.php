<?php
    $PAGE_NAME = '&lt;style&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag is used to contain CSS code separate from an actual stylesheet, which will be applied to the page normally. Note that this means the contents should be formatted as CSS, including using CSS comment syntax, or things may fail unexpectedly. This element should mostly only be used in the head of the document, but as of HTML5 it can be placed inside a container element and set to only modify that element and any applicable child elements. In most situations, however, the use of a proper stylesheet is preferable to this tag.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;style scoped&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;div {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: darkkhaki;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Thanks to the &lt;code&gt;&lt;style&gt;&lt;/code&gt; tag, the text within this element will be dark khaki!&lt;/p&gt;
				<br>
				&lt;/div&gt;	
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<div>
				<style scoped>
					div {
						color: darkkhaki;
					}
				</style>
				<p>Thanks to the <code>&lt;style&gt;</code> tag, the text within this element will be dark khaki!</p>
			</div>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>media</code></dt>
			<dd>&#10551; Specifies which media and/or device the linked content is optimized for; see <a href="http://www.w3schools.com/tags/att_a_media.asp">here</a> for accepted values.</dd>
			<dt><code>scoped</code></dt>
			<dd>&#10551; If present, the CSS rules within the tag will only apply to the containing element and any child elements.</dd>
			<dt><code>type</code></dt>
			<dd>&#10551; Specifies the media type of the tag, i.e. what type of code it should be expecting. This attribute is defunct, as its only accepted value, <code>text/css</code>, is now the default.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
