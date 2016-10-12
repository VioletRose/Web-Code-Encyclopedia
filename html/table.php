<?php
    $PAGE_NAME = '&lt;table&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This element contains the formatting for an HTML table, which is controlled by several other tags within the element.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;table border="1"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;caption&gt;07/07/16 status of Web Encyclopedia&lt;/caption&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;thead&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Page statistics&lt;/th&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th scope="col"&gt;HTML&lt;/th&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th scope="col"&gt;CSS&lt;/th&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th scope="col"&gt;Javascript&lt;/th&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/thead&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;tfoot&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Total pages&lt;/th&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;77&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tfoot&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;tbody&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th scope="row"&gt;Pages complete&lt;/th&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;66&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th scope="row"&gt;Pages incomplete&lt;/th&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;4&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th scope="row"&gt;Pages needing updates&lt;/th&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;7&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tbody&gt;
				<br>
				&lt;/table&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<table border="1">
				<caption>07/07/16 status of Web Encyclopedia</caption>
				<thead>
					<tr>
						<th>Page statistics</th>
						<th scope="col">HTML</th>
						<th scope="col">CSS</th>
						<th scope="col">Javascript</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Total pages</th>
						<td>77</td>
						<td>0</td>
						<td>0</td>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<th scope="row">Pages complete</th>
						<td>66</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<th scope="row">Pages incomplete</th>
						<td>4</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<th scope="row">Pages needing updates</th>
						<td>7</td>
						<td>0</td>
						<td>0</td>
					</tr>
				</tbody>
			</table>
		</figure>
	</section>
	<section>
		<h4>Child tags of <code>&lt;table&gt;</code></h4>
		<dl>
			<dt><code>&lt;caption&gt;</code></dt>
			<dd>&#10551; Defines the included text as a caption for the table, which will be displayed above it. Should be placed first within the <code>&lt;table&gt;</code> element if used.</dd>
			<dt><code>&lt;colgroup&gt;</code></dt>
			<dd>&#10551; Defines columns within the table, allowing styling to be done by column rather than by row or by cell. May be used by itself or as a container for multiple <code>&lt;col&gt;</code> elements. Should be placed second within the <code>&lt;table&gt;</code> element. Note that specifically for this element and <code>&lt;col&gt;</code>, the global attribute <code>style</code> only has four uses enabled, <code>background-color</code>, <code>border</code>, <code>width</code>, and <code>visibility</code>.</dd>
			<dt><code>&lt;tbody&gt;</code></dt>
			<dd>&#10551; Defines the contained elements as the main body of the table. Should be placed fifth within the <code>&lt;table&gt;</code> element if used.</dd>
			<dt><code>&lt;tfoot&gt;</code></dt>
			<dd>&#10551; Defines the contained elements as a footer for the table, such as sums of the columns. Should be placed fourth within the <code>&lt;table&gt;</code> element if used.</dd>
			<dt><code>&lt;thead&gt;</code></dt>
			<dd>&#10551; Defines the contained elements as a header for the table, such as names of the columns. Should be placed third within the <code>&lt;table&gt;</code> element if used.</dd>
			<dt><code>&lt;tr&gt;</code></dt>
			<dd>&#10551; Defines the contained elements as a row within the table. Can be placed directly in the table, or within <code>&lt;thead&gt;</code>, <code>&lt;tfoot&gt;</code>, or <code>&lt;tbody&gt;</code> elements.</dd>
		</dl>
	</section>
	<section>
		<h4>Child tags of <code>&lt;colgroup&gt;</code></h4>
		<dl>
			<dt><code>&lt;col&gt;</code></dt>
			<dd>&#10551; Defines a subgroup of columns within a <code>&lt;colgroup&gt;</code> element, which can be a single column or multiple at a time. Note that specifically for this element and <code>&lt;colgroup&gt;</code>, the global attribute <code>style</code> only has four uses enabled, <code>background-color</code>, <code>border</code>, <code>width</code>, and <code>visibility</code>.</dd>
		</dl>
	</section>
	<section>
		<h4>Child tags of <code>&lt;tr&gt;</code></h4>
		<dl>
			<dt><code>&lt;td&gt;</code></dt>
			<dd>&#10551; Defines a cell within the table row.</dd>
			<dt><code>&lt;th&gt;</code></dt>
			<dd>&#10551; Defines a header cell within the table row. The included text will be bolded and centered.</dd>
		</dl>
	</section>
	</section>
	<section>
		<h4>Attributes of <code>&lt;table&gt;</code></h4>
		<dl>
			<dt><code>border</code></dt>
			<dd>&#10551; If set to <code>0</code>, the table and its contents will be borderless. If set to <code>1</code>, they will be bordered, which is the default.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;colgroup&gt;</code></h4>
		<dl>
			<dt><code>span</code></dt>
			<dd>&#10551; Defines how many table columns this element's style rules will apply to.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;col&gt;</code></h4>
		<dl>
			<dt><code>span</code></dt>
			<dd>&#10551; Defines how many table columns this element's style rules will apply to.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;td&gt;</code></h4>
		<dl>
			<dt><code>colspan</code></dt>
			<dd>&#10551; Defines how many table columns this cell should span.</dd>
			<dt><code>headers</code></dt>
			<dd>&#10551; Specifies the id of a <code>&lt;th&gt;</code> element this cell is related to. This attribute can accept multiple ids, separated by spaces.</dd>
			<dt><code>rowspan</code></dt>
			<dd>&#10551; Defines how many table rows this cell should span.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;th&gt;</code></h4>
		<dl>
			<dt><code>abbr</code></dt>
			<dd>&#10551; Defines an abbreviation version of the cell's content.</dd>
			<dt><code>colspan</code></dt>
			<dd>&#10551; Defines how many table columns this cell should span.</dd>
			<dt><code>headers</code></dt>
			<dd>&#10551; Specifies the id of a <code>&lt;th&gt;</code> element this cell is related to. This attribute can accept multiple ids, separated by spaces.</dd>
			<dt><code>rowspan</code></dt>
			<dd>&#10551; Defines how many table columns this cell should span.</dd>
			<dt><code>scope</code></dt>
			<dd>
				&#10551; Defines what this cell is a header for.
				<details>
					<summary>Accepted values:</summary>
						<dl>
						<dt><code>col</code></dt>
						<dd>&#10551; A column.</dd>
						<dt><code>colgroup</code></dt>
						<dd>&#10551; A group of columns.</dd>
						<dt><code>row</code></dt>
						<dd>&#10551; A row.</dd>
						<dt><code>rowgroup</code></dt>
						<dd>&#10551; A group of rows.</dd>
				</details>
			</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
