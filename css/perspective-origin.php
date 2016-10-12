<?php
    $PAGE_NAME = 'perspective-origin';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required properties: <code><a href="/css/perspective.php">perspective</a>, <code><a href="/css/transform.php">transform</a></code></code></p>
		<p>This property elaborates on <code>perspective</code>, by adding controls for horizontal and vertical placement of the perspective, rather than only considering depth, or distance.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.perspectiveBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 170px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;perspective: 280px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;perspective-origin: left top;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 170px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.perspectiveBlock {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: #ead8ff;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: solid #7F00FF;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 114px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding: 50px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform: rotateX(45deg);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 114px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.perspectiveBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;perspective-origin: right bottom;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="perspectiveBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="perspectiveBlock"&gt;Mouse over this text!&lt;/div&gt;
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.perspectiveBox {
					height: 170px;
					perspective: 280px;
					perspective-origin: left top;
					width: 170px;
				}
				.perspectiveBlock {
					background-color: #ead8ff;
					border: solid #7F00FF;
					height: 114px;
					padding: 50px;
					transform: rotateX(45deg);
					width: 114px;
				}
				.perspectiveBox:hover {
					perspective-origin: right bottom;
				}
			</style>
			<div class="perspectiveBox">
				<div class="perspectiveBlock">Mouse over this text!</div>
			</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>perspective-origin</code>:</h4>
		<dl>
			<dt><code><var>x-origin</var> <var>y-origin</var></code></dt>
			<dd>
				&#10551;  The placement of the perspective on horizontal and vertical axes, relative to the center of the element.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x-origin</var></code></dt>
						<dd>&#10551; Required numeric/string variable, in measurements, percentages from <code>0%</code> to <code>100%</code>, or <code>left</code>, <code>center</code>, or <code>right</code>, equivalent to <code>0%</code>, <code>50%</code>, and <code>100%</code> respectively; defaults to <code>50%</code>. The horizontal position of the perspective.</dd>
						<dt><code><var>y-origin</var></code></dt>
						<dd>&#10551; Required numeric/string variable, in measurements, percentages from <code>0%</code> to <code>100%</code>, or <code>top</code>, <code>center</code>, or <code>bottom</code>, equivalent to <code>0%</code>, <code>50%</code>, and <code>100%</code> respectively; defaults to <code>50%</code>. The vertical position of the perspective.</dd>
					</dl>
				</details>
			</dd>
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
