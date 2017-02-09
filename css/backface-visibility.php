<?php
    $PAGE_NAME = 'backface-visibility';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <a href="/css/transform.php"><code>transform</code></a></p>
		<p>This property allows an element that has been rotated to face away from the user to be hidden, instead of displaying in reverse as it normally does.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.rotatedp {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform: rotateY(180deg);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.hiddenBackface {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-moz-backface-visibility: hidden;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;backface-visibility: hidden;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p class="rotatedp"&gt;This paragraph is rotated 180° on its vertical axis!&lt;/p&gt;
				<br>
				&lt;p class="hiddenBackface rotatedp"&gt;This paragraph is rotated 180° on its vertical axis!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.rotatedp {
					transform: rotateY(180deg);
				}
				.hiddenBackface {
					-moz-backface-visibility: hidden;
					backface-visibility: hidden;
				}
			</style>
			<p class="rotatedp">This paragraph is rotated 180° on its vertical axis!</p>
			<p class="hiddenBackface rotatedp">This paragraph is rotated 180° on its vertical axis!</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>backface-visibility</code>:</h4>
		<dl>
			<dt><code>visible</code></dt>
			<dd>The default value. The element will be visible from behind while rotated.</dd>
			<dt><code>hidden</code></dt>
			<dd>The element will be invisible from behind while rotated.</dd>
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
