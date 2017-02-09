<?php
    $PAGE_NAME = 'outline';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the sub-properties it sets allow you to control the color, style, and width of an outline around an element, which displays outside of the element's content and borders, but within its margins. Unlike borders, outlines are purely visual and do not change the size or placement of the element they're associated with, which can be both positive and negative as their use is safer for the page's layout, but careless application can have outlines colliding with each other or intruding into space they shouldn't. Also unlike borders, outlines can't be given different properties per side.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.outlinedBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;margin: 3px 0;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outline: black double 5px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#wellOutlinedBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;margin: 15px 0;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="outlinedBox"&gt;Notice that the outlines from these two boxes are interfering with each other.&lt;/div&gt;
				<br>
				&lt;div class="outlinedBox"&gt;To avoid this, make sure &lt;code&gt;outline&lt;/code&gt; is only used when its size and behavior have been taken into account.&lt;/div&gt;
				<br>
				&lt;div class="outlinedBox" id="wellOutlinedBox"&gt;One way of doing this is to set a large enough margin that the outline won't touch any of the surrounding content, since outlines render within the margin space!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.outlinedBox {
					border: 1px solid red;
					margin: 2px 0;
					outline: black double 5px;
				}
				#wellOutlinedBox {
					margin: 15px 0;
				}
			</style>
			<div class="outlinedBox">Notice that the outlines from these two boxes are interfering with each other.</div>
			<div class="outlinedBox">To avoid this, make sure <code>outline</code> is only used when its size and behavior have been taken into account.</div>
			<div class="outlinedBox" id="wellOutlinedBox">One way of doing this is to set a large enough margin that the outline won't touch any of the surrounding content, since outlines render within the margin space!</div>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>outline</code>:</h4>
		<dl>
			<dt><code>outline-color</code></dt>
			<dd>Defines the color of the outline.</dd>
			<dt><code>outline-style</code></dt>
			<dd>Defines the style of the outline.</dd>
			<dt><code>outline-width</code></dt>
			<dd>Defines the width of the outline.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>outline</code>:</h4>
		<dl>
			<dt><code><var>color</var> <var>style</var> <var>width</var></code></dt>
			<dd>
				&#10551; The values that would normally be set through the associated, non-shorthand outline properties, in this order.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>color</var></code></dt>
						<dd>Optional. The value of <code>outline-color</code>.</dd>
						<dt><code><var>style</var></code></dt>
						<dd>Optional. The value of <code>outline-style</code>.</dd>
						<dt><code><var>width</var></code></dt>
						<dd>Optional. The value of <code>outline-width</code>.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>outline-color</code>:</h4>
		<dl>
			<dt><code>invert</code></dt>
			<dd>The default value. The browser automatically calculates a color that will contrast with the background behind the outline, so it always remains visible.</dd>
			<dt><code><var>color</var></code></dt>
			<dd>Color variable. The outline's color.</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>outline-style</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>The default value. No outline.</dd>
			<dt><code>hidden</code></dt>
			<dd>An outline that doesn't display.</dd>
			<dt><code>dotted</code></dt>
			<dd>An outline composed of squares with equal amounts of white space in between them.</dd>
			<dt><code>dashed</code></dt>
			<dd>An outline composed of rectangles with equal amounts of white space in between them.</dd>
			<dt><code>solid</code></dt>
			<dd>An outline composed of a single solid line.</dd>
			<dt><code>double</code></dt>
			<dd>An outline composed of two smaller solid lines with white space in between them.</dd>
			<dt><code>groove</code></dt>
			<dd>An outline composed of four solid lines, two of the normal color and two a darker color, simulating a 3-dimensional groove.</dd>
			<dt><code>ridge</code></dt>
			<dd>An outline composed of four solid lines, two of the normal color and two a darker color, simulating a 3-dimensional ridge.</dd>
			<dt><code>inset</code></dt>
			<dd>An outline composed of two solid lines, one of the normal color and one a darker color, simulating a depressed button.</dd>
			<dt><code>outset</code></dt>
			<dd>An outline composed of two solid lines, one of the normal color and one a darker color, simulating a raised button.</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>outline-width</code>:</h4>
		<dl>
			<dt><code>medium</code></dt>
			<dd>The default value. An outline 3px thick.</dd>
			<dt><code>thin</code></dt>
			<dd>An outline 1px thick.</dd>
			<dt><code>thick</code></dt>
			<dd>An outline 5px thick.</dd>
			<dt><code><var>width</var></code></dt>
			<dd>Numeric variable, in measurements. The width of the outline.</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
