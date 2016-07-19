<?php
    $PAGE_NAME = '&lt;iframe&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This element embeds another webpage inside of a webpage. Although the similar &lt;frame&gt; element has now been fully deprecated from HTML5, &lt;iframe&gt; still exists in a more limited form than in previous years, mostly due to security reasons but also because many of its use cases can now be satisfied using other, better methods.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;iframe height="959" src="iframe.php" width="539" &gt;&lt;/iframe&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<iframe height="959" src="iframe.php" width="539"></iframe>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>height</code></dt>
			<dd>&#10551; Defines the height of the element, in pixels.</dd>
			<dt><code>name</code></dt>
			<dd>&#10551; Defines a name for the element. This can be used to target it with Javascript or certain attributes on other elements.</dd>
			<dt><code>sandbox</code></dt>
			<dd>
				&#10551; This attribute is an exception to normal rules, in that it is both boolean and accepts values. If present, the content of the <code>&lt;iframe&gt;</code> element will have several restrictions placed on it, disabling form submission, script execution, APIs, plugins, and any automatic feature such as auto-playing video or automatically focused buttons. In addition, the content will be treated by the web browser as from a different origin as the main site, with higher security restrictions, and links will not be able to load outside of the <code>&lt;iframe&gt;</code> even if they are coded to do so. However, by setting its values appropriately, these restrictions may be selectively removed. Use of this attribute is highly advisable if you're embedding an external website you do not have control over.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>allow-forms</code></dt>
						<dd>&#10551; Re-enables form submission in the embedded content.</dd>
						<dt><code>allow-pointer-lock</code></dt>
						<dd>&#10551; Re-enables API loading.</dd>
						<dt><code>allow-popups</code></dt>
						<dd>&#10551; Re-enables popups (links which open in a new window).</dd>
						<dt><code>allow-same-origin</code></dt>
						<dd>&#10551; Specifies that the embedded content should be treated by the browser as from the same origin.</dd>
						<dt><code>allow-scripts</code></dt>
						<dd>&#10551; Re-enables the use of scripting.</dd>
						<dt><code>allow-top-navigation</code></dt>
						<dd>&#10551; Removes the restriction on top-level links.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>src</code></dt>
			<dd>&#10551; Specifies a source URL to be loaded into the element.</dd>
			<dt><code>srcdoc</code></dt>
			<dd>&#10551; Rather than being from an external or internal source, this attribute accepts actual HTML code as its value, allowing the content of the iframe to be written in the same HTML document. However, in virtually any case one might wish to do this, there is a better approach, so use of this method is not advisable.</dd>
			<dt><code>width</code></dt>
			<dd>&#10551; Defines the width of the element, in pixels.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
