<?php
    $PAGE_NAME = '&lt;link&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>Not to be confused with &lt;a&gt;, this tag is specifically for calling upon styling files external to the page, such as .css files and sometimes web fonts.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;link rel="stylesheet" type="text/css" href="/stylesheets/encyclopedia.css"&gt;
			<br>
			&lt;link href='https://fonts.googleapis.com/css?family=Open+Sans|Inconsolata' rel='stylesheet' type='text/css'&gt;
		</code>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
