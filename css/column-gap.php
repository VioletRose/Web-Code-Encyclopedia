<?php
    $PAGE_NAME = 'column-gap';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Required property: <code><a href="/css/columns.php"></a></code></p>
		<p>This property allows you to define the amount of empty space between text columns. However, it does resize responsively, and will only supply as much gap as it can without overflowing its container.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#setGapP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-moz-column-gap: 500px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;column-gap: 500px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-moz-columns: 100px 2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;columns: 100px 2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p id="setGapP"&gt;This is a rather odd way of formatting text, considering the internet doesn't have any of the reasons for columned text that newspapers originally did. I'm sure, however, that there is an application for it somewhere, especially if a newspaper-like styling is the objective. Creativity and resourcefulness are never in short supply with the entire internet involved, after all!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#setGapP {
					-moz-column-gap: 500px;
					column-gap: 500px;
					-moz-columns: 100px 2;
					columns: 100px 2;
				}
			</style>
			<p id="setGapP">This is a rather odd way of formatting text, considering the internet doesn't have any of the reasons for columned text that newspapers originally did. I'm sure, however, that there is an application for it somewhere, especially if a newspaper-like styling is the objective. Creativity and resourcefulness are never in short supply with the entire internet involved, after all!</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>column-gap</code>:</h4>
		<dl>
			<dt><code><var>gap</var></code></dt>
			<dd>Numeric variable, in measurements. The amount of space between text columns.</dd>
			<dt><code>normal</code></dt>
			<dd>The default value. Columns will have a normal amount of space between them as determined by the browser, usually around 1em.</dd>
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
