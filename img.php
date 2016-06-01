<?php
    $PAGE_NAME = '&lt;img&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		The simplest and most commonly used way to insert an image into a webpage.
	</p>
	<p>
		Example:
		<br>
		&lt;img src="/images/violetflower.png"&gt;
		<br>
		&lt;/img&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<img src="/images/violetflower.png">
		</img>
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
