<?php
    $PAGE_NAME = 'border-radius';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <a href="/css/border.php"><code>border</code></a></p>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the properties it sets allow you to add rounded corners to a border.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#borderRadiusBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: 3px solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-radius: 50%;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding-top: 24px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-align: center;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 100px;
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
		<figure>
			<style>
				#borderRadiusBox {
					border: 3px solid;
					border-radius: 50%;
					height: 100px;
					padding-top: 24px;
					text-align: center;
					width: 100px;
				}
			</style>
			<div id="borderRadiusBox">Maximal rounding!</div>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>border-radius</code>:</h4>
		<dl>
			<dt><code>border-top-left-radius</code></dt>
			<dd>&#10551; Defines a rounded top left corner of the border.</dd>
			<dt><code>border-top-right-radius</code></dt>
			<dd>&#10551; Defines a rounded top right corner of the border.</dd>
			<dt><code>border-bottom-right-radius</code></dt>
			<dd>&#10551; Defines a rounded bottom right corner of the border.</dd>
			<dt><code>border-bottom-left-radius</code></dt>
			<dd>&#10551; Defines a rounded bottom left corner of the border.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values:</h4>
		<dl>
			<dt><code><var>top-left-radius</var> <var>top-right-radius</var> <var>bottom-right-radius</var> <var>bottom-left-radius</var></code></dt>
			<dd>&#10551; Defines how rounded the border's corners will be, in standard CSS units or in percentages ranging from <code>0%</code> (fully square) to <code>50%</code> (maximally rounded). There is no upper numeric limit to the possible values, but the corners will not become more rounded than <code>50%</code> or the equivalent in other units. All but one of these values may be omitted, resulting in normal CSS logic regarding equal side measurements.</dd>
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
