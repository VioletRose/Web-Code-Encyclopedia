<?php
    $PAGE_NAME = 'outline-offset';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/outline.php"></a></code></p>
		<p>This property allows you to control the amount of space between an element and its outline.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.outlinedBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: 1px solid red;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;margin: 15px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outline: black double 5px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.outlinedBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outline-offset: 12px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="outlinedBox"&gt;Mouse over this box to see the offset change!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.outlinedBox {
					border: 1px solid red;
					margin: 15px;
					outline: black double 5px;
				}
				.outlinedBox:hover {
					outline-offset: 12px;
				}
			</style>
			<div class="outlinedBox">Mouse over this box to see the offset change!</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>outline-offset</code>:</h4>
		<dl>
			<dt><code><var>offset</var></code></dt>
			<dd>Numeric value, in measurements; defaults to <code>0</code>. The distance between the element and its outline - how much it is offset by.</dd>
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
