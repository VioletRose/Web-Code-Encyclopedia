<?php
    $PAGE_NAME = 'border-image';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <a href="/css/border.php"><code>border</code></a></p>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the sub-properties it sets allow you to apply an image to a border. This property is quite finicky and unusual, and there are a number of things you will need to keep in mind to ensure proper results. The final look will be very inconsistent if the image you choose isn't formatted properly for use as a border or frame; the optimal design is a perfectly square image, with an amount of white space in the center equal to the width of the borders. Also, the logic the web browser employs to process the image is quite complex, so some amount of experimentation will always be required to achieve the desired look. This property must be set <strong>after</strong> <code>border</code> is. Finally, setting this property doesn't cause the original border not to display, so in order to work properly, the standard border must be set to transparent.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#borderImageBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: 13px solid transparent;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-image: url(/images/border.png) 20% round;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding: 8px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#borderImageBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-image-slice: 20% fill;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="borderImageBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;This is the original border image: &lt;img src="/images/border.png"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Note how heavily altered it is by the process of turning it into a border, and the complex transformation involved.
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				#borderImageBox {
					border: 13px solid transparent;
					border-image: url(/images/border.png) 20% round;
					padding: 8px;
				}
				#borderImageBox:hover {
					border-image-slice: 20% fill;
				}
			</style>
			<div id="borderImageBox">
				This is the original border image: <img src="/images/border.png">
				<br>
				Note how heavily altered it is by the process of turning it into a border, and the complex transformation involved. Mouse over this area for additional oddness!
			</div>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>border-image</code>:</h4>
		<dl>
			<dt><code>border-image-source</code></dt>
			<dd>&#10551; Specifies the image to use as a border.</dd>
			<dt><code>border-image-slice</code></dt>
			<dd>&#10551; Defines if and how the border image will be sliced (effectively cropped in reverse, from the inside) into corner and edge pieces.</dd>
			<dt><code>border-image-width</code></dt>
			<dd>&#10551; Defines the width of the image borders.</dd>
			<dt><code>border-image-outset</code></dt>
			<dd>&#10551; Defines if and how far the border image will exceed the size of the border.</dd>
			<dt><code>border-image-repeat</code></dt>
			<dd>&#10551; Defines how the border image is made to fit a non-square object.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>border-image</code>:</h4>
		<dl>
			<dt><code><var>source</var> <var>slice</var> <var>width</var> <var>outset</var> <var>repeat</var></code></dt>
			<dd>
				&#10551; The values that would normally be set through the associated, non-shorthand background properties, in this order. <strong>At this time, this property is bugged</strong> - due to the fact that <code><var>slice</var></code>, <code><var>width</var></code>, and <code><var>outset</var></code> all accept multiple measurements and use the same types of measurement, it is impossible to define <code><var>width</var></code> or <code><var>outset</var></code> with this property.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>source</var></code></dt>
						<dd>&#10551; Required. The value of <code>background-image-source</code>.</dd>
						<dt><code><var>slice</var></code></dt>
						<dd>&#10551; Required. The value of <code>background-image-slice</code>.</dd>
						<dt><code><var>width</var></code></dt>
						<dd>&#10551; Optional. The value of <code>background-image-width</code>.</dd>
						<dt><code><var>outset</var></code></dt>
						<dd>&#10551; Optional. The value of <code>background-image-outset</code>.</dd>
						<dt><code><var>repeat</var></code></dt>
						<dd>&#10551; Optional. The value of <code>background-image-repeat</code>.</dd>
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
		<h4>Accepted values of <code>border-image-source</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>&#10551; The default value. No image border will be used.</dd>
			<dt><code>url(<var>URL</var>)</code></dt>
			<dd>&#10551; The source image will be used as a border. <code><var>URL</var></code> is a text variable, URLs only.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>border-image-slice</code>:</h4>
		<dl>
			<dt><code><var>top-x-coord</var> <var>right-y-coord</var> <var>bottom-x-coord</var> <var>left-y-coord</var> fill</code></dt>
			<dd>
				&#10551; The coordinates at which the image will be sliced. Despite being optional, at least one slice coordinate is highly recommended; the default value, 100%, simply causes the entire image to be scaled down and placed in the four corners of the element.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>top-x-coord</var></code></dt>
						<dd>&#10551; Optional, numeric variable, in <code>%</code> or numbers (which will be interpreted as px measurements), defaults to 100%. The horizontal coordinate of the top image slice.</dd>
						<dt><code><var>right-y-coord</var></code></dt>
						<dd>&#10551; Optional, numeric variable, in <code>%</code> or numbers (which will be interpreted as px measurements), defaults to the value of <code>top-x-coord</code>. The vertical coordinate of the right image slice.</dd>
						<dt><code><var>bottom-x-coord</var></code></dt>
						<dd>&#10551; Optional, numeric variable, in <code>%</code> or numbers (which will be interpreted as px measurements), defaults to the value of <code>top-x-coord</code>. The horizontal coordinate of the bottom image slice.</dd>
						<dt><code><var>left-y-coord</var></code></dt>
						<dd>&#10551; Optional, numeric variable, in <code>%</code> or numbers (which will be interpreted as px measurements), defaults to the value of <code>right-y-coord</code>. The vertical coordinate of the left image slice.</dd>
						<dt><code>fill</code></dt>
						<dd>&#10551; Optional. Allows the border to extent into the element's interior.</dd>
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
		<h4>Accepted values of <code>border-image-width</code>:</h4>
		<dl>
			<dt><code><var>width</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements, percentages of the size of the source image, or numbers (which will be interpreted as multiples of <code>border-width</code>), defaults to 1. The width of the image border.</dd>
			<dt><code>auto</code></dt>
			<dd>&#10551; Equivalent to 100%; the source image will not be scaled.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>border-image-outset</code>:</h4>
		<dl>
			<dt><code><var>outset</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements or numbers (which will be interpreted as multiples of <code>border-width</code>), defaults to 0. The amount of space by which the border image will be outset from the actual border, in standard CSS units.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>border-image-repeat</code>:</h4>
		<dl>
			<dt><code>stretch</code></dt>
			<dd>&#10551; The default value. The image is stretched to cover the element.</dd>
			<dt><code>repeat</code></dt>
			<dd>&#10551; The image is tiled repeatedly to cover the element.</dd>
			<dt><code>round</code></dt>
			<dd>&#10551; The image is tiled repeatedly to cover the element. If the final result does not have a whole number of tiles, the image is resized to fit better.</dd>
			<dt><code>space</code></dt>
			<dd>&#10551; The image is tiled repeatedly to cover the element. If the final result does not have a whole number of tiles, the spacing between them is evened out.</dd>
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
