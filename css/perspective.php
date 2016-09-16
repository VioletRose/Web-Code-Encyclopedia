<?php
    $PAGE_NAME = 'perspective';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/transform.php">transform</a></code></p>
		<p>This property allows you to control how far away objects given 3d transformations will appear to be. If this is not set on the parent of an element that has been rotated in a three-dimensional fashion, it will simply appear flatter, as if scaled down along that axis rather than rotated. With perspective assigned to a low number, it will appear to be very close, and with that the rotation will appear extreme. At much higher values, it will appear far away, in the sense of the rotation barely being visible. However, that "perspective" is specifically in a 3d context and will not make the element larger or smaller save by exaggerating its visible rotation. Note that if the perspective appears to be in an undesirable place horizontally or vertically, this can be corrected with <code><a href="/css/perspective-origin.php">perspective-origin</a></code>.</p>
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
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;perspective: 170px;
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
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 170px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding: 50px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform: rotateX(45deg);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 170px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.perspectiveBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;perspective: 95px;
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
					perspective: 170px;
					width: 170px;
				}
				.perspectiveBlock {
					background-color: #ead8ff;
					border: solid #7F00FF;
					height: 170px;
					padding: 50px;
					transform: rotateX(45deg);
					width: 170px;
				}
				.perspectiveBox:hover {
					perspective: 95px;
				}
			</style>
			<div class="perspectiveBox">
				<div class="perspectiveBlock">Mouse over this text!</div>
			</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>perspective</code>:</h4>
		<dl>
			<dt><code><var>distance</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements. How far away the rotated child element appears to be, for purposes of 3d rendering.</dd>
			<dt><code>none</code></dt>
			<dd>&#10551; The default value; equivalent to 0. The perspective is not set.</dd>
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
