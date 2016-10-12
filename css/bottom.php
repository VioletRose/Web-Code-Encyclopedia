<?php
    $PAGE_NAME = 'bottom';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <a href="/css/position.php"><code>position</code></a>
		<p>This property adjusts the bottom position of an absolutely or relatively positioned element, raising it from its current position by the amount specified. Note that it will only work on elements where <code>position</code> is <code>absolute</code> or <code>relative</code>, and that nothing prevents an element moved this way from leaving the rendering area of the page.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#bottomBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: 3px solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position: relative;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#bottomBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bottom: 731px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="bottomBox"&gt;Mouse over this box to see where it will go!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#bottomBox {
					border: 3px solid;
					position: relative;
				}
				#bottomBox:hover {
					bottom: 731px;
				}
			</style>
			<div id="bottomBox">Mouse over this box to see where it will go!</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>bottom</code>:</h4>
		<dl>
			<dt><code>auto</code></dt>
			<dd>&#10551; The default value. The browser automatically calculates the bottom position.</dd>
			<dt><code><var>adjustment</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements. The amount of distance the bottom position is adjusted upwards by.</dd>
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
