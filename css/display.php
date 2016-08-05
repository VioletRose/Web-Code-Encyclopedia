<?php
    $PAGE_NAME = 'display';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to change how an element displays within the layout of the webpage, in terms of how it positions related to other elements, or even hide it completely.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.cellP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: inherit;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: table-cell;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.headerDiv {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: inherit;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: table-header-group;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vertical-align: middle;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.noneSpan {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: inherit;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: none;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.rowDiv {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: inherit;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: table-row;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.thP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: inherit;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: table-cell;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-weight: bold;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-align: center;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#captionH4 {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: table-caption;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;margin: 0;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-align: center;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#tableDiv {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: 1px outset gray;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-spacing: 2px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: table;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="tableDiv"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4 id="captionH4"&gt;Table Caption&lt;/h4&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="headerDiv"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="rowDiv"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p class="thP"&gt;First heading&lt;span class="noneSpan"&gt;, the header&lt;/span&gt;.&lt;/p&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p class="thP"&gt;Second heading&lt;span class="noneSpan"&gt;, the header&lt;/span&gt;.&lt;/p&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="rowDiv"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p class="cellP"&gt;First cell&lt;span class="noneSpan"&gt;, first row &lt;/span&gt;.&lt;/p&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p class="cellP"&gt;Second cell&lt;span class="noneSpan"&gt;, first row &lt;/span&gt;.&lt;/p&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="rowDiv"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p class="cellP"&gt;First cell&lt;span class="noneSpan"&gt;, second row &lt;/span&gt;.&lt;/p&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p class="cellP"&gt;Second cell&lt;span class="noneSpan"&gt;, second row &lt;/span&gt;.&lt;/p&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				.cellP {
					border: inherit;
					display: table-cell;
				}
				.headerDiv {
					border: inherit;
					display: table-header-group;
					vertical-align: middle;
				}
				.noneSpan {
					border: inherit;
					display: none;
				}
				.rowDiv {
					border: inherit;
					display: table-row;
				}
				.thP {
					border: inherit;
					display: table-cell;
					font-weight: bold;
					text-align: center;
				}
				#captionH4 {
					display: table-caption;
					margin: 0;
					text-align: center;
				}
				#tableDiv {
					border: 1px outset gray;
					border-spacing: 2px;
					display: table;
				}
			</style>
			<div id="tableDiv">
				<h4 id="captionH4">Table Caption</h4>
				<div class="headerDiv">
					<div class="rowDiv">
						<p class="thP">First heading<span class="noneSpan">, the header</span>.</p>
						<p class="thP">Second heading<span class="noneSpan">, the header</span>.</p>
					</div>
				</div>
				<div class="rowDiv">
					<p class="cellP">First cell<span class="noneSpan">, first row </span>.</p>
					<p class="cellP">Second cell<span class="noneSpan">, first row </span>.</p>
				</div>
				<div class="rowDiv">
					<p class="cellP">First cell<span class="noneSpan">, second row </span>.</p>
					<p class="cellP">Second cell<span class="noneSpan">, second row </span>.</p>
				</div>
			</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>display</code>:</h4>
		<dl>
			<dt><code>inline</code></dt>
			<dd>&#10551; The element displays inline, seamlessly integrating with text.</dd>
			<dt><code>block</code></dt>
			<dd>&#10551; The element displays as a block, requiring itself to be on a new line.</dd>
			<dt><code>flex</code></dt>
			<dd>&#10551; The element displays as a flex block, which behaves as a normal block but causes child elements to position themselves within it according on the flex property values.</dd>
			<dt><code>inline-block</code></dt>
			<dd>&#10551; The element displays as an inline block, which does not require a new line for itself, but can have a width and height that push other elements away.</dd>
			<dt><code>inline-flex</code></dt>
			<dd>&#10551; The element displays as an inline flex block, which behaves as an inline block but causes child elements to position themselves within it according to the flex property values.</dd>
			<dt><code>inline-table</code></dt>
			<dd>&#10551; The element displays as an inline table, a container for other table components.</dd>
			<dt><code>list-item</code></dt>
			<dd>&#10551; The element displays as a list entry.</dd>
			<dt><code>run-in</code></dt>
			<dd>&#10551; The element displays as inline or a block depending on context; specifically, if it precedes a block element, it will display as if it were an inline child of that element.</dd>
			<dt><code>table</code></dt>
			<dd>&#10551; The element displays as a table block, a container for other table components.</dd>
			<dt><code>table-caption</code></dt>
			<dd>&#10551; The element displays as a table caption, positioning itself appropriately within a table.</dd>
			<dt><code>table-column-group</code></dt>
			<dd>&#10551; The element displays as a table column group, positioning itself appropriately within a table.</dd>
			<dt><code>table-header-group</code></dt>
			<dd>&#10551; The element displays as a table header group, positioning itself appropriately within a table.</dd>
			<dt><code>table-footer-group</code></dt>
			<dd>&#10551; The element displays as a table footer group, positioning itself appropriately within a table.</dd>
			<dt><code>table-row-group</code></dt>
			<dd>&#10551; The element displays as a table row group, positioning itself appropriately within a table.</dd>
			<dt><code>table-cell</code></dt>
			<dd>&#10551; The element displays as a table cell, positioning itself appropriately within a table.</dd>
			<dt><code>table-column</code></dt>
			<dd>&#10551; The element displays as a table column, positioning itself appropriately within a table.</dd>
			<dt><code>table-row</code></dt>
			<dd>&#10551; The element displays as a table row, positioning itself appropriately within a table.</dd>
			<dt><code>none</code></dt>
			<dd>&#10551; The element does not display at all.</dd>
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
