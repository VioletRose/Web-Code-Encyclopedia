<?php
    $PAGE_NAME = 'min-height';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to define a minimum height for an element. It cannot be reduced to less than this height, even if another style rule would normally result in a lesser height. This is mostly useful when the element's height is set in such a way that it may grow or shrink depending on context, but a sensible minimum is desired.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#minHeightBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 5vh;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;min-height: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overflow: auto;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#minHeightBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;min-height: 0;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="minHeightBox"&gt;This box is set to be 1/20th as tall as the browser window, but no less than 94px. Mouse over it to see what it would look like without a minimum height!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#minHeightBox {
					border-style: solid;
					height: 5vh;
					min-height: 94px;
					overflow: auto;
				}
				#minHeightBox:hover {
					min-height: 0;
				}
			</style>
			<div id="minHeightBox">This box is set to be 1/20th as tall as the browser window, but no less than 94px. Mouse over it to see what it would look like without a minimum height!</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>min-height</code>:</h4>
		<dl>
			<dt><code><var>height</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements or percentages of the containing block's height; defaults to <code>0</code>. The minimum height of the element.</dd>
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
