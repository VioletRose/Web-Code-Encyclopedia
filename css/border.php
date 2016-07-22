<?php
    $PAGE_NAME = 'border';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the sub-properties it sets allow you to define the style, width, and color of border around an object.
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#borderBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: 15px lavender;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: groove inset ridge outset;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: inline-block;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="borderBox"&gt;&amp;nbsp;&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				#borderBox {
					border: 15px lavender;
					border-style: groove inset ridge outset;
					display: inline-block;
				}
			</style>
			<div id="borderBox">&nbsp;</div>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>border</code>:</h4>
		<dl>
			<dt><code>border-width</code></dt>
			<dd>&#10551; Defines the width of the border. May be different per side by setting multiple measurements.</dd>
			<dt><code>border-style</code></dt>
			<dd>&#10551; Defines the style of the border.</dd>
			<dt><code>border-color</code></dt>
			<dd>&#10551; Defines the color of the border. May be different per side by setting multiple colors.</dd>
			<dt><code>border-top</code></dt>
			<dd>&#10551; Identical to <code>border</code>, except that it only sets the properties for the border's top.</dd>
			<dt><code>border-right</code></dt>
			<dd>&#10551; Identical to <code>border</code>, except that it only sets the properties for the border's right.</dd>
			<dt><code>border-bottom</code></dt>
			<dd>&#10551; Identical to <code>border</code>, except that it only sets the properties for the border's bottom.</dd>
			<dt><code>border-left</code></dt>
			<dd>&#10551; Identical to <code>border</code>, except that it only sets the properties for the border's left.</dd>
		</dl>
		<details>
			<summary>Sub-properties of sub-properties:</summary>
			<ul>
				<li>border-top-width</li>
				<li>border-top-style</li>
				<li>border-top-color</li>
				<li>border-right-width</li>
				<li>border-right-style</li>
				<li>border-right-color</li>
				<li>border-bottom-width</li>
				<li>border-bottom-style</li>
				<li>border-bottom-color</li>
				<li>border-left-width</li>
				<li>border-left-style</li>
				<li>border-left-color</li>
			</ul>
		</details>
	</section>
	<section>
		<h4>Accepted values of <code>border</code>:</h4>
		<dl>
			<dt><code><var>width</var> <var>style</var> <var>color</var></code></dt>
			<dd>&#10551; The values that would normally be set through the associated, non-shorthand background properties, in this order. Any of these values may be omitted.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>border-width</code>:</dt>
		<dl>
			<dt><code>medium</code></dt>
			<dd>&#10551; The default value. A border 3px thick.</dd>
			<dt><code>thin</code></dt>
			<dd>&#10551; A border 1px thick.</dd>
			<dt><code>thick</code></dt>
			<dd>&#10551; A border 5px thick.</dd>
			<dt><code><var>width</var></code></dt>
			<dd>&#10551; A custom border width using any CSS measurement.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>border-style</code>:</dt>
		<dl>
			<dt><code>none</code></dt>
			<dd>&#10551; The default value. No border.</dd>
			<dt><code>hidden</code></dt>
			<dd>&#10551; A border that doesn't display.</dd>
			<dt><code>dotted</code></dt>
			<dd>&#10551; A border composed of squares with equal amounts of white space in between them.</dd>
			<dt><code>dashed</code></dt>
			<dd>&#10551; A border composed of rectangles with equal amounts of white space in between them.</dd>
			<dt><code>solid</code></dt>
			<dd>&#10551; A border composed of a single solid line.</dd>
			<dt><code>double</code></dt>
			<dd>&#10551; A border composed of two smaller solid lines with white space in between them.</dd>
			<dt><code>groove</code></dt>
			<dd>&#10551; A border composed of four solid lines, two of the normal color and two a darker color, simulating a 3-dimensional groove.</dd>
			<dt><code>ridge</code></dt>
			<dd>&#10551; A border composed of four solid lines, two of the normal color and two a darker color, simulating a 3-dimensional ridge.</dd>
			<dt><code>inset</code></dt>
			<dd>&#10551; A border composed of two solid lines, one of the normal color and one a darker color, simulating a depressed button.</dd>
			<dt><code>outset</code></dt>
			<dd>&#10551; A border composed of two solid lines, one of the normal color and one a darker color, simulating a raised button.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>border-color</code>:</dt>
		<dl>
			<dt><code><var>color</var></code></dt>
			<dd>&#10551; The border's color.</dd>
			<dt><code>transparent</code></dt>
			<dd>&#10551; A transparent border.</dd>
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
