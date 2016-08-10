<?php
    $PAGE_NAME = 'CSS Template';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/display.php">display</a></code></p>
		<p>This property allows you to align the items inside of a flex container differently relative to the container.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.itemAlignedFlexSquare {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-color: black red lime blue;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 50px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 50px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#itemAlignedFlexBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;align-items: baseline;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: ridge lightgray;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: flex;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding: 5px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 75px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 116px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#largeFontSquare {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-size: 1.5em;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="itemAlignedFlexBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="itemAlignedFlexSquare"&gt;A&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="itemAlignedFlexSquare" id="largeFontSquare"&gt;A&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="itemAlignedFlexSquare"&gt;A&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="itemAlignedFlexSquare"&gt;A&lt;/div&gt;
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				.itemAlignedFlexSquare {
					border-color: black red lime blue;
					border-style: solid;
					height: 50px;
					width: 50px;
				}
				#itemAlignedFlexBox {
					align-items: baseline;
					border: ridge lightgray;
					display: flex;
					padding: 5px;
					height: 75px;
					width: 116px;
				}
				#largeFontSquare {
					font-size: 1.5em;
				}
			</style>
			<div id="itemAlignedFlexBox">
				<div class="itemAlignedFlexSquare">A</div>
				<div class="itemAlignedFlexSquare" id="largeFontSquare">A</div>
				<div class="itemAlignedFlexSquare">A</div>
				<div class="itemAlignedFlexSquare">A</div>
			</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code></code>:</h4>
		<dl>
			<dt><code>stretch</code></dt>
			<dd>&#10551; The default value. Items are stretched to fully fit the container, unless their sizes are fixed.</dd>
			<dt><code>center</code></dt>
			<dd>&#10551; Items are centered within the container, from the top or the sides depending on if they are in rows or columns.</dd>
			<dt><code>flex-start</code></dt>
			<dd>&#10551; Items are aligned to the beginning of the container.</dd>
			<dt><code>flex-end</code></dt>
			<dd>&#10551; Items are aligned to the end of the container.</dd>
			<dt><code>baseline</code></dt>
			<dd>&#10551; Items are aligned so that their baselines (starting text lines) line up.</dd>
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
