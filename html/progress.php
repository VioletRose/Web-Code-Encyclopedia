<?php
    $PAGE_NAME = 'Template';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>This tag displays a visible progress meter in the website, representing something's amount of completion. The example I give here is static, but these are most often used alongside scripting to show progress dynamically.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;progress value="74" max="100"&gt;
			<br>
			&lt;/progress&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<progress value="74" max="100">
		</progress>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
