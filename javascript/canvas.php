<?php
	$PAGE_NAME = 'Canvas';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>While most HTML elements can have their utility on a page augmented by the use of Javascript, and some are designed specifically for this purpose, <code>&lt;canvas&gt;</code> is the only one which outright requires the use of JavaScript to work at all. Its functionality is unique and extensive, effectively providing web developers with access to in-browser rendering without the need to resort to external plugins such as Flash. Below are detailed the methods and properties for using a canvas to draw 2d graphics; note that these are properties and methods of the context object produced by the <code><var>canvas</var>.getContext(2d)</code> method, <em>not</em> of the canvas itself.</p>
		<p>Another important thing to keep in mind with canvases is that all properties which function as settings do not work like CSS values, they will only apply to future drawing and changing them will not affect things currently on the canvas. Likewise, if a video is rendered to the canvas, it will not be capable of autoplaying but will have to be continually re-rendered due to canvases never automatically updating themselves without script input. Lastly, if at any point an image, video, or content of any kind is drawn to the canvas from another domain, the canvas will become "dirty"; a security concept to prevent cross-domain attacks which prevents dirty canvases from being read from. They may still be written to, but all attempts to read the data via script will fail.</p>
	</section>
	<section>
		<h4>Canvas Type Methods:</h4>
		<dl>
			<dt><code>getContext()</code></dt>
			<dd>Accepts a string containing a context identifier, and may also accept an object containing context attributes and their values. Returns a drawing context object of the specified type, with the specified attributes (if any); this is a <code>&lt;canvas&gt;</code> element method. For purposes covered here, the context identifier should be <code>'2d'</code>, though other values are possible. The only standard attribute 2d contexts may have is <code>alpha</code>, which may be set to <code>false</code> if a transparency layer is not needed - this will make images with transparency draw faster, since the transparency information can now be ignored.</dd>
		</dl>
	</section>
	<section>
		<h3>2d Context Type Properties</h3>
		<h4>Colors, Styles, and Shadows:</h4>
		<dl>
			<dt><code>fillStyle</code></dt>
			<dd>The CSS color value, gradient object, or pattern object used for fill methods. Defaults to <code>#000000</code>, pure black.</dd>
			<dt><code>shadowBlur</code></dt>
			<dd>The blur value to use for shadows.</dd>
			<dt><code>shadowColor</code></dt>
			<dd>The CSS color value to use for shadows.</dd>
			<dt><code>shadowOffsetX</code></dt>
			<dd>The horizontal offset value to use for shadows. Positive values result in a right offset, while negative values result in a left offset.</dd>
			<dt><code>shadowOffsetY</code></dt>
			<dd>The vertical offset value to use for shadows. Positive values result in a lowered offset, while negative values result in a raised offset.</dd>
			<dt><code>strokeStyle</code></dt>
			<dd>The CSS color value, gradient object, or pattern object used for the color of strokes (things drawn on the canvas that are not images, such as lines, curves, or text), if any.</dd>
		</dl>
		<h4>Compositing:</h4>
		<dl>
			<dt><code>globalAlpha</code></dt>
			<dd>The global transparency value for everything drawn to the context, with <code>1</code> being fully opaque and <code>0</code> being fully transparent.</dd>
			<dt><code>globalCompositeOperation</code></dt>
			<dd>
				How source (new) images are drawn over destination (existing) images.
				<details>
					<summary>Possible values:</summary>
					<dl>
						<dt><code>copy</code></dt>
						<dd>Removes the destination image and displays only the source image.</dd>
						<dt><code>destination-atop</code></dt>
						<dd>Displays only the part of the destination image that overlaps the source image.</dd>
						<dt><code>destination-in</code></dt>
						<dd>Removes the source image and the part of the destination image that didn't overlap it.</dd>
						<dt><code>destination-out</code></dt>
						<dd>Removes the destination image and the part of the destination image that overlapped it.</dd>
						<dt><code>destination-over</code></dt>
						<dd>Displays destination images over source images.</dd>
						<dt><code>lighter</code></dt>
						<dd>Uses color value combining to display both images merged with each other.</dd>
						<dt><code>source-atop</code></dt>
						<dd>Displays only the part of the source image that overlaps the destination image.</dd>
						<dt><code>source-in</code></dt>
						<dd>Removes the destination image and the part of the source image that didn't overlap it.</dd>
						<dt><code>source-out</code></dt>
						<dd>Removes the destination image and the part of the source image that overlapped it.</dd>
						<dt><code>source-over</code></dt>
						<dd>The default value; displays source images over destination images.</dd>
						<dt><code>xor</code></dt>
						<dd>Uses an exclusive OR comparison to draw only the parts of the source and destination image that do not overlap.</dd>
					</dl>
				</details>
			</dd>
		</dl>
		<h4>Line Styles:</h4>
		<dl>
			<dt><code>lineCap</code></dt>
			<dd>
				The style of the end caps for lines.
				<details>
					<summary>Possible values:</summary>
					<dl>
						<dt><code>butt</code></dt>
						<dd>The default value; lines end with flat edges.</dd>
						<dt><code>round</code></dt>
						<dd>Lines end with rounded caps.</dd>
						<dt><code>square</code></dt>
						<dd>Lines end with square caps.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>lineJoin</code></dt>
			<dd>
				The type of corner created when two lines meet.
				<details>
					<summary>Possible values:</summary>
					<dl>
						<dt><code>bevel</code></dt>
						<dd>A beveled corner.</dd>
						<dt><code>miter</code></dt>
						<dd>The default value; a sharp corner.</dd>
						<dt><code>round</code></dt>
						<dd>A rounded corner.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>lineWidth</code></dt>
			<dd>The width of lines, in pixels; defaults to <code>1</code>.</dd>
			<dt><code>miterLimit</code></dt>
			<dd>The maximum allowed distance between the inner corner and outer corner of lines joined using the <code>miter</code> value of <code>lineJoin</code>; defaults to <code>10</code>. If a miter join would exceed this value, it will use the <code>bevel</code> style instead.</dd>
		</dl>
		<h4>Text</h4>
		<dl>
			<dt><code>font</code></dt>
			<dd>The font properties for canvas text. Accepts values identical to those of the CSS <code><a href="/css/font.php">font</a></code> property.</dd>
			<dt><code>textAlign</code></dt>
			<dd>
				The alignment for text relative to its anchor point, where the text line emerges from. Note that some values seem redundant, but that this is related to right-to-left text directionality.
				<details>
					<summary>Possible values:</summary>
					<dl>
						<dt><code>center</code></dt>
						<dd>Text lines center on the anchor point.</dd>
						<dt><code>end</code></dt>
						<dd>Text lines end at the anchor point.</dd>
						<dt><code>left</code></dt>
						<dd>Text lines begin at the anchor point.</dd>
						<dt><code>right</code></dt>
						<dd>Text lines end at the anchor point.</dd>
						<dt><code>start</code></dt>
						<dd>The default value; text lines begin at the anchor point.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>textBaseline</code></dt>
			<dd>
				How text positions itself relative to its baseline position.
				<details>
					<summary>Possible values:</summary>
					<dl>
						<dt><code>alphabetic</code></dt>
						<dd>The default value; text is positioned according to Roman alphabetical standards.</dd>
						<dt><code>bottom</code></dt>
						<dd>Text is positioned at the bottom of the bounding box.<dd>
						<dt><code>hanging</code></dt>
						<dd>Text is positioned below the baseline so that the tops of letters are inside it.</dd>
						<dt><code>ideographic</code></dt>
						<dd>Text is positioned according to ideographic glyph standards.</dd>
						<dt><code>middle</code></dt>
						<dd>Text is positioned centered on the baseline.</dd>
						<dt><code>top</code></dt>
						<dd>Text is positioned at the top of the em square.</dd>
					</dl>
				</details>
			</dd>
		</dl>
	</section>
	<section>
		<h3>2d Context Type Methods</h3>
		<h4>Colors and Styles:</h4>
		<dl>
			<dt><code>createLinearGradient()</code></dt>
			<dd>Accepts four arguments, representing the x and y beginning coordinates of the gradient, and the x and y end coordinates of the gradient, respectively. Creates and returns a linear gradient object.</dd>
			<dt><code>createPattern()</code></dt>
			<dd>
				Accepts two arguments, an image or video to be repeated indefinitely, and a repeat style (as a string).
				<details>
					<summary>Possible values:</summary>
					<dl>
						<dt><code><var>image</var></code></dt>
						<dd>The image to be repeated. This may be an image, a video, or another <code>&lt;canvas&gt;</code>, and may be an element or the appropriate kind of file.</dd>
						<dt><code>no-repeat</code></dt>
						<dd>The pattern will only be drawn once, and not repeat.</dd>
						<dt><code>repeat</code></dt>
						<dd>The default value; the pattern will repeat horizontally and vertically.</dd>
						<dt><code>repeat-x</code></dt>
						<dd>The pattern will repeat horizontally, but not vertically.</dd>
						<dt><code>repeat-y</code></dt>
						<dd>The pattern will repeat vertically, but not horizontally.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>createRadialGradient()</code></dt>
			<dd>Accepts six arguments, representing the x and y coordinates and radius of the starting circle, and the x and y coordinates and radius of the ending circle and its radius. Creates and returns a radial gradient object.</dd>
		</dl>
		<h4>Image Drawing</h4>
		<dl>
			<dt><code>drawImage()</code></dt>
			<dd>
				Draws an image, video, or another <code>&lt;canvas&gt;</code> into the context.
				<details>
					<summary>Possible values:</summary>
					<dl>
						<dt><code>img</code></dt>
						<dd>The image, video, or canvas to use. These may be elements or the appropriate kind of file.</dd>
						<dt><code>sx</code></dt>
						<dd>Optional; the x coordinate on the source image to begin clipping.</dd>
						<dt><code>sy</code></dt>
						<dd>Optional; the y coordinate on the source image to begin clipping.</dd>
						<dt><code>swidth</code></dt>
						<dd>Optional; the width of the rendered clipped image.</dd>
						<dt><code>sheight</code></dt>
						<dd>Optional; the height of the rendered clipped image.</dd>
						<dt><code>x</code></dt>
						<dd>The x coordinate in the context for the image's left edge to be placed.</dd>
						<dt><code>y</code></dt>
						<dd>The y coordinate in the context for the image's top edge to be placed.</dd>
						<dt><code>width</code></dt>
						<dd>Optional; the width of the rendered image (the source image will be stretched to this value, if necessary).</dd>
						<dt><code>height</code></dt>
						<dd>Optional; the height of the rendered image (the source image will be stretched to this value, if necessary).</dd>
					</dl>
				</details>
			</dd>
		</dl>
		<h4>Paths:</h4>
		<dl>
			<dt><code>arc()</code></dt>
			<dd>Accepts five arguments; x and y pixel coordinates for the center of the circle, the radius of the circle, the starting angle in radians (<code>0</code> is the rightmost part of the circle), the ending angle in radians (note that <code>0</code> and <code>2 * Math.PI</code> respectively will create a perfect circle), and may also accept a <code>true</code> boolean value indicating the circle should be drawn counterclockwise. Adds a circle or partial circle to the path.</dd>
			<dt><code>arcTo()</code></dt>
			<dd>Accepts five arguments; x and y pixel coordinates for the beginning point, x and y pixel coordinates for the ending point, and the radius of the arc. Adds a curve between two specific points to the path.</dd>
			<dt><code>beginPath()</code></dt>
			<dd>Begins a new path (mathematically-instructed line drawings), or resets the current path. This should precede the use of most path control methods in the script, to ensure new paths behave as expected. Note that nothing added to the path will actually be drawn until the <code>stroke()</code> method is used.</dd>
			<dt><code>bezierCurveTo()</code></dt>
			<dd>Accepts six pixel coordinates in its argument, x and y coordinates for the first control point, x and y coordinates for the second control point, and x and y coordinates for the ending point. Adds a cubic bezier curve to the path between the current path location and the ending point; a cubic bezier curve being an equation using four points, the first and last being starting and ending points for the curve, the second and third being control points. A line is drawn between 1 and 4, then the line curves towards point 2 until it reaches equidistance between the beginning and ending points. Then, the curve repeats the process, curving towards 3 in the same way, then eventually reaching 4 without actually reaching 2 or 3.</dd>
			<dt><code>clip()</code></dt>
			<dd>Restricts future drawing operations to within the area currently occupied by the path.</dd>
			<dt><code>closePath()</code></dt>
			<dd>Adds a straight line between the current path location and its origin point. If the two are the same coordinate, no line is drawn.</dd>
			<dt><code>fill()</code></dt>
			<dd>Fills the context according to the contents of the <code>fillStyle</code> property.</dd>
			<dt><code>isPointInPath()</code></dt>
			<dd>Accepts x and y pixel coordinates in its argument, and returns <code>true</code> if that location is a point within the current path, otherwise, it returns <code>false</code>.</dd>
			<dt><code>lineTo()</code></dt>
			<dd>Accepts x and y pixel coordinates in its argument. Draws a straight line between the current path location and the specified coordinates.</dd>
			<dt><code>moveTo()</code></dt>
			<dd>Accepts two pixel coordinates in its argument, specifically x and y within the context, and moves the origin point of new path methods to that point in the context. This should be the second method used in the creation of any path, otherwise the path has no origin point and will not draw.</dd>
			<dt><code>quadraticCurveTo()</code></dt>
			<dd>Accepts four pixel coordinates in its argument, x and y coordinates for the control point, and x and y coordinates for the ending point. Adds a quadratic bezier curve to the path between the current path location and the ending point, curving towards the control point to determine its shape.</dd>
			<dt><code>stroke()</code></dt>
			<dd>Draws the currently defined path to the context.</dd>
		</dl>
		<h4>Pixel Manipulation:</h4>
		<dl>
			<dt><code>createImageData()</code></dt>
			<dd>Creates and returns a new, blank <code>imageData</code> object; see below for details on its properties.</dd>
			<dt><code>getImageData()</code></dt>
			<dd>Accepts four arguments, the x and y coordinates of the upper left corner of the context area to be copied, and the total width and height of the area to be copied. Copies a section of the context to an <code>imageData</code> object and returns it.</dd>
			<dt><code>putImageData()</code></dt>
			<dd>
				Draws an <code>imageData</code> into the context. Optionally, select an area within the <code>imageData</code> to display instead of the entire thing.
				<details>
					<summary></summary>
					<dl>
						<dt><code>imgData</code></dt>
						<dd>The <code>imageData</code> object to draw.</dd>
						<dt><code>x</code></dt>
						<dd>The horizontal coordinate in the context where the left edge of the <code>imageData</code> object should be placed.</dd>
						<dt><code>y</code></dt>
						<dd>The vertical coordinate in the context where the top edge of the <code>imageData</code> object should be placed.</dd>
						<dt><code>rawX</code></dt>
						<dd>Optional; the horizontal coordinate within the <code>imageData</code> object where the left edge of the drawn data begins.</dd>
						<dt><code>rawY</code></dt>
						<dd>Optional; the vertical coordinate within the <code>imageData</code> object where the top edge of the drawn data begins.</dd>
						<dt><code>rawWidth</code></dt>
						<dd>Optional; the width of the area within the <code>imageData</code> object that data should be drawn from.</dd>
						<dt><code>rawHeight</code></dt>
						<dd>Optional; the height of the area within the <code>imageData</code> object that data should be drawn from.</dd>
					</dl>
				</details>
			</dd>
		</dl>
		<h4>Rectangles:</h4>
		<p>Note: while rectangles are their own category of context operations, they also count as paths, including the fact that rectangle methods move the current path location to their top left corners, and count towards the boundaries of <code>clip()</code>.
		<dl>
			<dt><code>clearRect()</code></dt>
			<dd>Accepts four arguments, x and y pixel coordinates for the top left corner of the rectangle, and width and height pixel sizes of the rectangle. Clears a rectangular space within the context.</dd>
			<dt><code>fillRect()</code></dt>
			<dd>Accepts four arguments, x and y pixel coordinates for the top left corner of the rectangle, and width and height pixel sizes of the rectangle. Creates a filled rectangle in the context.</dd>
			<dt><code>rect()</code></dt>
			<dd>Accepts four arguments, x and y pixel coordinates for the top left corner of the rectangle, and width and height pixel sizes of the rectangle. Creates a hollow rectangle in the context.</dd>
			<dt><code>strokeRect()</code></dt>
			<dd>Accepts four arguments, x and y pixel coordinates for the top left corner of the rectangle, and width and height pixel sizes of the rectangle. Creates a hollow rectangle in the context using the <code>strokeStyle</code> property to draw its edges.</dd>
		</dl>
		<h4>Text:</h4>
		<dl>
			<dt><code>fillText()</code></dt>
			<dd>Accepts three arguments, the text to be written as a string, x and y coordinates for the top left corner of the text area (note that due to baselines and alignment, this often isn't an upper left boundary exactly), and may also accept a pixel measurement limiting the final width of the text in the context. Draws filled text to the canvas.</dd>
			<dt><code>measureText()</code></dt>
			<dd>Accepts a text string in its argument, and returns (in pixels) what the width of that text string would be if drawn to the context using the current text properties.</dd>
			<dt><code>strokeText()</code></dt>
			<dd>Accepts three arguments, the text to be written as a string, x and y coordinates for the top left corner of the text area (note that due to baselines and alignment, this often isn't an upper left boundary exactly), and may also accept a pixel measurement limiting the final width of the text in the context. Draws hollow text to the canvas.</dd>
		</dl>
		<h4>Transformations:</h4>
		<dl>
			<dt><code>rotate()</code></dt>
			<dd>Accepts a rotation angle in radians in its argument (if you wish to use standard 0-360 angles, this may be accomplished with <code><var>degrees</var>*Math.PI/180</code>), and rotates the drawing context by that amount.</dd>
			<dt><code>scale()</code></dt>
			<dd>Accepts two numbers in its argument to control width and height of the scale transformation (<code>1</code> representing 100% of normal size), and scales the drawing context to that size, from the top left.</dd>
			<dt><code>setTransform()</code></dt>
			<dd>Accepts 6 numbers in its argument, used for horizontal scale, horizontal skew (positive values raise the left side of the context and lower the left side, while negative values do the inverse), vertical skew (positive values move the top of the context left and the bottom right while negative values do the inverse), vertical scale, horizontal translation, and vertical translation, respectively. Replaces the current transformation matrix with those values, which override other transformations already in effect.</dd>
			<dt><code>transform()</code></dt>
			<dd>As <code>setTransform()</code>, except the new values stack additively with other transformations already in effect.</dd>
			<dt><code>translate()</code></dt>
			<dd>Accepts two numbers in its argument, and adds or subtracts those numbers from the current x and y (respectively) coordinates of the drawing context, moving its location.</dd>
		</dl>
		<h4>Other:</h4>
		<dl>
			<dt><code>restore()</code></dt>
			<dd>Restores the context to the state it was in at the time the <code>save()</code> method was used. Note that this does not affect the context's contents, only how it is set up for future draw methods.</dd>
			<dt><code>save()</code></dt>
			<dd>Saves the current drawing state of the context, i.e. the states and values which currently govern future drawing.</dd>
			<dt><code>toDataURL()</code></dt>
			<dd>Can accept up to two arguments, a string indicating image format (which defaults to <code>'image/png'</code>), and a number between 0 and 1 indicating image quality for <code>'image/jpeg'</code> and <code>'image/webp'</code>. Returns a data URI containing the current render state of the canvas, converted into the specified image type and quality. The return value can also be used for methods requiring a source image.</dd>
		</dl>
	</section>
	<section>
		<h4><code>linearGradient</code> and <code>radialGradient</code> Type Methods:</h4>
		<dl>
			<dt><code>addColorStop()</code></dt>
			<dd>Accepts two arguments, a value between <code>0</code> and <code>1</code> representing a percentage of the gradient, and a CSS color value.</dd>
		</dl>
	</section>
	<section>
		<h4><code>ImageData</code> Type Properties:</h4>
		<dl>
			<dt><code>data</code></dt>
			<dd>An array which contains four entries for each pixel within the object, specifically its red, green, blue, and transparency values, from <code>0</code> to <code>255</code>.</dd>
			<dt><code>height</code></dt>
			<dd>The object's height, in pixels.</dd>
			<dt><code>width</code></dt>
			<dd>The object's width, in pixels.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
