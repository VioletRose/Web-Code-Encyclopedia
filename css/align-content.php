<?php
    $PAGE_NAME = 'align-content';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required properties: <code><a href="/css/display.php">display</a></code>, <code><a href="/css/flex-wrap.php">flex-wrap</a></code></p>
		<p>This property causes the content (rows or columns) within a flex container with wrapping enabled to align differently relative to the container.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.contentAlignedFlexSquare {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-color: black red lime blue;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 25px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 25px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#contentAlignedFlexBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;align-content: space-around;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: ridge lightgray;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: flex;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flex-wrap: wrap;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 116px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding: 5px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 116px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="contentAlignedFlexBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="contentAlignedFlexSquare"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="contentAlignedFlexSquare"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="contentAlignedFlexSquare"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="contentAlignedFlexSquare"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="contentAlignedFlexSquare"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="contentAlignedFlexSquare"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="contentAlignedFlexSquare"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="contentAlignedFlexSquare"&gt;&lt;/div&gt;
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				.contentAlignedFlexSquare {
					border-color: black red lime blue;
					border-style: solid;
					height: 25px;
					width: 25px;
				}
				#contentAlignedFlexBox {
					align-content: space-around;
					border: ridge lightgray;
					display: flex;
					flex-wrap: wrap;
					height: 116px;
					padding: 5px;
					width: 116px;
				}
			</style>
			<div id="contentAlignedFlexBox">
				<div class="contentAlignedFlexSquare"></div>
				<div class="contentAlignedFlexSquare"></div>
				<div class="contentAlignedFlexSquare"></div>
				<div class="contentAlignedFlexSquare"></div>
				<div class="contentAlignedFlexSquare"></div>
				<div class="contentAlignedFlexSquare"></div>
				<div class="contentAlignedFlexSquare"></div>
				<div class="contentAlignedFlexSquare"></div>
			</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>align-content</code>:</h4>
		<dl>
			<dt><code>stretch</code></dt>
			<dd>&#10551; The default value. Each wrapped row or column will attempt to take up an equal amount of space within the container. Elements will resize to fill empty space if their dimensions are not set.</dd>
			<dt><code>center</code></dt>
			<dd>&#10551; The content will align to the center of the container.</dd>
			<dt><code>flex-start</code></dt>
			<dd>&#10551; The content will align to the beginning of the container.</dd>
			<dt><code>flex-end</code></dt>
			<dd>&#10551; The content will align to the end of the container.</dd>
			<dt><code>space-between</code></dt>
			<dd>&#10551; The rows or columns will be as far away from the center of the container as possible.</dd>
			<dt><code>space-around</code></dt>
			<dd>&#10551; The rows or columns will have even amounts of spacing between the beginning of the container, the end of the container, and each other.</dd>
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
