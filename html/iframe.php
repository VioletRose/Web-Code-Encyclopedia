<?php
    $PAGE_NAME = '&lt;iframe&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		This element embeds another webpage inside of a webpage. Although the similar &lt;frame&gt; element has now been fully deprecated from HTML5, &lt;iframe&gt; still exists in a more limited form than in previous years, mostly due to security reasons.
	</p>
	<p>
		Example:
		<br>
		&lt;iframe src="iframe.php"&gt;
		<br>
		&lt;/iframe&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<iframe src="iframe.php">
		</iframe>
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
