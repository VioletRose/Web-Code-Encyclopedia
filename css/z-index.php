<?php
    $PAGE_NAME = 'z-index';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/position.php">position</a></code></p>
		<p>This property allows you to define a stack order/priority, effectively which one is 'highest' for display purposes, for elements detached from the document flow with <code>position</code>.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.hoverSquare {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: limegreen;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position: absolute;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#hoverBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: solid #bd54ff;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 194px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position: relative;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 194px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#zIndexNegative1 {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;right: 200px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 0;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;z-index: -1;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#zIndex0 {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 0px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 0px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;z-index: 0;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#zIndex1 {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 20px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 20px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;z-index: 1;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#zIndex2 {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 40px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 40px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;z-index: 2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#zIndex3 {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 60px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 60px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;z-index: 3;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="hoverBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="hoverSquare" id="zIndex3"&gt;3&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="hoverSquare" id="zIndex2"&gt;2&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="hoverSquare" id="zIndex1"&gt;1&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="hoverSquare" id="zIndex0"&gt;0&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="hoverSquare" id="zIndexNegative1"&gt;-1&lt;/div&gt;
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.hoverSquare {
					background-color: limegreen;
					border-style: solid;
					height: 94px;
					position: absolute;
					width: 94px;
				}
				#hoverBox {
					border: solid #bd54ff;
					height: 194px;
					position: relative;
					width: 194px;
				}
				#zIndexNegative1 {
					right: 200px;
					top: 0;
					z-index: -1;
				}
				#zIndex0 {
					left: 0px;
					top: 0px;
					z-index: 0;
				}
				#zIndex1 {
					left: 20px;
					top: 20px;
					z-index: 1;
				}
				#zIndex2 {
					left: 40px;
					top: 40px;
					z-index: 2;
				}
				#zIndex3 {
					left: 60px;
					top: 60px;
					z-index: 3;
				}
			</style>
			<div id="hoverBox">
				<div class="hoverSquare" id="zIndex3">3</div>
				<div class="hoverSquare" id="zIndex2">2</div>
				<div class="hoverSquare" id="zIndex1">1</div>
				<div class="hoverSquare" id="zIndex0">0</div>
				<div class="hoverSquare" id="zIndexNegative1">-1</div>
			</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>z-index</code>:</h4>
		<dl>
			<dt><code>auto</code></dt>
			<dd>&#10551; The default value. Elements detached from the document flow stack with those closer to the beginning of the HTML document being lower; however, this value also results in the element taking the same place in the order as its parent, if meaningful.</dd>
			<dt><code><var>order</var></code></dt>
			<dd>&#10551; Numeric variable, in whole numbers. A negative value allows elements detached from the document flow, which normally 'hover' over the page, to display behind all of the normal page content, while <code>0</code> produces results identical to <code>auto</code>, and higher values result in increasing priority.</dd>
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
