<?php
    $PAGE_NAME = 'CSS Template';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/display.php">display</a></code></p>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the sub-properties it sets allow you to control the direction and ordering of items within a flex container.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
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
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 216px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 216px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.flexSquare {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-color: black red lime blue;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 50px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 50px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#flowingFlexBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flex-flow: row-reverse wrap;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#flowingFlexBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flex-flow: column-reverse wrap-reverse
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="flexBox" id="flowingFlexBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;1&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;2&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;3&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;4&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;5&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;6&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;7&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;8&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;9&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;10&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;11&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;12&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;13&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;14&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;15&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;16&lt;/div&gt;
				<br>
				&lt;/div&gt;
				<br>
				&lt;p&gt;Mouse over the box to see the order change!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				.flexBox {
					border: ridge lightgray;
					display: flex;
					padding: 5px;
					height: 216px;
					width: 216px;
				}
				.flexSquare {
					border-color: black red lime blue;
					border-style: solid;
					height: 50px;
					width: 50px;
				}
				#flowingFlexBox {
					flex-flow: row-reverse wrap;
				}
				#flowingFlexBox:hover {
					flex-flow: column-reverse wrap-reverse
				}
			</style>
			<div class="flexBox" id="flowingFlexBox">
				<div class="flexSquare">1</div>
				<div class="flexSquare">2</div>
				<div class="flexSquare">3</div>
				<div class="flexSquare">4</div>
				<div class="flexSquare">5</div>
				<div class="flexSquare">6</div>
				<div class="flexSquare">7</div>
				<div class="flexSquare">8</div>
				<div class="flexSquare">9</div>
				<div class="flexSquare">10</div>
				<div class="flexSquare">11</div>
				<div class="flexSquare">12</div>
				<div class="flexSquare">13</div>
				<div class="flexSquare">14</div>
				<div class="flexSquare">15</div>
				<div class="flexSquare">16</div>
			</div>
			<p>Mouse over the box to see the order change!</p>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code></code>:</h4>
		<dl>
			<dt><code>flex-direction</code></dt>
			<dd>&#10551; This property allows you to change the direction of item sorting within a flex container.</dd>
			<dt><code>flex-wrap</code></dt>
			<dd>&#10551; This property allows you to specify whether items within a flex container wrap, and if so, which direction.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>flex-flow</code>:</h4>
		<dl>
			<dt><code><var>direction</var> <var>wrap</var></code></dt>
			<dd>
				&#10551; The values that would normally be set through the associated, non-shorthand animation properties, in this order.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>direction</var></code></dt>
						<dd>&#10551; Optional. The value of <code>flex-direction</code>.</dd>
						<dt><code><var>wrap</var></code></dt>
						<dd>&#10551; Optional. The value of <code>flex-wrap</code>.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>flex-direction</code>:</h4>
		<dl>
			<dt><code>row</code></dt>
			<dd>&#10551; The default value. Items are displayed in horizontal rows.</dd>
			<dt><code>row-reverse</code></dt>
			<dd>&#10551; Items are displayed in reversed horizontal rows.</dd>
			<dt><code>column</code></dt>
			<dd>&#10551; Items are displayed in vertical columns.</dd>
			<dt><code>column-reverse</code></dt>
			<dd>&#10551; Items are displayed in reversed vertical columns.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>flex-wrap</code>:</h4>
		<dl>
			<dt><code>nowrap</code></dt>
			<dd>&#10551; The default value. Items will not wrap, extending past the bounds of the container if necessary.</dd>
			<dt><code>wrap</code></dt>
			<dd>&#10551; Items will wrap to a new line upon reaching the edge of the container.</dd>
			<dt><code>wrap-reverse</code></dt>
			<dd>&#10551; Items will wrap to a new line upon reaching the edge of the container, but right-to-left for rows, and bottom-to-top for columns.</dd>
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
