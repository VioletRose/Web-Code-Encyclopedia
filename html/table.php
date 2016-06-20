<?php
    $PAGE_NAME = '&lt;table&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>This element contains the formatting for an HTML table, which is controlled by several other tags within the element.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;table border="1"&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;caption&gt;Current status of Web Encyclopedia&lt;/caption&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Page statistics&lt;/th&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;HTML&lt;/th&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;CSS&lt;/th&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Javascript&lt;/th&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Pages complete&lt;/th&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;64&lt;/td&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Pages incomplete&lt;/th&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;4&lt;/td&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Pages needing updates&lt;/th&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;59&lt;/td&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;0&lt;/td&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
			<br>
			&lt;/table&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<table border="1">
			<caption>Current status of Web Encyclopedia</caption>
			<tr>
				<th>Page statistics</th>
				<th>HTML</th>
				<th>CSS</th>
				<th>Javascript</th>
			</tr>
			<tr>
				<th>Pages complete</th>
				<td>64</td>
				<td>0</td>
				<td>0</td>
			</tr>
			<tr>
				<th>Pages incomplete</th>
				<td>4</td>
				<td>0</td>
				<td>0</td>
			</tr>
			<tr>
				<th>Pages needing updates</th>
				<td>59</td>
				<td>0</td>
				<td>0</td>
			</tr>
		</table>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
