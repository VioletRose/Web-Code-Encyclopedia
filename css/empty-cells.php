<?php
    $PAGE_NAME = 'empty-cells';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property allows you to specify that empty cells within a table should not display backgrounds or borders, effectively hiding them from view. However, while the border will be hidden, since border width and padding are still present, the empty cells continue to have an effect on table layout even if an entire row is empty. Note: this property does nothing if <code>border-collapse</code> is set to <code>collapse</code>.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#emptyCelledTable:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-collapse: separate;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;empty-cells: hide;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;table border="1" id="emptyCelledTable"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;caption&gt;You can mouse over the table to see the effects!&lt;/caption&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;This&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;table&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;is&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;44.4%&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;empty&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;&lt;/td&gt;
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
				#emptyCelledTable:hover {
					border-collapse: separate;
					empty-cells: hide;
				}
			</style>
			<table border="1" id="emptyCelledTable">
				<caption>You can mouse over the table to see the effects!</caption>
				<tr>
					<td>This</td>
					<td>table</td>
					<td>is</td>
				</tr>
				<tr>
					<td>44.4%</td>
					<td>empty</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code></code>:</h4>
		<dl>
			<dt><code>show</code></dt>
			<dd>The default value. Background and border are shown for empty cells.</dd>
			<dt><code>hide</code></dt>
			<dd>Background and border are hidden for empty cells.</dd>
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
