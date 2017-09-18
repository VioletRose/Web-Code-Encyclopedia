<?php
    $PAGE_NAME = 'position';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property allows you to control how elements are positioned on the webpage. By default, every element is positioned according to its place in the document flow (as governed by the order of elements within the HTML document, and CSS rules affecting things like margins, padding, and block vs. inline display), and can only be moved by altering the document flow directly. However, with this rule, that restriction can be removed, allowing elements to be repositioned using other methods or criteria.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;@keyframes relativeSlide {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 0;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.positionedBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: white;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#absoluteBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-color: red;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 150px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position: absolute;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 0;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#fixedBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-color: yellow;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 250px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position: fixed;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 0;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 63px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#relativeBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;animation: relativeSlide 5s ease-in-out infinite alternate;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-color: green;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position: relative;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="positionedBox" id="absoluteBox"&gt;Absolute Box&lt;/div&gt;
				<br>
				&lt;div class="positionedBox" id="fixedBox"&gt;Fixed Box&lt;/div&gt;
				<br>
				&lt;div class="positionedBox" id="relativeBox"&gt;Relative Box&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				@keyframes relativeSlide {
					from {
						left: 0;
					}
					to {
						left: 94px;
					}
				}
				.positionedBox {
					background-color: white;
					border-style: solid;
					height: 94px;
					opacity: 0.5;
					width: 94px;
				}
				#absoluteBox {
					border-color: red;
					left: 150px;
					position: absolute;
					top: 0;
				}
				#fixedBox {
					border-color: yellow;
					left: 250px;
					position: fixed;
					top: 0;
					width: 63px;
				}
				#relativeBox {
					animation: relativeSlide 5s ease-in-out infinite alternate;
					border-color: green;
					position: relative;
				}
			</style>
			<div class="positionedBox" id="absoluteBox">Absolute Box</div>
			<div class="positionedBox" id="fixedBox">Fixed Box</div>
			<div class="positionedBox" id="relativeBox">Relative Box</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>position</code>:</h4>
		<dl>
			<dt><code>static</code></dt>
			<dd>The default value. Elements with this value render in their default position, based on their position in the HTML document and the CSS rules affecting the layout of the page.</dd>
			<dt><code>absolute</code></dt>
			<dd>The element is fully removed from the document flow, and appears 'floating' over its original place in the page unless given directional properties, in which case it moves along the appropriate axis relative to the top left corner of its most immediate relatively positioned ancestor. If no such element exists, it takes a position relative to the top left corner of the document itself.</dd>
			<dt><code>fixed</code></dt>
			<dd>Similar to <code>absolute</code> in terms of its initial position, except it moves to always stay in the same place within the browser window.</dd>
			<dt><code>relative</code></dt>
			<dd>The element is positioned relative to its normal position. Unless specifically made to move by other properties, this will appear identical to <code>static</code>, since relatively positioned elements still retain a normal place in the document flow, unlike absolutely positioned or fixed elements.</dd>
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
