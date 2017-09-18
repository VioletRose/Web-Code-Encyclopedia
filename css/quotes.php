<?php
    $PAGE_NAME = 'quotes';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Required property: <code><a href="/css/content.php">content</a></code></p>
		<p>This property allows you to specify which quotation marks will be used for the <code>open-quote</code> and <code>close-quote</code> values of <code>content</code>. Note that the HTML tag <code><a href="/html/q.php">q</a></code> uses those values by default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.quotesMarked {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quotes: "\AB" "\BB" "\2039" "\203A";
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p&gt;Sometimes, the generic &lt;q class="quotesMarked"&gt;quotation marks&lt;/q&gt; won't do, and you may even want something else special for &lt;q class="quotesMarked"&gt;quotation marks &lt;q class="quotesMarked"&gt;within&lt;/q&gt; quotation marks&lt;/q&gt;.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.quotesMarked {
					quotes: "\AB" "\BB" "\2039" "\203A";
				}
			</style>
			<p>Sometimes, the generic <q class="quotesMarked">quotation marks</q> won't do, and you may even want something else special for <q class="quotesMarked">quotation marks <q class="quotesMarked">within</q> quotation marks</q>.</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>quotes</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>Specifies that <code>open-quote</code> and <code>close-quote</code> will produce no quotation marks.</dd>
			<dt><code>"<var>open-mark-1</var>" "<var>close-mark-1</var>" "<var>open-mark-2</var>" "<var>close-mark-2</var>"</code></dt>
			<dd>
				The specific text values that will be used as quotation marks.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code>"<var>open-mark-1</var>"</code></dt>
						<dd>Required text variable; defaults to <code>"</code>. The character or string to be used to open the quotation.</dd>
						<dt><code>"<var>close-mark-1</var>"</code></dt>
						<dd>Required text variable; defaults to <code>"</code>. The character or string to be used to close the quotation.</dd>
						<dt><code>"<var>open-mark-2</var>"</code></dt>
						<dd>Optional text variable; defaults to <code>'</code>. The character or string to be used to open a quotation inside of another quotation.</dd>
						<dt><code>"<var>close-mark-2</var>"</code></dt>
						<dd>Optional text variable; defaults to <code>'</code>. The character or string to be used to close a quotation inside of another quotation.</dd>
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
		<h4>Commonly used quotation marks:</h4>
		<ul>
			<li>"&nbsp;&nbsp;&nbsp;&nbsp;"</li>
			<li>'&nbsp;&nbsp;&nbsp;&nbsp;'</li>
			<li>&#8249;&nbsp;&nbsp;&nbsp;&nbsp;&#8250;</li>
			<li>&#171;&nbsp;&nbsp;&nbsp;&nbsp;&#187;</li>
			<li>&#8216;&nbsp;&nbsp;&nbsp;&nbsp;&#8217;</li>
			<li>&#8220;&nbsp;&nbsp;&nbsp;&nbsp;&#8221;</li>
			<li>&#8220;&nbsp;&nbsp;&nbsp;&nbsp;&#8222;</li>
		</ul>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
