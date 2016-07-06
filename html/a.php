<?php
    $PAGE_NAME = '&lt;a&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>An anchor, or hyperlink, is how a web browser can be instructed to navigate to another page when certain things are clicked. <code>&lt;a&gt;</code> is unique in that despite being inline formatting, it also applies to objects and, if used improperly, even blank space on the page. Anchors can be attached to many things, but most common are text and images.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;a href="/html.php"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Click here to be directed back to the main page about HTML! Or, click this image!&lt;/p&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src="/images/html.png"&gt;&lt;/img&gt;
				<br>
				&lt;/a&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<a href="/html.php">
				<p>Click here to be directed back to the main page about HTML! Or, click this image!</p>
				<img src="/images/html.png"></img>
			</a>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>download</code></dt>
			<dd>&#10551; If present, specifies that the target of the hyperlink will be downloaded when the user clicks it.</dd>
			<dt><code>href</code></dt>
			<dd>&#10551; Specifies the URL of the content that will be linked to. This attribute is necessary for the anchor to function.</dd>
			<dt><code>hreflang</code></dt>
			<dd>&#10551; Specifies the language of the content being linked to, using standard <a href="http://www.w3schools.com/tags/ref_language_codes.asp">ISO language codes</a>.</dd>
			<dt><code>media</code></dt>
			<dd>&#10551; Specifies which media and/or device the linked content is optimized for; see <a href="http://www.w3schools.com/tags/att_a_media.asp">here</a> for accepted values.</dd>
			<dt><code>rel</code></dt>
			<dd>&#10551; 
				Specifies how the current page relates to the linked content. 
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>alternate</code><dt>
						<dd>&#10551; An alternate version of the content, such as a print page, translation, or mirror.</dd>
						<dt><code>author</code><dt>
						<dd>&#10551; The author of the content.</dd>
						<dt><code>bookmark</code><dt>
						<dd>&#10551; A permanent URL usable for bookmarking.</dd>
						<dt><code>help</code><dt>
						<dd>&#10551; A help document.</dd>
						<dt><code>license</code><dt>
						<dd>&#10551; Copyright information for the content.</dd>
						<dt><code>next</code><dt>
						<dd>&#10551; The next page in a series this page belongs to.</dd>
						<dt><code>nofollow</code><dt>
						<dd>&#10551; An unendorsed page, such as a paid link or user submitted content. This is heavily used by Google's search engine to indicate the link should not be indexed, generally because it is not directly related to or part of the parent site.</dd>
						<dt><code>noreferrer</code><dt>
						<dd>&#10551; Indicates that the browser should not send a HTTP referrer header if the user clicks the link.</dd>
						<dt><code>prefetch</code><dt>
						<dd>&#10551; Indicates that the target content should be cached by the browser.</dd>
						<dt><code>prev</code><dt>
						<dd>&#10551; The previous page in a series this page belongs to.</dd>
						<dt><code>search</code><dt>
						<dd>&#10551; A search tool for the page.</dd>
						<dt><code>tag</code><dt>
						<dd>&#10551; A keyword for the current page.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>target</code></dt>
			<dd>&#10551; 
				Specifies where the linked content should be opened. 
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>_blank</code></dt>
						<dd>&#10551; Opens the content in a new window or tab.</dd>
						<dt><code>_self</code></dt>
						<dd>&#10551; Opens the content in the same frame where it was clicked. This is the default behavior.</dd>
						<dt><code>_parent</code></dt>
						<dd>&#10551; Opens the content in the parent frame of the child frame where the link appears, if applicable.</dd>
						<dt><code>_top</code></dt>
						<dd>&#10551; Opens the content in the full body of the window.</dd>
						<dt><code><i>framename</i></code></dt>
						<dd>&#10551; When <code><i>framename</i></code> is replaced with the name of a valid frame, will open the content in that frame.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>type</code></dt>
			<dd>&#10551; Specifies the media type of the linked content. See <a href="http://www.iana.org/assignments/media-types/">here</a> for accepted values.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
