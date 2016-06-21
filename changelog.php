<?php
    $PAGE_NAME = 'Changelog';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<section>
		<object data="/changelog.txt" id ="changelog"></object>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
