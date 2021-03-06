<?php
    $PAGE_NAME = 'column-rule';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Required property: <code><a href="/css/columns.php">columns</a></code></p>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the sub-properties it sets allow you to place a rule (a dividing line) between columns of text.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#columnRuledP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-moz-column-rule: 7px ridge lavender;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;column-rule: 7px ridge lavender;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-moz-columns: 100px 2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;columns: 100px 2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max-width: 300px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p id="columnRuledP"&gt;This is a rather odd way of formatting text, considering the internet doesn't have any of the reasons for columned text that newspapers originally did. I'm sure, however, that there is an application for it somewhere, especially if a newspaper-like styling is the objective. Creativity and resourcefulness are never in short supply with the entire internet involved, after all!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#columnRuledP {
					-moz-column-rule: 7px ridge lavender;
					column-rule: 7px ridge lavender;
					-moz-columns: 100px 2;
					columns: 100px 2;
					max-width: 300px;
				}
			</style>
			<p id="columnRuledP">This is a rather odd way of formatting text, considering the internet doesn't have any of the reasons for columned text that newspapers originally did. I'm sure, however, that there is an application for it somewhere, especially if a newspaper-like styling is the objective. Creativity and resourcefulness are never in short supply with the entire internet involved, after all!</p>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>column-rule</code>:</h4>
		<dl>
			<dt><code>column-rule-width</code></dt>
			<dd>Defines the width of the rule.</dd>
			<dt><code>column-rule-style</code></dt>
			<dd>Defines the style of the rule.</dd>
			<dt><code>column-rule-color</code></dt>
			<dd>Defines the color of the rule.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>column-rule</code>:</h4>
		<dl>
			<dt><code><var>width</var> <var>style</var> <var>color</var></code></dt>
			<dd>
				The values that would normally be set through the associated, non-shorthand column-rule properties, in this order.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>width</var></code></dt>
						<dd>Optional. The value of <code>column-rule-width</code>.</dd>
						<dt><code><var>style</var></code></dt>
						<dd>Optional. The value of <code>column-rule-style</code>. Note that while this is not required in the declaration, the border will not display if this is not set here or elsewhere.</dd>
						<dt><code><var>color</var></code></dt>
						<dd>Optional. The value of <code>column-rule-color</code>.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>column-rule-width</code>:</h4>
		<dl>
			<dt><code>medium</code></dt>
			<dd>The default value. A rule 3px thick.</dd>
			<dt><code>thin</code></dt>
			<dd>A rule 1px thick.</dd>
			<dt><code>thick</code></dt>
			<dd>A rule 5px thick.</dd>
			<dt><code><var>width</var></code></dt>
			<dd>Numeric variable, in measurements. The width of the rule.</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>column-rule-style</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>The default value. No rule.</dd>
			<dt><code>hidden</code></dt>
			<dd>A rule that doesn't display.</dd>
			<dt><code>dotted</code></dt>
			<dd>A rule composed of squares with equal amounts of white space between them.</dd>
			<dt><code>dashed</code></dt>
			<dd>A rule composed of rectangles with equal amounts of white space between them.</dd>
			<dt><code>solid</code></dt>
			<dd>A rule composed of a single solid line.</dd>
			<dt><code>double</code></dt>
			<dd>A rule composed of two smaller solid lines with white space in between them.</dd>
			<dt><code>groove</code></dt>
			<dd>A rule composed of four solid lines, two of the normal color and two a darker color, simulating a 3-dimensional groove.</dd>
			<dt><code>ridge</code></dt>
			<dd>A rule composed of four solid lines, two of the normal color and two a darker color, simulating a 3-dimensional ridge.</dd>
			<dt><code>inset</code></dt>
			<dd>A rule composed of two solid lines, one of the normal color and one a darker color, simulating a depressed button.</dd>
			<dt><code>outset</code></dt>
			<dd>A rule composed of two solid lines, one of the normal color and one a darker color, simulating a raised button.</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>column-rule-color</code>:</h4>
		<dl>
			<dt><code><var>color</var></code></dt>
			<dd>Color variable. Defaults to rgb(0, 0, 0).</dd>
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
