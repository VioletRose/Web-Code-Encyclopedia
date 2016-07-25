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
			<dt><code><var>color</var> <var>image</var> <var>position</var>/<var>size</var> <var>repeat</var> <var>origin<var> <var>clip</var> <var>attachment</var></code></dt>
			<dd>
				&#10551; The values that would normally be set through the associated, non-shorthand background properties, in this order. If both position and size are being defined, due to them both using numeric variables they must be separated by a / character.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>color</var></code></dt>
						<dd>&#10551; Optional. The value of <code>background-color</code>.</dd>
						<dt><code><var>image</var></code></dt>
						<dd>&#10551; Optional. The value of <code>background-image</code>.</dd>
						<dt><code><var>position</var></code></dt>
						<dd>&#10551; Optional/required if <code><var>size</var></code> is defined. The value of <code>background-position</code>.</dd>
						<dt><code><var>size</var></code></dt>
						<dd>&#10551; Optional. The value of <code>background-size</code>. If used alongside <code><var>position</var></code>, the two must be separated with a /.</dd>
						<dt><code><var>repeat</var></code></dt>
						<dd>&#10551; Optional. The value of <code>background-repeat</code>.</dd>
						<dt><code><var>origin</var></code></dt>
						<dd>&#10551; Optional. The value of <code>background-origin</code>.</dd>
						<dt><code><var>clip</var></code></dt>
						<dd>&#10551; Optional. The value of <code>background-clip</code>.</dd>
						<dt><code><var>attachment</var></code></dt>
						<dd>&#10551; Optional. The value of <code>background-attachment</code>.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>background-color</code>:</h4>
		<dl>
			<dt><code><var>color</var></code></dt>
			<dd>&#10551; Color variable. The color of the background.</dd>
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
			<dt><code>url(<var>URL</var>)</code></dt>
			<dd>&#10551; An image will be used as the background. <code><var>URL</var></code> is a text variable, URLs only. Multiple images may be set, separated by a comma and a space.</dd>
			<dt><code>linear-gradient(<var>direction</var>, <var>color</var> <var>range</var>, <var>color</var> <var>range</var>)</code></dt>
			<dd>
				&#10551; A linear gradient, colors beginning at one edge and fading from one to another until reaching the other edge, instead of an image. At least two colors are required for a gradient, but there is no hard limit to the number of additional colors that can be defined.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>direction</var></code></dt>
						<dd>&#10551; Optional, numeric/text variable, defaults to <code>to bottom</code>. A specific angle of rotation (with 0 equivalent to <code>to top</code>), formatted as <code><var>number</var>deg</code>, or <code>to</code> and a space followed by any combination of <code>bottom</code>, <code>left</code>, <code>right</code>, or <code>top</code>.
						<dt><code><var>color</var></code></dt>
						<dd>&#10551; Required, color variable.</dd>
						<dt><code><var>range</var></code></dt>
						<dd>&#10551; Optional, numeric variable, in measurements. Defines where the preceding color begins within the gradient, except for the last color in the gradient where it defines the gradient's end point, past which the last color will continue, flat, to the edge of the background. Colors without a set <code><var>range</var></code> will attempt to occupy equal amounts of the remaining space.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>repeating-linear-gradient(<var>direction</var>, <var>color</var> <var>range</var>, <var>color</var> <var>range</var>)</code></dt>
			<dd>&#10551; Almost identical to <code>linear-gradient</code>, using the same variables, the only difference being that if the final color is ended before <code><var>100%</var></code>, instead of it continuing to fill all remaining space, the gradient will repeat itself equally as many times as it has space to.</dd>
			<dt><code>radial-gradient(<var>shape</var>, <var>size</var>, at <var>x-coord</var> <var>y-coord</var>, <var>color</var> <var>range</var>, <var>color</var> <var>range</var>)</code></dt>
			<dd>
				&#10551; A radial gradient, colors beginning at the center and fading from one to another until reaching the edges, instead of an image. At least two colors are required for a gradient, but there is no hard limit to the number of additional colors that can be defined.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>shape</var></code></dt>
						<dd>&#10551; Optional, text variable, defaults to <code>ellipse</code>. May be <code>ellipse</code> or <code>circle</code>, the difference being that <code>ellipse</code> will retain the aspect ratio of the containing element, while <code>circle</code> will always be circular.</dd>
						<dt><code><var>size</var></code></dt>
						<dd>&#10551; Optional, text variable, defaults to <code>farthest-corner</code>. Defines how large the gradient is, via which edge of the containing element it will reach from its starting point before ceasing to expand, the <code>closest-side</code>, <code>farthest-side</code>, <code>closest-corner</code>, or <code>farthest-corner</code>.</dd>
						<dt><code>at <var>x-coord</var></code></dt>
						<dd>&#10551; Optional/required if <code><var>y-coord</var></code> is defined, numeric variable, in measurements, defaults to 50%. The horizontal coordinate of the gradient's center.</dd>
						<dt><code><var>y-coord</var></code></dt>
						<dd>&#10551; Optional, numeric variable, in measurements, defaults to 50%. The vertical coordinate of the gradient's center.</dd>
						<dt><code><var>color</var></code></dt>
						<dd>&#10551; Required, color variable.</dd>
						<dt><code><var>range</var></code></dt>
						<dd>&#10551; Optional, numeric variable, in measurements or percentage of space between the gradient's center and its edge. Defines where the preceding color begins within the gradient, except for the last color in the gradient where it defines the gradient's end point, past which the last color will continue, flat, to the edge of the background. Colors without a set <code><var>range</var></code> will attempt to occupy equal amounts of the remaining space.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>repeating-radial-gradient(<var>shape</var>, <var>size</var>, at <var>x-coord</var> <var>y-coord</var>, <var>color</var> <var>range</var>, <var>color</var> <var>range</var>)</code></dt>
			<dd>&#10551; Almost identical to <code>radial-gradient</code>, using the same variables, the only difference being that if the final color is ended before <code>100%</code>, instead of it continuing to fill all remaining space, the gradient will repeat itself equally as many times as it has space to.</dd>
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
			<dt><code><var>x-coordinate y-coordinate</var></code></dt>
			<dd>
				&#10551; Defines the placement of the top left corner of the background image.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x-coord</var></code></dt>
						<dd>&#10551; Required, numeric/text variable, in measurements or <code>bottom</code>, <code>left</code>, <code>right</code>, or <code>top</code>, defaults to 0%. The horizontal coordinate of the image's top left corner.</dd>
						<dt><code><var>y-coord</var></code></dt>
						<dd>&#10551; Optional, numeric/text variable, in measurements or <code>bottom</code>, <code>left</code>, <code>right</code>, or <code>top</code>, defaults to 0%. The vertical coordinate of the image's top left corner.</dd>
					</dl>
				</details>
			</dd>
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
			<dt><code><var>width</var> <var>height</var></code></dt>
			<dd>
				&#10551; Defines the width and height of the image.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>width</var></code></dt>
						<dd>&#10551; Required, numeric variable, in measurements or percentages of the source file's width. The background image's width.</dd>
						<dt><code><var>height</var></code></dt>
						<dd>&#10551; Optional, numeric/text variable, in measurements or percentages of the source file's height. The background image's height.</dd>
					</dl>
				</details>
			</dd>
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
