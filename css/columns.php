<?php
    $PAGE_NAME = 'columns';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the sub-properties it sets allow you to divide text within an element into columns, much like a newspaper.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#columnedP {
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
				&lt;p id="columnedP"&gt;This is a rather odd way of formatting text, considering the internet doesn't have any of the reasons for columned text that newspapers originally did. I'm sure, however, that there is an application for it somewhere, especially if a newspaper-like styling is the objective. Creativity and resourcefulness are never in short supply with the entire internet involved, after all!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#columnedP {
					-moz-columns: 100px 2;
					columns: 100px 2;
					max-width: 300px;
				}
			</style>
			<p id="columnedP">This is a rather odd way of formatting text, considering the internet doesn't have any of the reasons for columned text that newspapers originally did. I'm sure, however, that there is an application for it somewhere, especially if a newspaper-like styling is the objective. Creativity and resourcefulness are never in short supply with the entire internet involved, after all!</p>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>columns</code>:</h4>
		<dl>
			<dt><code>column-width</code></dt>
			<dd>Defines the width of text columns.</dd>
			<dt><code>column-count</code></dt>
			<dd>Defines the number of text columns.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>columns</code>:</h4>
		<dl>
			<dt><code>auto</code></dt>
			<dd>The default value. Sets <code>column-width</code> and <code>column-count</code> to <code>auto</code>.</dd>
			<dt><code><var>width</var> <var>count</var></code></dt>
			<dd>
				The values that would normally be set through the associated, non-shorthand background properties, in this order.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>width</var></code></dt>
						<dd>Optional. The value of <code>column-width</code>.</dd>
						<dt><code><var>count</var></code></dt>
						<dd>Optional. The value of <code>column-count</code>.</dd>
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
		<h4>Accepted values of <code>column-width</code>:</h4>
		<dl>
			<dt><code>auto</code></dt>
			<dd>The default value. The width of columns will be determined by the browser.</dd>
			<dt><code><var>width</var></code></dt>
			<dd>Numeric variable, in measurements. The width of each text column.</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>column-count</code>:</h4>
		<dl>
			<dt><code><var>count</var></code></dt>
			<dd>Numeric variable, in whole numbers. The number of text columns the text should be separated into.</dd>
			<dt><code>auto</code></dt>
			<dd>The default value. The number of columns will be automatically determined using the value of <code>column-width</code>.</dd>
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
