<?php
    $PAGE_NAME = 'text-indent';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to define an amount of space that the first line of text in an element should be indented by. This only applies to the first line, and not to text after any subsequent line breaks.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#indentedP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-indent: 3em;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#indentedP:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-indent: 6em;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p id="indentedP"&gt;This text demonstrates an indentation amount. Mouse over it to see a different value!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#indentedP {
					text-indent: 3em;
				}
				#indentedP:hover {
					text-indent: 6em;
				}
			</style>
			<p id="indentedP">This text demonstrates an indentation amount. Mouse over it to see a different value!</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>text-indent</code>:</h4>
		<dl>
			<dt><code><var>indent</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements or percentages of the parent element's width; defaults to <code>0</code>. The amount of space the first line should be indented by.</dd>
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
