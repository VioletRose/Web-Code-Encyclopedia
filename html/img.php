<?php
    $PAGE_NAME = '&lt;img&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		The simplest and most commonly used way to insert an image into a webpage.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;img src="/images/violetflower.png"&gt;
			<br>
			&lt;/img&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<img src="/images/violetflower.png">
		</img>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
