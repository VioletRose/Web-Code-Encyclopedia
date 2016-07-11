<?php
    $PAGE_NAME = '&lt;map&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p><strong>This page is currently incomplete!</strong></p>
		<p>This tag creates an image map, which defines clickable areas inside of a single displayed image, each area having a different effect when clicked, either different link URLs or Javascript commands.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;img src="/images/mapbuttons.png" width="171" height="93" alt="areabuttons" usemap="#buttonmap"&gt;
				<br>
				&lt;map name="buttonmap"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;area shape="rect" coords="0,0,58,30" href="/index.php" alt="Home"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;area shape="rect" coords="158,0,170,29" href="/html.php" alt="HTML"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;area shape="rect" coords="0,62,37,92" href="/css.php" alt="CSS"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;area shape "rect" coords="81,62,170,92" href="/javascript.php" alt="Javascript"&gt;
				<br>
				&lt;/map&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<img src="/images/mapbuttons.png" width="171" height="93" alt="areabuttons" usemap="#buttonmap">
			<map name="buttonmap">
				<area shape="rect" coords="0,0,58,30" href="/index.php" alt="Home">
				<area shape="rect" coords="115,0,170,29" href="/html.php" alt="HTML">
				<area shape="rect" coords="0,62,37,92" href="/css.php" alt="CSS">
				<area shape "rect" coords="81,62,170,92" href="/javascript.php" alt="Javascript">
			</map>
		</figure>
	</section>
	<section>
		<h4>Child tags of <code>&lt;map&gt;</code></h4>
		<dl>
			<dt><code>&lt;area&gt;</code></dt>
			<dd>&#10551; This tag defines a clickable area inside an image as part of a <code>&lt;map&gt;</code> tag.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;map&gt;</code></h4>
		<dl>
			<dt><code>name</code></dt>
			<dd>&#10551; Defines the name of the image map. This tag is required.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;area&gt;</code></h4>
		<dl>
			<dt><code>alt</code></dt>
			<dd>&#10551; Defines alternative text for the area, to be displayed if the image is incapable of loading for some reason.</dd>
			<dt><code>coords</code></dt>
			<dd>&#10551; Coordinates for the corners or points of the area, separated by a comma. How many are needed depends on <code>shape</code>: <code>default</code> does not need coordinates, <code>rect</code> requires a top left corner and bottom right corner, <code>circle</code> requires a center point and a radius, and <code>poly</code> may have as many points as desired to form its shape. All coordinates are measured in pixels, counting up from 0,0 at the top left, and each point requires both an x (horizontal) and y (vertical) coordinate.</dd>
			<dt><code>download</code></dt>
			<dd>&#10551; If present, specifies that the target of a hyperlink will be downloaded when the user clicks it.</dd>
			<dt><code>href</code></dt>
			<dd>&#10551; Specifies the URL of content that will be linked to.</dd>
			<dt><code>hreflang</code></dt>
			<dd>&#10551; Specifies the language of content being linked to, using standard <a href="http://www.w3schools.com/tags/ref_language_codes.asp">ISO language codes</a>.</dd>
			<dt><code>media</code></dt>
			<dd>&#10551; Specifies which media and/or device linked content is optimized for; see <a href="http://www.w3schools.com/tags/att_a_media.asp">here</a> for accepted values.
			<dt><code>rel</code></dt>
			<dd>
				&#10551; Specifies how the current page relates to linked content. 
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
			<dt><code>shape</code></dt>
			<dd>
				&#10551; Defines the shape of the area.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>default</code></dt>
						<dd>&#10551; The area will be the default. Any click not aimed at another defined area will be directed here.</dd>
						<dt><code>rect</code></dt>
						<dd>&#10551; A rectangular area.</dd>
						<dt><code>circle</code></dt>
						<dd>&#10551; A circular area.</dd>
						<dt><code>poly</code></dt>
						<dd>&#10551; An arbitrary polygon with a number of points determined by the number of coordinates entries.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>target</code></dt>
			<dd>
				&#10551; Specifies where linked content should be opened. 
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
