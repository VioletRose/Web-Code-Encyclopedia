<?php
    $PAGE_NAME = 'visibility';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to control the visibility of a specified element, showing or hiding it without affecting the layout of the page.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#hiddenP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;visibility: hidden;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p&gt;The text in this paragraph is visible.&lt;/p&gt;
				<br>
				&lt;p id="hiddenP"&gt;The text in this paragraph is invisible.&lt;/p&gt;
				<br>
				&lt;p&gt;The text in this paragraph is visible again.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#hiddenP {
					visibility: hidden;
				}
			</style>
			<p>The text in this paragraph is visible.</p>
			<p id="hiddenP">The text in this paragraph is invisible.</p>
			<p>The text in this paragraph is visible again.</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>visibility</code>:</h4>
		<dl>
			<dt><code>visible</code></dt>
			<dd>The default value. The element displays as normal.</dd>
			<dt><code>hidden</code></dt>
			<dd>The element does not display, but the page's layout remains the same, still leaving empty space where the hidden element was. Additionally, this property doesn't automatically pass down to children of the hidden element.</dd>
			<dt><code>collapse</code></dt>
			<dd>In theory, this value only applies to sub-elements of tables, and hides them while allowing the space they occupied to be taken by other table elements. However, in practice this value doesn't work in multiple major browsers and is best not ever used.</dd>
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
