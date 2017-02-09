<?php
    $PAGE_NAME = 'tab-size';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/white-space.php">white-space</a></code></p>
		<p>This property allows you to define the size of a tab character within elements with <code>white-space</code> set to <code>pre</code> or <code>pre-wrap</code>. Certain HTML elements, such as <code><a href="/html/pre.php">pre</a></code>, by default. Note that the length of tab characters frequently displays in an inconsistent way, especially with multiple of them close to one another; the results of this property may not be as expected.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#tabSizedPre:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-moz-tab-size: 2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tab-size: 2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;pre id="tabSizedPre"&gt;This&amp;#9;box&amp;#9;uses&amp;#9;tabs&amp;#9;as&amp;#9;spaces.&amp;#9;Mouse&amp;#9;over&amp;#9;to&amp;#9;change&amp;#9;their&amp;#9;size!&lt;/pre&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#tabSizedPre:hover {
					-moz-tab-size: 2;
					tab-size: 2;
				}
			</style>
			<pre id="tabSizedPre">This&#9;box&#9;uses&#9;tabs&#9;as&#9;spaces.&#9;Mouse&#9;over&#9;to&#9;change&#9;their&#9;size!</pre>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>tab-size</code>:</h4>
		<dl>
			<dt><code><var>spaces</var></code></dt>
			<dd>Numeric variable, in whole numbers; defaults to <code>8</code>. Specifies how many spaces are used to represent a single tab character within the element.</dd>
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
