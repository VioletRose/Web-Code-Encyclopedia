<?php
    $PAGE_NAME = 'white-space';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to control how whitespace (meaning tab characters or multiple space characters in a row) and text wrapping function within the specified element. Regardless of wrap settings, the <a href="/html/br.php"><code>&lt;br&gt;</code></a> tag will always be respected.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#whitespaceBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;white-space: pre-wrap;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 300px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#whitespaceBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;white-space: nowrap;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="whitespaceBox"&gt;Tab&#9;characters&#9;are&#9;being&#9;used&#9;for&#9;spaces&#9;within&#9;this&#9;box,&#9;as&#9;well&lt;br&gt;&#9;as&#9;a&#9;couple&#9;of&#9;random&#9;line&#9;breaks,&#9;but&#9;text&#9;still&#9;wraps.&#9;Mouse&#9;over&#9;it&#9;to&#9;see&#9;&lt;br&gt;the&#9;opposite&#9;behavior!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#whitespaceBox {
					white-space: pre-wrap;
					width: 300px;
				}
				#whitespaceBox:hover {
					white-space: nowrap;
				}
			</style>
			<div id="whitespaceBox">Tab&#9;characters&#9;are&#9;being&#9;used&#9;for&#9;spaces&#9;within&#9;this&#9;box,&#9;as&#9;well
<!--			-->&#9;as&#9;a&#9;couple&#9;of&#9;random&#9;line&#9;breaks,&#9;but&#9;text&#9;still&#9;wraps.&#9;Mouse&#9;over&#9;it&#9;to&#9;see&#9;
<!--			-->the&#9;opposite&#9;behavior!<!--
			--></div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>white-space</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>&#10551; The default value. Whitespace renders as a single space, text wraps to the next line when it reaches the opposite edge of the element, but not if a line break is present in the HTML document.</dd>
			<dt><code>nowrap</code></dt>
			<dd>&#10551; Whitespace renders as a single space, but text continues without wrapping, overflowing its containing element if necessary, even if a line break is present in the HTML document.</dd>
			<dt><code>pre</code></dt>
			<dd>&#10551; Whitespace displays exactly as written in the HTML document, and text continues without wrapping unless a line break is present in the HTML document.</dd>
			<dt><code>pre-line</code></dt>
			<dd>&#10551; Whitespace renders as a single space, text wraps to the next line when possible, and text also wraps if a line break is present in the HTML document.</dd>
			<dt><code>pre-wrap</code></dt>
			<dd>&#10551; Whitespace displays exactly as written in the HTML document, and text wraps to the next line when possible, or if a line break is present in the HTML document.</dd>
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
