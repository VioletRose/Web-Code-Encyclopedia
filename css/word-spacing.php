<?php
    $PAGE_NAME = 'word-spacing';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to adjust how much space each space or tab character takes up within a specified element.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#wordSpacedP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;word-spacing: 2em;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p id="wordSpacedP"&gt;This paragraph has eight times the normal amount of space between letters!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#wordSpacedP {
					word-spacing: 2em;
				}
			</style>
			<p id="wordSpacedP">This paragraph has eight times the normal amount of space between letters!</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code></code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>&#10551; The default value. A normal amount of space taken by each space, equivalent to <code>0.25em</code>.</dd>
			<dt><code><var>spacing</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements. A specified amount of spacing per space.</dd>
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
