<?php
    $PAGE_NAME = 'box-sizing';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property allows you to specify whether an element's height and width are defined only by its actual content, or also by borders and padding.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#sizingBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: 25px solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;box-sizing: border-box;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding: 25px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 150px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#sizingBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;box-sizing: content-box;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="sizingBox"&gt;You can mouse over the box to see how much larger this box would be with normal sizing rules!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#sizingBox {
					border: 25px double;
					box-sizing: border-box;
					padding: 25px;
					width: 150px;
				}
				#sizingBox:hover {
					box-sizing: content-box;
				}
			</style>
			<div id="sizingBox">You can mouse over the box to see how much larger this box would be with normal sizing rules!</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>box-sizing</code>:</h4>
		<dl>
			<dt><code>content-box</code></dt>
			<dd>The default value. Only the element's content is considered in width and height.</dd>
			<dt><code>border-box</code></dt>
			<dd>The element's height and width include border and padding size as well as content.</dd>
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
