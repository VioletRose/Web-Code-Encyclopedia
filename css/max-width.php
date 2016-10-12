<?php
    $PAGE_NAME = 'max-width';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to define a maximum width for an element. It cannot exceed this width, even if the contents within are of a larger size (in which case, overflow rules come into play), or if another style rule would normally result in a larger width. This is mostly useful when the element's width is set in such a way that it may grow or shrink depending on context, but a sensible maximum is desired.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#maxWidthBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max-width: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overflow: auto;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 25vw;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#maxWidthBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max-width: none;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="maxWidthBox"&gt;This box is set to be a quarter as wide as the browser window, but no more than 94px. Mouse over it to see what it would look like without a maximum width!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#maxWidthBox {
					border-style: solid;
					max-width: 94px;
					overflow: auto;
					width: 25vw;
				}
				#maxWidthBox:hover {
					max-width: none;
				}
			</style>
			<div id="maxWidthBox">This box is set to be a quarter as wide as the browser window, but no more than 94px. Mouse over it to see what it would look like without a maximum width!</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>max-width</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>&#10551; The default value. No maximum width.</dd>
			<dt><code><var>width</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements or percentages of the containing block's width. The maximum width of the element.</dd>
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
