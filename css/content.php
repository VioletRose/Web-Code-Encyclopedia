<?php
    $PAGE_NAME = 'content';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property allows you to insert pseudo-elements before or after a specified element, which appear normally but are not actually part of the HTML document and can't be seen by scripts. Note that <code>content</code> may only be used with the <code>::before</code> and <code>::after</code> selectors.
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#postContentP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;counter-increment: pCounter
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#postContentP::after {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;content: " pCounter = " open-quote counter(pCounter) close-quote " Tag ID = " open-quote attr(id) close-quote " " url(/images/violetflower.png);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p id="postContentP"&gt;The following is a demonstration of the &lt;code&gt;content&lt;/code&gt; property.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#postContentP {
					counter-increment: pCounter
				}
				#postContentP::after {
					display: block;
					content: "pCounter = " open-quote counter(pCounter) close-quote "\A Tag ID = " open-quote attr(id) close-quote "\A" url(/images/violetflower.png);
					white-space: pre;
				}
			</style>
			<p id="postContentP">The following is a demonstration of the <code>content</code> property.</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>content</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>Exclusive value; the default value. Sets the added content to the default value, which is nothing.</dd>
			<dt><code>none</code></dt>
			<dd>Exclusive value. No content will be added.</dd>
			<dt><code>counter(<var>Counter</var>)</code></dt>
			<dd>
				Additive value. The value of a specified CSS counter will be added. Since CSS counters increment as the document is rendered, the value will depend on where the content is placed.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>counter</var></code></dt>
						<dd>The id of a CSS counter defined by <code><a href="/css/counter-increment.php">counter-increment</a></code> or <code><a href="/css/counter-reset.php">counter-reset</a></code>.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>attr(<var>attribute</var>)</code></dt>
			<dd>
				Additive value. The value of an HTML attribute will be added (as text).
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>attribute</var></code></dt>
						<dd>A specific HTML attribute of the selected element.</dd>
					</dl>
				</details>
			</dd>
			<dt><code><var>text</var></code></dt>
			<dd>Additive value. Text variable. The string to be added.</dd>
			<dt><code>open-quote</code></dt>
			<dd>Additive value. An opening quotation mark will be added. Note that due to widespread use of the " character for both opening and closing quotes, web browsers typically just insert a generic quotation mark instead of a specific type.</dd>
			<dt><code>close-quote</code></dt>
			<dd>Additive value. A closing quotation mark will be added. Has no effect without <code>open-quote</code> being used first.</dd>
			<dt><code>no-open-quote</code></dt>
			<dd>Additive value. No opening quotation mark will be added.</dd>
			<dt><code>no-close-quote</code></dt>
			<dd>Additive value. No closing quotation mark will be added.</dd>
			<dt><code>url(<var>URL</var>)</code></dt>
			<dd>
				Additive value. The content of the URL will be inserted, if it is an image or media file the browser recognizes.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>URL</var></code></dt>
						<dd>URL variable. The address of the content to be added.</dd>
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
