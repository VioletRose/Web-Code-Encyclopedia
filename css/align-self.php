<?php
    $PAGE_NAME = 'align-self';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/display.php">display</a></code></p>
		<p>This property allows you to align specific items inside of a flex container differently relative to the container.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.flexBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: ridge lightgray;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: flex;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding: 5px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 64px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 104px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.flexSquare {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-color: black red lime blue;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 44px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 44px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#selfAlignedSquare {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;align-self: flex-end;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="flexBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;A&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;A&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare" id="selfAlignedSquare"&gt;A&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;A&lt;/div&gt;
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.flexBox {
					border: ridge lightgray;
					display: flex;
					padding: 5px;
					height: 64px;
					width: 104px;
				}
				.flexSquare {
					border-color: black red lime blue;
					border-style: solid;
					height: 44px;
					width: 44px;
				}
				#selfAlignedSquare {
					align-self: flex-end;
				}
			</style>
			<div class="flexBox">
				<div class="flexSquare">A</div>
				<div class="flexSquare">A</div>
				<div class="flexSquare" id="selfAlignedSquare">A</div>
				<div class="flexSquare">A</div>
			</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code></code>:</h4>
		<dl>
			<dt><code>auto</code></dt>
			<dd>The default value. If the parent container has a set <code>align-items</code> property, it inherits the value from that, otherwise it uses <code>stretch</code>.</dd>
			<dt><code>stretch</code></dt>
			<dd>The item is stretched to fully fit the container, unless its size is fixed.</dd>
			<dt><code>center</code></dt>
			<dd>The items is centered within the container, from the top or the sides depending on if the flex container uses rows or columns.</dd>
			<dt><code>flex-start</code></dt>
			<dd>The item is aligned to the beginning of the container.</dd>
			<dt><code>flex-end</code></dt>
			<dd>The item is aligned to the end of the container.</dd>
			<dt><code>baseline</code></dt>
			<dd>The item is aligned with the container's baseline, the position of which is determined by the lowest text line aligned to the baseline.</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
