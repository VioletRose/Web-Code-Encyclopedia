<?php
    $PAGE_NAME = 'CSS Template';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the sub-properties it sets allow you to define the size of an element's padding, the amount of space between its edges/borders and the content inside - effectively an inside-out margin.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#paddingBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 56px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding: 5px 10px 15px 20px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 56px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#paddedBlock {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: yellow;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 50px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 50px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="paddingBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div id="paddedBlock"&gt;&lt;/div&gt;
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#paddingBox {
					border-style: solid;
					height: 56px;
					padding: 5px 10px 15px 20px;
					width: 56px;
				}
				#paddedBlock {
					background-color: yellow;
					height: 50px;
					width: 50px;
				}
			</style>
			<div id="paddingBox">
				<div id="paddedBlock"></div>
			</div>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>padding</code>:</h4>
		<dl>
			<dt><code>padding-top</code></dt>
			<dd>Defines the size of the top padding.</dd>
			<dt><code>padding-right</code></dt>
			<dd>Defines the size of the right padding.</dd>
			<dt><code>padding-bottom</code></dt>
			<dd>Defines the size of the bottom padding.</dd>
			<dt><code>padding-left</code></dt>
			<dd>Defines the size of the left padding.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>padding</code>:</h4>
		<dl>
			<dt><code><var>top</var> <var>right</var> <var>bottom</var> <var>left</var></code></dt>
			<dd>
				The values that would normally be set through the associated, non-shorthand padding properties, in this order.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>top</var></code></dt>
						<dd>Required. The value of <code>padding-top</code>.</dd>
						<dt><code><var>right</var></code></dt>
						<dd>Optional. The value of <code>padding-right</code>.</dd>
						<dt><code><var>bottom</var></code></dt>
						<dd>Optional. The value of <code>padding-bottom</code>.</dd>
						<dt><code><var>left</var></code></dt>
						<dd>Optional. The value of <code>padding-left</code>.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>padding-top</code>, <code>padding-right</code>, <code>padding-bottom</code>, and <code>padding-left</code>:</h4>
		<dl>
			<dt><code><var>padding</var></code></dt>
			<dd>Numeric variable, in measurements or percentages of the element's width. The size of the element's padding.</dd>
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
