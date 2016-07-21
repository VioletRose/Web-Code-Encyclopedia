<?php
    $PAGE_NAME = '&lt;map&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag creates an image map, which defines clickable areas inside of a single displayed image, each area having a different effect when clicked, either different link URLs or Javascript commands.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;img src="/images/examplemap.png" width="602" height="200" alt="Example Map" usemap="#examplemap"&gt;
				<br>
				&lt;map name="examplemap"&gt;
				<br>
				&lt;area alt="Default" href="javascript:alert('You clicked the default region!')" shape="default"&gt;
				<br>
				&lt;area alt="Rectangle" coords="50,50,150,150" href="javascript:alert('You clicked the rectangle!')" shape="rect"&gt;
				<br>
				&lt;area alt="Circle" coords="301,100,51" href="javascript:alert('You clicked the circle!')" shape="circle"&gt;
				<br>
				&lt;area alt="Polygon" coords="480,54,507,59,530,72,543,112,541,140,511,142,477,126,457,106,460,71," href="javascript:alert('You clicked the polygon!')" shape="poly"&gt;
				<br>
				&lt;/map&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<img src="/images/examplemap.png" width="602" height="200" alt="Example Map" usemap="#examplemap">
			<map name="examplemap">
				<area alt="Default" href="javascript:alert('You clicked the default region!')" shape="default">
				<area alt="Rectangle" coords="50,50,150,150" href="javascript:alert('You clicked the rectangle!')" shape="rect">
				<area alt="Circle" coords="301,100,51" href="javascript:alert('You clicked the circle!')" shape="circle">
				<area alt="Polygon" coords="480,54,507,59,530,72,543,112,541,140,511,142,477,126,457,106,460,71," href="javascript:alert('You clicked the polygon!')" shape="poly">
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
			<dd>&#10551; Coordinates for the corners or points of the area, separated by a comma. How many are needed depends on <code>shape</code>: <code>default</code> does not need coordinates, <code>rect</code> requires a top left corner and bottom right corner, <code>circle</code> requires a center point and a radius (half the size of the full circle), and <code>poly</code> may have as many points as desired to form its shape. All coordinates are measured in pixels, counting up from 0,0 at the top left, and each point requires both an x (horizontal) and y (vertical) coordinate.</dd>
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
						<dt><code><var>framename</var></code></dt>
						<dd>&#10551; When <code><var>framename</var></code> is replaced with the name of a valid frame, will open the content in that frame.</dd>
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
