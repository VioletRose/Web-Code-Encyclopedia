<?php
    $PAGE_NAME = '&lt;kbd&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Part of the "Syntactic Web" design philosophy, this is a styling element specifically meant to represent keyboard input.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;This is 
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;kbd&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyboard input
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/kbd&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;!
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		This is 
		<kbd>
			keyboard input
		</kbd>
		!
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
