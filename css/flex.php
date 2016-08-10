<?php
    $PAGE_NAME = 'flex';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/display.php">display</a></code></p>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the sub-properties it sets allow you to control the initial size and relative grow/shrink rates of specified items inside a flex container. Note that under most normal circumstances, only one of these properties is needed, but setting all three reduces the possibility of edge cases where the normal behavior goes awry.</p>
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
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 75px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 116px;
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
				&nbsp;&nbsp;&nbsp;&nbsp;#flexSizedSquare {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flex: 1 0 auto;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#flexSizedSquare:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flex: 0.5 0.5 auto;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="flexBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare" id="flexSizedSquare"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;&lt;/div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="flexSquare"&gt;&lt;/div&gt;
				<br>
				&lt;/div&gt;
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
					height: 75px;
					width: 116px;
				}
				.flexSquare {
					border-color: black red lime blue;
					border-style: solid;
					height: 50px;
					width: 50px;
				}
				#flexSizedSquare {
					flex: 1 0 auto;
				}
				#flexSizedSquare:hover {
					flex: 0.5 0.5 auto;
				}
			</style>
			<div class="flexBox">
				<div class="flexSquare" id="flexSizedSquare"></div>
				<div class="flexSquare"></div>
				<div class="flexSquare"></div>
				<div class="flexSquare"></div>
			</div>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>flex</code>:</h4>
		<dl>
			<dt><code>flex-grow</code></dt>
			<dd>&#10551; Defines how much the item grows relative to the other items within the container.</dd>
			<dt><code>flex-shrink</code></dt>
			<dd>&#10551; Defines how much the item shrinks relative to other items within the container.</dd>
			<dt><code>flex-basis</code></dt>
			<dd>&#10551; Defines the initial size of the item.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>flex</code>:</h4>
		<dl>
			<dt><code><var>flex-grow</var> <var>flex-shrink</var> <var>flex-basis</var></code></dt>
			<dd>
				&#10551; The values that would normally be set through the associated, non-shorthand flex properties, in this order. Note that since all three accept numeric values, in order for any one to be set, the preceding values
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>flex-grow</var></code></dt>
						<dd>&#10551; Required. The value of <code>flex-grow</code>.</dd>
						<dt><code><var>flex-shrink</var></code></dt>
						<dd>&#10551; Optional. The value of <code>flex-shrink</code>.</dd>
						<dt><code><var>flex-basis</var></code></dt>
						<dd>&#10551; Optional. The value of <code>flex-basis</code>.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>auto</code></dt>
			<dd>&#10551; Equivalent to <code>1 1 auto</code>.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>none</code></dt>
			<dd>&#10551; Equivalent to <code>0 0 auto</code>.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>flex-grow</code>:</h4>
		<dl>
			<dt><code><var>rate</var></code></dt>
			<dd>&#10551; Numeric variable, in numbers which are treated as size multipliers; defaults to <code>0</code>. <code>1</code> is normal size.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>flex-shrink</code>:</h4>
		<dl>
			<dt><code><var>rate</var></code></dt>
			<dd>&#10551; Numeric variable, in numbers which are treated as size multipliers; defaults to <code>1</code>. <code>0</code> is normal size.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>flex-basis</code>:</h4>
		<dl>
			<dt><code><var>length</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements or percentages. Specifies the length (width for columns, height for rows) of the item.</dd>
			<dt><code>auto</code></dt>
			<dd>&#10551; The default value. The length is equal to the specified length of the item. If no length is specified, it is sized to match its content.</dd>
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
