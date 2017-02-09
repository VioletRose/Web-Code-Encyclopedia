<?php
    $PAGE_NAME = 'letter-spacing';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to define the amount of space between characters in an element's text.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#spacedLettersP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;letter-spacing: 5px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#spacedLettersP:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;letter-spacing: -5px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p id="spacedLettersP"&gt;Mouse over this text to see the spacing change!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#spacedLettersP {
					letter-spacing: 5px;
				}
				#spacedLettersP:hover {
					letter-spacing: -5px;
				}
			</style>
			<p id="spacedLettersP">Mouse over this text to see the spacing change!</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>letter-spacing</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>The default value, equivalent to <code>0</code>. Text will have the normal amount of spacing between letters.</dd>
			<dt><code><var>spacing</var></code></dt>
			<dd>Numeric variable, in measurements; negative numbers are allowed. The amount of added or reduced space between letters.</dd>
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
