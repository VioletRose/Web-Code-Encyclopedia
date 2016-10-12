<?php
    $PAGE_NAME = '&lt;link&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>Not to be confused with &lt;a&gt;, this tag only appears in the <code>&lt;head&gt;</code> and is not displayed to the user. It is most often used to load resources such as stylesheets and web fonts, but can also link to related pages.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;link rel="stylesheet" type="text/css" href="/stylesheets/encyclopedia.css"&gt;
				<br>
				&lt;link href='https://fonts.googleapis.com/css?family=Open+Sans|Inconsolata' rel='stylesheet' type='text/css'&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>crossorigin</code></dt>
			<dd>&#10551; This attribute's function is somewhat advanced and requires background information: due to recently tightened security in the HTML5 spec, it is possible for a server to deny scripts access to its content from external websites. This includes preventing scripts from reading the content, even though a web browser still can. Depending on the individual server configuration, it may be able to grant permission only if it knows where the request is coming from, and that's where the <code>crossorigin</code> attribute comes in. When set to <code>anonymous</code>, the default behavior, no credentials will be supplied to the server hosting the image, but if set to <code>use-credentials</code>, the remote server will receive information about the origin of the request, and may grant permission if configured to do so.</dd>
			<dt><code>href</code></dt>
			<dd>&#10551; Specifies the URL of the linked content.</dd>
			<dt><code>hreflang</code></dt>
			<dd>&#10551; Specifies the language of the content being linked to, using standard <a href="http://www.w3schools.com/tags/ref_language_codes.asp">ISO language codes</a>.</dd>
			<dt><code>media</code></dt>
			<dd>&#10551; Specifies which media and/or device the linked content is optimized for; see <a href="http://www.w3schools.com/tags/att_a_media.asp">here</a> for accepted values.</dd>
			<dt><code>rel</code></dt>
			<dd>
				&#10551; Specifies the linked content's relation to the current page, which in some cases also changes how the browser handles it.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>alternate</code></dt>
						<dd>&#10551; An alternate version of the content, such as a print page, translation, or mirror.</dd>
						<dt><code>archives</code></dt>
						<dd>&#10551; A collection of records, documents, or other materials of historic interest.</dd>
						<dt><code>author</code></dt>
						<dd>&#10551; The author of the content.</dd>
						<dt><code>bookmark</code></dt>
						<dd>&#10551; A permanent URL usable for bookmarking.</dd>
						<dt><code>first</code></dt>
						<dd>&#10551; The first page in a series this page belongs to.</dd>
						<dt><code>help</code></dt>
						<dd>&#10551; A help document.</dd>
						<dt><code>icon</code></dt>
						<dd>&#10551; An icon to represent the document, generally seen in tab titles and bookmarks.</dd>
						<dt><code>index</code></dt>
						<dd>&#10551; A page where the current page is referred to in an index or table of contents.</dd>
						<dt><code>last</code></dt>
						<dd>&#10551; The last page in a series this page belongs to.</dd>
						<dt><code>license</code></dt>
						<dd>&#10551; Copyright information for the content.</dd>
						<dt><code>next</code></dt>
						<dd>&#10551; The next page in a series this page belongs to.</dd>
						<dt><code>nofollow</code></dt>
						<dd>&#10551; An unendorsed page, such as a paid link or user submitted content. This is heavily used by Google's search engine to indicate the link should not be indexed, generally because it is not directly related to or part of the parent site.</dd>
						<dt><code>noreferrer</code></dt>
						<dd>&#10551; Indicates that the browser should not send a HTTP referrer header if the browser accesses the link from this page.</dd>
						<dt><code>pingback</code></dt>
						<dd>&#10551; The address of the pingback server that handles pingbacks to the current page. Note: pingback is a concept where a user can register with a pingback server to have pingbacks to their work tracked, so they know when it gets referenced and by which sites.</dd>
						<dt><code>prefetch</code></dt>
						<dd>&#10551; Indicates that the target content should be cached by the browser.</dd>
						<dt><code>prev</code></dt>
						<dd>&#10551; The previous page in a series this page belongs to.</dd>
						<dt><code>search</code></dt>
						<dd>&#10551; A search tool for the page.</dd>
						<dt><code>sidebar</code></dt>
						<dd>&#10551; Content intended to be loaded in the browser's sidebar, if it has one.</dd>
						<dt><code>stylesheet</code></dt>
						<dd>&#10551; A .css file containing style rules to be used on the current page.</dd>
						<dt><code>tag</code></dt>
						<dd>&#10551; A keyword for the current page.</dd>
						<dt><code>up</code></dt>
						<dd>&#10551; A page that gives additional context to the current page.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>sizes</code></dt>
			<dd>&#10551; If <code>rel</code> is set to <code>icon</code>, defines the size of the image being linked to. Setting the value to <code><var>Height</var>x<var>Width</var></code>, with <var>Height</var> and <var>Width</var> replaced with the desired height and width of the image in pixels, will define its size. Multiple values are allowed on the same attribute. Also, <code>any</code> may be used for scalable images such as .svg files.</dd>
			<dt><code>type</code></dt>
			<dd>&#10551; Specifies the media type of the linked content. See <a href="http://www.iana.org/assignments/media-types/">here</a> for accepted values.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
