<?php
    $PAGE_NAME = 'border-radius';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Required property: <a href="/css/border.php"><code>border</code></a></p>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the properties it sets allow you to add rounded corners to a border.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#borderRadiusBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: 3px solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-radius: 50%;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 70px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding-top: 24px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-align: center;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="borderRadiusBox"&gt;Maximal rounding!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#borderRadiusBox {
					border: 3px solid;
					border-radius: 50%;
					height: 70px;
					padding-top: 24px;
					text-align: center;
					width: 94px;
				}
			</style>
			<div id="borderRadiusBox">Maximal rounding!</div>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>border-radius</code>:</h4>
		<dl>
			<dt><code>border-top-left-radius</code></dt>
			<dd>Defines a rounded top left corner of the border.</dd>
			<dt><code>border-top-right-radius</code></dt>
			<dd>Defines a rounded top right corner of the border.</dd>
			<dt><code>border-bottom-right-radius</code></dt>
			<dd>Defines a rounded bottom right corner of the border.</dd>
			<dt><code>border-bottom-left-radius</code></dt>
			<dd>Defines a rounded bottom left corner of the border.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>border-radius</code>:</h4>
		<dl>
			<dt><code><var>top-left-radius</var> <var>top-right-radius</var> <var>bottom-right-radius</var> <var>bottom-left-radius</var></code></dt>
			<dd>
				Defines how rounded the border's corners will be.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>top-left-radius</var></code></dt>
						<dd>Required, numeric variable, in measurements or percentages (cannot exceed 50%), defaults to 0. The rounding of the border's top left corner.</dd>
						<dt><code><var>top-right-radius</var></code></dt>
						<dd>Optional, numeric variable, in measurements or percentages (cannot exceed 50%), defaults to the value of <code>top-left-radius</code>. The rounding of the border's top right corner.</dd>
						<dt><code><var>bottom-right-radius</var></code></dt>
						<dd>Optional, numeric variable, in measurements or percentages (cannot exceed 50%), defaults to the value of <code>top-left-radius</code>. The rounding of the border's bottom right corner.</dd>
						<dt><code><var>bottom-left-radious</var></code></dt>
						<dd>Optional, numeric variable, in measurements or percentages (cannot exceed 50%), defaults to the value of <code>top-right-radius</code>. The rounding of the border's bottom left corner.</dd>					
					</dl>
				</details>
			</dd>
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
