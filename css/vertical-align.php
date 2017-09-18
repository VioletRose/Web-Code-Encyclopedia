<?php
    $PAGE_NAME = 'vertical-align';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property allows you to control the vertical alignment, or baseline, of inline block or inline elements, which governs where they display relative to text lines accompanying them. Note that in most cases, this also affects the height of the text lines.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#yAlignedSpan {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: lightskyblue;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vertical-align: 11px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#yAlignedSpan:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vertical-align: -11px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p&gt;You can mouse over the &lt;span id="yAlignedSpan"&gt;blue text&lt;/span&gt; to change it from a positive alignment to a negative one!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#yAlignedSpan {
					background-color: lightskyblue;
					vertical-align: 11px;
				}
				#yAlignedSpan:hover {
					vertical-align: -11px;
				}
			</style>
			<p>You can mouse over the <span id="yAlignedSpan">blue text</span> to change it from a positive alignment to a negative one!</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>vertical-align</code>:</h4>
		<dl>
			<dt><code>baseline</code></dt>
			<dd>The default value. Vertically aligns the element relative to the parent element's baseline.</dd>
			<dt><code><var>adjustment</var></code></dt>
			<dd>Numeric variable, in measurements or percentages of the value of <code>line-height</code>. An amount of distance the element's baseline should be adjusted by; positive numbers for raising, and negative numbers for lowering.</dd>
			<dt><code>sub</code></dt>
			<dd>Vertically aligns the element as if it were subscript.</dd>
			<dt><code>super</code></dt>
			<dd>Vertically aligns the element as if it were superscript.</dd>
			<dt><code>top</code></dt>
			<dd>Vertically aligns the top of the element with the highest other element on the same line. If none exist, it aligns to the parent element's top.</dd>
			<dt><code>text-top</code></dt>
			<dd>Vertically aligns the top of the element with the top of the parent element's font (the tallest possible character on that line).</dd>
			<dt><code>middle</code></dt>
			<dd>Vertically aligns the center of element in the middle of the current line.</dd>
			<dt><code>bottom</code></dt>
			<dd>Vertically aligns the bottom of the element with the bottom of the lowest other element on the same line. If none exist, it aligns with the parent element's bottom.</dd>
			<dt><code>text-bottom</code></dt>
			<dd>Vertically aligns the bottom of the element with the bottom of the parent element's font (the lowest possible character on that line).</dd>
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
