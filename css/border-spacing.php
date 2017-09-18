<?php
    $PAGE_NAME = 'border-spacing';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property allows you to set the spacing between borders inside a <code>&lt;table&gt;</code> element.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#spacedTable {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-spacing: 10px 30px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;table border="1" id="spacedTable"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;This&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;table's&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;borders&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;are&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;spaced&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;10px&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;horizontal,&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;30px&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;vertical&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
				<br>
				&lt;/table&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#spacedTable {
					border-spacing: 10px 30px;
				}
			</style>
			<table border="1" id="spacedTable">
				<tr>
					<td>This</td>
					<td>table's</td>
					<td>borders</td>
				</tr>
				<tr>
					<td>are</td>
					<td>spaced</td>
					<td>10px</td>
				</tr>
				<tr>
					<td>horizontal,</td>
					<td>30px</td>
					<td>vertical</td>
				</tr>
			</table>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>border-spacing</code>:</h4>
		<dl>
			<dt><code><var>x-spacing</var> <var>y-spacing</var></code></dt>
			<dd>
				The spacing between borders.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x-spacing</var></code></dt>
						<dd>Required, numeric variable, in measurements, defaults to 2px. The horizontal spacing between borders.</dd>
						<dt><code><var>y-spacing</var></code></dt>
						<dd>Required, numeric variable, in measurements, defaults to the value of <code>x-spacing</code>. The vertical spacing between borders.</dd>
					</dl>
				</details>
				</dd>
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
