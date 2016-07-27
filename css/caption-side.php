<?php
    $PAGE_NAME = 'caption-side';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to specify whether a table caption appears below or above the table itself.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#bottomCaption {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caption-side: bottom;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;table border="1"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;caption&gt;Table top&lt;/caption&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;caption id="bottomCaption"&gt;Table bottom&lt;/caption&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Table&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Row&lt;/td&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
				<br>
				&lt;/table&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				#bottomCaption {
					caption-side: bottom;
				}
			</style>
			<table border="1">
				<caption>Table top</caption>
				<caption id="bottomCaption">Table bottom</caption>
				<tr>
					<td>Table</td>
					<td>Row</td>
				</tr>
			</table>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>caption-side</code>:</h4>
		<dl>
			<dt><code>top</code></dt>
			<dd>&#10551; The default value. The caption is above the table.</dd>
			<dt><code>bottom</code></dt>
			<dd>&#10551; The caption is beneath the table.</dd>
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
