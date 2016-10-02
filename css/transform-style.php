<?php
    $PAGE_NAME = 'transform-style';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/transform.php">transform</a></code></p>
		<p>This property allows you to specify whether or not child elements of a parent with a 3d transformation will be fully 3d themselves, or render flat upon the element's surface.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#tStyledBlock {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: black;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: white;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;margin: auto;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform: rotateX(-45deg);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 200px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#tStyledBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 300px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform: perspective(500px) rotateX(45deg);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform-style: preserve-3d;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 300px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#tStyledBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform-style: flat;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="tStyledBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div id="tStyledBlock"&gt;Without &lt;code&gt;preserve-3d&lt;/code&gt;, instead of "standing upright" upon its tilted parent, this element would remain flat (albeit 'thinned' by the perspective-less transform). Mouse over the parent to see the default behavior!&lt;/div&gt;
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#tStyledBlock {
					background-color: black;
					color: white;
					margin: auto;
					transform: rotateX(-45deg);
					width: 200px;
				}
				#tStyledBox {
					border-style: solid;
					height: 300px;
					transform: perspective(500px) rotateX(45deg);
					transform-style: preserve-3d;
					width: 300px;
				}
				#tStyledBox:hover {
					transform-style: flat;
				}
			</style>
			<div id="tStyledBox">
				<div id="tStyledBlock">Without <code>preserve-3d</code>, instead of "standing upright" upon its tilted parent, this element would remain flat (albeit 'thinned' by the perspective-less transform). Mouse over the parent to see the default behavior!</div>
			</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>transform-style</code>:</h4>
		<dl>
			<dt><code>flat</code></dt>
			<dd>&#10551; The default value. Child elements of a transformed parent will render flat upon its surface.</dd>
			<dt><code>preserve-3d</code></dt>
			<dd>&#10551; Child elements of a transformed parent will retain 3d shape themselves.</dd>
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
