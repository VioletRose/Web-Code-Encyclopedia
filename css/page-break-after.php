<?php
    $PAGE_NAME = 'page-break-after';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Required rule: <code><a href="/css/media.php">@media</a></code></p>
		<p>This property allows you to instruct printers to change their page breaking behavior after specific elements on the page. Note that this property is not visibly displayed, and only affects printers.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;@media print {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.pageBreakPoint {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;page-break-after: always;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p class="pageBreakPoint"&gt;The printer will page break after each element with this class.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				@media print {
					.pageBreakPoint {
						page-break-after: always;
					}
				}
			</style>
			<p class="pageBreakPoint">The printer will page break after each element with this class.</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>page-break-after</code>:</h4>
		<dl>
			<dt><code>auto</code></dt>
			<dd>The default value. Page breaking will be determined automatically.</dd>
			<dt><code>always</code></dt>
			<dd>A page break will always be inserted after this element.</dd>
			<dt><code>avoid</code></dt>
			<dd>If possible, page breaking will be avoided after this element.</dd>
			<dt><code>left</code></dt>
			<dd>Inserts a page break after this element such that the next page is formatted as a left page.</dd>
			<dt><code>right</code></dt>
			<dd>Inserts a page break after this element such that the next page is formatted as a right page.</dd>
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
