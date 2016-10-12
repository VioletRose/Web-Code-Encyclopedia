<?php
    $PAGE_NAME = 'justify-content';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/display.php">display</a></code></p>
		<p>This property allows you to justify (align) content within a flex container specifically when it doesn't fill a full row or column.</p>
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
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 205px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 205px;
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
				&nbsp;&nbsp;&nbsp;&nbsp;#justifiedFlexBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;justify-content: space-around;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#justifiedFlexBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;justify-content: space-between;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="flexBox" id="justifiedFlexBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;&lt;/div&gt;
				<br>
				&lt;/div&gt;
				<br>
				&lt;p&gt;Mouse over the box to see the spacing change!&lt;/p&gt;
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
					height: 205px;
					width: 205px;
				}
				.flexSquare {
					border-color: black red lime blue;
					border-style: solid;
					height: 44px;
					width: 44px;
				}
				#justifiedFlexBox {
					justify-content: space-around;
				}
				#justifiedFlexBox:hover {
					justify-content: space-between;
				}
			</style>
			<div class="flexBox" id="justifiedFlexBox">
				<div class="flexSquare"></div>
				<div class="flexSquare"></div>
				<div class="flexSquare"></div>
			</div>
			<p>Mouse over the box to see the spacing change!</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>justify-content</code>:</h4>
		<dl>
			<dt><code>flex-start</code></dt>
			<dd>&#10551; The content will justify to the beginning of the row or column, leaving empty space at the end.</dd>
			<dt><code>flex-end</code></dt>
			<dd>&#10551; The content will justify to the end of the row or column, leaving empty space at the beginning.</dd>
			<dt><code>center</code></dt>
			<dd>&#10551; The content will justify to the center of the row or column, leaving empty space on both sides.</dd>
			<dt><code>space-between</code></dt>
			<dd>&#10551; The content will have empty space distributed evenly between each item.</dd>
			<dt><code>space-around</code></dt>
			<dd>&#10551; The content will have empty space distributed evenly before and after each item.</dd>
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
