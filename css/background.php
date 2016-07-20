<?php
    $PAGE_NAME = 'background';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the sub-properties it sets allow you to define and control what appears in the page's background, i.e. behind the visible elements. This can be colors, images, or both blended together.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;style&gt;
				<br>
				#backgroundBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;background: black url(/images/violetflower.png) 6px 17px repeat fixed;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;height: 147px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;width: 93px;
				<br>
				}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="backgroundBox"&gt;&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				#backgroundBox {
					background: black url(/images/violetflower.png) 6px 17px repeat fixed;
					height: 147px;
					width: 93px;
				}
			</style>
			<div id="backgroundBox"></div>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>background</code></h4>
		<dl>
			<dt><code>background-color</code></dt>
			<dd>&#10551; Defines the background color for the element.</dd>
			<dt><code>background-image</code></dt>
			<dd>&#10551; Defines a background image for the element.</dd>
			<dt><code>background-position</code></dt>
			<dd>&#10551; Defines the position of the background image within the element.</dd>
			<dt><code>background-size</code></dt>
			<dd>&#10551; Defines the size of the background image.</dd>
			<dt><code>background-repeat</code></dt>
			<dd>&#10551; Specifies if/how the background image should be repeated if it is smaller than the space it covers.</dd>
			<dt><code>background-origin</code></dt>
			<dd>&#10551; Defines whether the background starts at the edge of the element's border, padding, or content. Note that if <code>background-attachment</code> is set to <code>fixed</code>, this will not have any visible effect.</dd>
			<dt><code>background-clip</code></dt>
			<dd>&#10551; Defines whether the background cuts off beyond the edges of the element's border, padding, or content.</dd>
			<dt><code>background-attachment</code></dt>
			<dd>&#10551; Defines how the background scrolls along with the page.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>background</code>:</h4>
		<dl>
			<dt><code><i> color image position/size repeat origin clip attachment</i></code></dt>
			<dd>&#10551; The values that would normally be set through the associated, non-shorthand background properties, in this order. If both position and size are being defined, due to them both accepting numeric values they must be separated by a / character. Additionally, it is possible to set multiple background images, but if this is done, color must be placed last rather than first. Most sub-values may be omitted.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>background-color</code>:</h4>
		<dl>
			<dt><code><i>color</i></code></dt>
			<dd>&#10551; The color of the background.</dd>
			<dt><code>transparent</code></dt>
			<dd>&#10551; The default value. A transparent background.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>background-image</code>:</h4>
		<dl>
			<dt><code>url(<i>URL</i>)</code></dt>
			<dd>&#10551; The inner <i>URL</i> as the URL of the image to be used as the background. Multiple images may be set, separated by a comma and a space.</dd>
			<dt><code>none</code></dt>
			<dd>&#10551; The default value. No background image.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>background-position</code>:</h4>
		<dl>
			<dt><code><i>x-coordinate y-coordinate</i></code></dt>
			<dd>&#10551; The default value is 0% 0%. Defines the placement of the top left corner of the image. Accepts values in the form of <code>left top</code>, <code>bottom right</code>, <code>center center</code> (and combinations thereof), percentages of the element's size (with 0% 0% being the top left), and specific coordinates in any CSS unit. If only the first coordinate is defined, the second will be <code>center</code>.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>background-size</code>:</h4>
		<dl>
			<dt><code>auto</code></dt>
			<dd>&#10551; The default value. The image's size will be unchanged from the source file.</dd>
			<dt><code><i>width</i> <i>height</i></code></dt>
			<dd>&#10551; Defines the width and height of the image, in any CSS unit. If only the <i>width</i> is defined, the <i>height</i> will be <code>auto</code></dd>
			<dt><code>cover</code></dt>
			<dd>&#10551; The background image will be scaled to cover the entire area. This may result in some of the image being cut off by the edges of the element.</dd>
			<dt><code>contain</code></dt>
			<dd>&#10551; The background image will be scaled to the maximum size that fits within the area.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>background-repeat</code>:</h4>
		<dl>
			<dt><code>repeat</code></dt>
			<dd>&#10551; The default value. The background image repeats horizontally and vertically if it does not fill the element's space.</dd>
			<dt><code>repeat-x</code></dt>
			<dd>&#10551; The background image only repeats horizontally.</dd>
			<dt><code>repeat-y</code></dt>
			<dd>&#10551; The background image only repeats vertically.</dd>
			<dt><code>no-repeat</code></dt>
			<dd>&#10551; The background image doesn't repeat.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>background-origin</code>:</h4>
		<dl>
			<dt><code>border-box</code></dt>
			<dd>&#10551; The background starts at the upper left corner of the border's edge.</dd>
			<dt><code>content-box</code></dt>
			<dd>&#10551; The background starts at the upper left corner of the content's edge.</dd>
			<dt><code>padding-box</code></dt>
			<dd>&#10551; The default value. The background starts at the upper left corner of the padding's edge.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>background-clip</code>:</h4>
		<dl>
			<dt><code>border-box</code></dt>
			<dd>&#10551; The default value. The background is clipped (cut off beyond) to the edges of the border.</dd>
			<dt><code>content-box</code></dt>
			<dd>&#10551; The background is clipped to the edges of the content.</dd>
			<dt><code>padding-box</code></dt>
			<dd>&#10551; The background is clipped to the edges of the padding.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>background-attachment</code>:</h4>
		<dl>
			<dt><code>scroll</code></dt>
			<dd>&#10551; The default value. The background image remains stationary relative to the webpage, allowing the browser to scroll across it.</dd>
			<dt><code>fixed</code></dt>
			<dd>&#10551; The background image is fixed to the same position within the browser, and will follow as the user scrolls.</dd>
			<dt><code>local</code></dt>
			<dd>&#10551; The background image remains stationary when the page as a whole is scrolled, but moves to follow scrolling inside of its own element.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
