<?php
    $PAGE_NAME = 'text-overflow';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/overflow.php">overflow</a></code></p>
		<p>This property allows you to assign a character to be displayed to inform the user when text outside the bounds of an element was hidden by the <code>overflow</code> property.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#textOverflowBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overflow: hidden;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-overflow: ellipsis;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;white-space: nowrap;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 294px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="textOverflowBox"&gt;This box is not large enough to contain all of the text inside.&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#textOverflowBox {
					border-style: solid;
					overflow: hidden;
					text-overflow: ellipsis;
					white-space: nowrap;
					width: 294px;
				}
			</style>
			<div id="textOverflowBox">This box is not large enough to contain all of the text inside.</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>text-overflow</code>:</h4>
		<dl>
			<dt><code>clip</code></dt>
			<dd>The default value. Text that overflows its container will simply be clipped with no indication that this was done.</dd>
			<dt><code>ellipsis</code></dt>
			<dd>&#10551 Renders an ellipsis (&#8230;) to indicate that text beyond a given point was hidden.</dd>
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
