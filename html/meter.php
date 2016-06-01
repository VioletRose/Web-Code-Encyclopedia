<?php
    $PAGE_NAME = '&lt;meter&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		This element displays a small meter, with attributes governing its minimum, maximum, and current fullness.
	</p>
	<p>
		Example:
		<br>
		&lt;meter value="3" min="1" max="5"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Average.
		<br>
		&lt;/meter&gt;
		<br>
		&lt;br&gt;
		<br>
		&lt;meter value="0.12"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;12%
		<br>
		&lt;/meter&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<meter value="3" min="1" max="5">
			Average.
		</meter>
		<br>
		<meter value="0.12">
			12%
		</meter>
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
