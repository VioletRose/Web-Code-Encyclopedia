<?php
    $PAGE_NAME = 'unicode-bidi';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Required property: <code><a href="/css/direction.php">direction</a></code></p>
		<p></p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#rtlBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;direction: rtl;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unicode-bidi: bidi-override;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#ltrBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;direction: ltr;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unicode-bidi: bidi-override;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="rtlBox "&gt;Right to left.&lt;/div&gt;
				<br>
				&lt;div id="ltrBox"&gt;左から右へ&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#rtlBox {
					direction: rtl;
					unicode-bidi: bidi-override;
				}
				#ltrBox {
					direction: ltr;
					unicode-bidi: bidi-override;
				}
			</style>
			<div id="rtlBox">Right to left.</div>
			<div id="ltrBox">左から右へ</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>unicode-bidi</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>The default value. The <code>direction</code> property's value is ignored.</dd>
			<dt><code>embed</code></dt>
			<dd>The <code>direction</code> property is used, but only governs punctuation and which side of the element text originates on, allowing for right-to-left text to be shown in the middle of a block of left-to-right text or vice versa, text direction being governed by how it's entered into the HTML document. Note that this only works if the element is being rendered inline.</dd>
			<dt><code>bidi-override</code></dt>
			<dd>If the element is rendered inline, functions identically to <code>embed</code>. In block elements, the direction of text is strictly governed by the <code>direction</code> property and nothing else, forcing all text within the element to render as <code>direction</code> dictates.</dd>
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
