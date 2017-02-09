<?php
    $PAGE_NAME = 'order';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/display.php">display</a></code></p>
		<p>This property allows you to define a specific order for elements inside of a flex container. Note that any elements in the container that do not have the <code>order</code> property defined will appear before any ordered elements, in their natural order. Also note that this does not override properties that reverse or otherwise change the order of elements inside a flex container - the ordered items will appear first, second, third etc. within the new pattern.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.flexBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: ridge lightgray;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: flex;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;padding: 5px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 55px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 205px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.flexSquare {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-color: black red lime blue;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 44px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 44px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#flexSquare1 {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;order: 1;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#flexSquare2 {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;order: 2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#flexSquare3 {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;order: 3;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#flexSquare4 {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;order: 4;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="flexBox" id="flowingFlexBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare" id="flexSquare4"&gt;1&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare" id="flexSquare1"&gt;2&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare" id="flexSquare2"&gt;3&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare" id="flexSquare3"&gt;4&lt;/div&gt;
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.flexBox {
					border: ridge lightgray;
					display: flex;
					padding: 5px;
					height: 55px;
					width: 205px;
				}
				.flexSquare {
					border-color: black red lime blue;
					border-style: solid;
					height: 44px;
					width: 44px;
				}
				#flexSquare1 {
					order: 1;
				}
				#flexSquare2 {
					order: 2;
				}
				#flexSquare3 {
					order: 3;
				}
				#flexSquare4 {
					order: 4;
				}
			</style>
			<div class="flexBox" id="flowingFlexBox">
				<div class="flexSquare" id="flexSquare4">1</div>
				<div class="flexSquare" id="flexSquare1">2</div>
				<div class="flexSquare" id="flexSquare2">3</div>
				<div class="flexSquare" id="flexSquare3">4</div>
			</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>order</code>:</h4>
		<dl>
			<dt><code><var>order</var></code></dt>
			<dd>Numeric value, in numbers; defaults to <code>0</code>. Defines the element's place within the flex container, overriding the normal order which is governed by which appears first in the HTML document.</dd>
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
