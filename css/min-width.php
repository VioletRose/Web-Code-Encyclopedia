<?php
    $PAGE_NAME = 'min-width';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to define a minimum width for an element. It cannot be reduced to less than this width, even if another style rule would normally result in a lesser width. This is mostly useful when the element's width is set in such a way that it may grow or shrink depending on context, but a sensible minimum is desired.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#minWidthBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;min-width: 194px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overflow: auto;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 5vw;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#minWidthBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;min-width: 0;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="minWidthBox"&gt;This box is set to be 1/20th as wide as the browser window, but no less than 194px. Mouse over it to see what it would look like without a minimum width!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#minWidthBox {
					border-style: solid;
					min-width: 194px;
					overflow: auto;
					width: 5vw;
				}
				#minWidthBox:hover {
					min-width: 0;
				}
			</style>
			<div id="minWidthBox">This box is set to be 1/20th as wide as the browser window, but no less than 194px. Mouse over it to see what it would look like without a minimum width!</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>min-width</code>:</h4>
		<dl>
			<dt><code><var>width</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements or percentages of the containing block's width; defaults to <code>0</code>. The minimum width of the element.</dd>
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
