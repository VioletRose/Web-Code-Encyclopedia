<?php
    $PAGE_NAME = 'line-height';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to define the amount of space between lines in an element's text.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#lineHeightBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;line-height: 200%;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#lineHeightBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;line-height: 50%;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="lineHeightBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;This is a larger line height than normal.
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Mouse over the text to see a much smaller height than normal!
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#lineHeightBox {
					line-height: 200%;
				}
				#lineHeightBox:hover {
					line-height: 50%;
				}
			</style>
			<div id="lineHeightBox">
				This is a larger line height than normal.
				<br>
				Mouse over the text to see a much smaller height than normal!
			</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>line-height</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>&#10551; The default value. A normal line height. Equivalency varies by browser, but tends to be around <code>120%</code>.</dd>
			<dt><code><var>height</var></code></dt>
			<dd>&#10551; Numeric variable, in numbers which will be multiplied by the current font size to determine line height, percentages of the current font size, or measurements. The height difference between lines.</dd>
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
