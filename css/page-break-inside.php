<?php
    $PAGE_NAME = 'page-break-inside';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required rule: <code><a href="/css/media.php">@media</a></code></p>
		<p>This property allows you to instruct printers to, if possible, avoid page breaking during specific elements.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;@media print {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#unbrokenBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;page-break-inside: avoid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="unbrokenBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;As long as it is possible, printers will avoid page breaking in the middle of this element.&lt;/p&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;However, this can become impossible to do if the element ever spans the full size of a page.&lt;/p&gt;
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				@media print {
					#unbrokenBox {
						page-break-inside: avoid;
					}
				}
			</style>
			<div id="unbrokenBox">
				<p>As long as it is possible, printers will avoid page breaking in the middle of this element.</p>
				<p>However, this can become impossible to do if the element ever spans the full size of a page.</p>
			</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>page-break-inside</code>:</h4>
		<dl>
			<dt><code>auto</code></dt>
			<dd>&#10551; The default value. Page breaking will be determined automatically.</dd>
			<dt><code>avoid</code></dt>
			<dd>&#10551; If possible, page breaking will be avoided within this element.</dd>
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
