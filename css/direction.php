<?php
    $PAGE_NAME = 'direction';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to use CSS to define whether the specified text is left to right, or right to left. Note that this does not change the facing of the letters, nor the order of words; it alters punctuation by moving sentence-ending characters, and changes which side of the page text originates from.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#rtlP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;direction: rtl;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p id="rtlP"&gt;This text begins on the right and proceeds to the left, where it will wrap to the right again.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#rtlP {
					direction: rtl;
				}
			</style>
			<p id="rtlP">This text begins on the right and proceeds to the left, where it will wrap to the right again.</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>direction</code>:</h4>
		<dl>
			<dt><code>ltr</code></dt>
			<dd>&#10551; The default value. Text is left to right.</dd>
			<dt><code>rtl</code></dt>
			<dd>&#10551; Text is right to left.</dd>
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
