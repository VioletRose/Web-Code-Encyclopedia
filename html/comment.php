<?php
    $PAGE_NAME = '&lt;comment&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		This is the HTML comment syntax. All text between the opening &lt; and the closing &gt; will be ignored by the browser completely.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;!--This is an example of how to properly format a comment in HTML.--&gt;
		</code>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
