<?php
    $PAGE_NAME = 'word-break';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to control where lines break during automatic line wrapping. This is often used for any element that might have user-generated or otherwise loosely controlled content in it, to prevent extremely long text strings with no spaces or hyphens from overflowing their containers.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#wordBreakBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 300px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;word-break: keep-all;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#wordBreakAllBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 300px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;word-break: break-all;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="wordBreakBox"&gt;The text in this container will only wrap where a space-or-a-hyphen-is-present-to-signal-an-opportunity, evenifforsomereasonthatsituationneveractuallyarisesandthecontainerhasnochoicebuttooverflow.&lt;/div&gt;
				<br>
				&lt;div id="wordBreakAllBox"&gt;The text in this container will wrap wherever and whenever it needs to, on-encountering-hyphens-or-alternatively-in-the-middle-of-any-given-word, evenifnostandardbreakopportunitypresentsitselfduringaverylonguninterruptedtextstring.&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#wordBreakBox {
					border-style: solid;
					width: 300px;
					word-break: keep-all;
				}
				#wordBreakAllBox {
					border-style: solid;
					width: 300px;
					word-break: break-all;
				}
			</style>
			<div id="wordBreakBox">The text in this container will only wrap where a space-or-a-hyphen-is-present-to-signal-an-opportunity, evenifforsomereasonthatsituationneveractuallyarisesandthecontainerhasnochoicebuttooverflow.</div>
			<div id="wordBreakAllBox">The text in this container will wrap wherever and whenever it needs to, on-encountering-hyphens-or-alternatively-in-the-middle-of-any-given-word, evenifnostandardbreakopportunitypresentsitselfduringaverylonguninterruptedtextstring.</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>word-break</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>&#10551; The default value. Lines break according to their default rules.</dd>
			<dt><code>break-all</code></dt>
			<dd>&#10551; Lines break when they reach the end of the element, even if that means breaking in the middle of words.</dd>
			<dt><code>keep-all</code></dt>
			<dd>&#10551; Lines cannot break in the middle of words under any circumstances.</dd>
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
