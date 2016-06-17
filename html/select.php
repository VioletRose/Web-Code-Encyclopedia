<?php
    $PAGE_NAME = '&lt;select&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>This element creates a drop-down list with multiple options a user can select. It is usually used for forms, in cases where freeform user input is undesirable and a fixed range of answers needs to be provided.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;select&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="html"&gt;HTML&lt;/option&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="css"&gt;CSS&lt;/option&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="javascript"&gt;Javascript&lt;/option&gt;
			<br>
			&lt;/select&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<select>
			<option value="html">HTML</option>
			<option value="css">CSS</option>
			<option value="javascript">Javascript</option>
		</select>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
