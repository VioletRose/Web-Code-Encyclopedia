<?php
    $PAGE_NAME = 'resize';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/overflow.php">overflow</a></code></p>
		<p>This property allows you to specify elements that the user can resize. A triangular button is added to the bottom right corner of the element, and by clicking and dragging it, the element can be resized horizontally, vertically, or both. Note, however, that barring other style rules that would cause this to happen, resizing the element generally doesn't resize its contents, which is why this property does not function if <code>overflow</code> isn't changed from its default value of <code>visible</code>.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#resizableBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overflow: auto;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;resize: both;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="resizableBox"&gt;This box is resizable. Click and drag the button in the bottom right to try it out!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#resizableBox {
					border-style: solid;
					overflow: auto;
					resize: both;
				}
			</style>
			<div id="resizableBox">This box is resizable. Click and drag the button in the bottom right to try it out!</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>resize</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>&#10551; The default value. The element cannot be resized by the user.</dd>
			<dt><code>both</code></dt>
			<dd>&#10551; The element can be resized horizontally and vertically.</dd>
			<dt><code>horizontal</code></dt>
			<dd>&#10551; The element can only be resized horizontally.</dd>
			<dt><code>vertical</code></dt>
			<dd>&#10551; The element can only be resized vertically.</dd>
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
