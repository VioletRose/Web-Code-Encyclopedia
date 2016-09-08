<?php
    $PAGE_NAME = 'max-height';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to define a maximum height for an element. It cannot exceed this height, even if the contents within are of a larger size (in which case, overflow rules come into play), or if another style rule would normally result in a larger height. This is mostly useful when the element's height is set in such a way that it may grow or shrink depending on context, but a sensible maximum is desired.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#maxHeightBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 25vh;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max-height: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overflow: auto;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#maxHeightBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max-height: none;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="maxHeightBox"&gt;This box is set to be a quarter as tall as the browser window, but no more than 100px. Mouse over it to see what it would look like without a maximum height!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#maxHeightBox {
					border-style: solid;
					height: 25vh;
					max-height: 100px;
					overflow: auto;
				}
				#maxHeightBox:hover {
					max-height: none;
				}
			</style>
			<div id="maxHeightBox">This box is set to be a quarter as tall as the browser window, but no more than 100px. Mouse over it to see what it would look like without a maximum height!</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>max-height</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>&#10551; The default value. No maximum height.</dd>
			<dt><code><var>height</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements or percentages of the containing block's height. The maximum height of the element.</dd>
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
