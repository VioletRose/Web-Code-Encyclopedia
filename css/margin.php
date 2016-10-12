<?php
    $PAGE_NAME = 'margin';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property allows you to define the size of the margin, which in web development means the amount of blank space surrounding an element, outside of the border, padding, and finally content. Note that as part of the way web browsers render the page, it is possible for top and bottom margins to collapse, i.e. only display the larger of two colliding margins rather than the full size of both. There are three general circumstances this happens: adjacent elements sharing the same parent, top/bottom margins of a parent element and its first/last child (barring other style rules changing effective size), and the top and bottom margins of a completely empty block (again, barring size-altering styles).</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.containerBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 90px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 110px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#marginBlock {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: red;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 50px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;margin: 10px 20px 30px 40px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 50px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="containerBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div id="marginBlock"&gt;&lt;/div&gt;
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.containerBox {
					border-style: solid;
					height: 90px;
					width: 110px;
				}
				#marginBlock {
					background-color: red;
					height: 50px;
					margin: 10px 20px 30px 40px;
					width: 50px;
				}
			</style>
			<div class="containerBox">
				<div id="marginBlock"></div>
			</div>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>margin</code>:</h4>
		<dl>
			<dt><code>margin-top</code></dt>
			<dd>&#10551; Defines the size of the top margin.</dd>
			<dt><code>margin-right</code></dt>
			<dd>&#10551; Defines the size of the right margin.</dd>
			<dt><code>margin-bottom</code></dt>
			<dd>&#10551; Defines the size of the bottom margin.</dd>
			<dt><code>margin-left</code></dt>
			<dd>&#10551; Defines the size of the left margin.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>margin</code>:</h4>
		<dl>
			<dt><code><var>top</var> <var>right</var> <var>bottom</var> <var>left</var></code></dt>
			<dd>
				&#10551; The values that would normally be set through the associated, non-shorthand margin properties, in this order.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>top</var></code></dt>
						<dd>&#10551; Required. The value of <code>margin-top</code>.</dd>
						<dt><code><var>right</var></code></dt>
						<dd>&#10551; Optional. The value of <code>margin-right</code>.</dd>
						<dt><code><var>bottom</var></code></dt>
						<dd>&#10551; Optional. The value of <code>margin-bottom</code>.</dd>
						<dt><code><var>left</var></code></dt>
						<dd>&#10551; Optional. The value of <code>margin-bottom</code>.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>margin-top</code>, <code>margin-right</code>, <code>margin-bottom</code>, and <code>margin-left</code>:</h4>
		<dl>
			<dt><code><var>size</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements or percentages of the element's width; defaults to <code>0</code>. The size of the margin on the given side of an element.</dd>
			<dt><code>auto</code></dt>
			<dd>&#10551; The browser automatically calculates the margin.</dd>
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
