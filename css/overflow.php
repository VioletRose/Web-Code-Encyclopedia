<?php
    $PAGE_NAME = 'overflow';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the sub-properties it sets allow you to define how an element behaves when its content becomes larger than its own boundaries. Note that unlike all other shorthand properties, <code>overflow</code> simply sets both of its sub-properties at the same time, rather than allowing individually different settings for each of them.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#overflowBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: 3px solid black;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overflow: auto;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#overflowXBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: red;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 25px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 200px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#overflowYBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: blue;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 175px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 25px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#overflowXBox:hover, #overflowYBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: none;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="overflowBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div id="overflowXBox"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div id="overflowYBox"&gt;&lt;/div&gt;
				<br>
				&lt;/div&gt;
				<br>
				&lt;p&gt;Mousing over the colored boxes will make them disappear. Use this to see how the scroll bars disappear if they're no longer needed!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#overflowBox {
					border: 3px solid black;
					height: 94px;
					overflow: auto;
					width: 94px;
				}
				#overflowXBox {
					background-color: red;
					height: 25px;
					width: 200px;
				}
				#overflowYBox {
					background-color: blue;
					height: 175px;
					width: 25px;
				}
				#overflowXBox:hover, #overflowYBox:hover {
					height: 25px;
					width: 25px;
				}
			</style>
			<div id="overflowBox">
				<div id="overflowXBox"></div>
				<div id="overflowYBox"></div>
			</div>
			<p>Mousing over the colored boxes will make them smaller. Use this to see how the scroll bars disappear if they're no longer needed!</p>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>overflow</code>:</h4>
		<dl>
			<dt><code>overflow-x</code></dt>
			<dd>Defines the horizontal overflow behavior of the element.</dd>
			<dt><code>overflow-y</code></dt>
			<dd>Defines the vertical overflow behavior of the element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>overflow</code>, <code>overflow-x</code>, and <code>overflow-y</code>:</h4>
		<dl>
			<dt><code>visible</code></dt>
			<dd>The default value. Overflowing content simply displays outside of the element - obviously an undesirable result, but it can be useful for debugging, to more immediately see the problem.</dd>
			<dt><code>hidden</code></dt>
			<dd>Overflowing content is simply hidden and unviewable.</dd>
			<dt><code>scroll</code></dt>
			<dd>Overflowing content is hidden, but a scroll bar is added to the element. Note that the scroll bar appears whether or not any overflow occurs.</dd>
			<dt><code>auto</code></dt>
			<dd>Similar to <code>scroll</code>, but the scroll bar only appears if content actually overflows.</dd>
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
