<?php
    $PAGE_NAME = '&lt;meter&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>This element displays a small meter, with attributes governing its minimum, maximum, and current fullness.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;meter value="3" min="1" max="5"&gt;Average.&lt;/meter&gt;
			<br>
			&lt;br&gt;
			<br>
			&lt;meter value="0.12"&gt;12%&lt;/meter&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<meter value="3" min="1" max="5">Average.</meter>
		<br>
		<meter value="0.12">12%</meter>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
