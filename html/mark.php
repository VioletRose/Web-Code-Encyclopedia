<?php
    $PAGE_NAME = '&lt;mark&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		A Syntactic Web tag that designates text as marked, or highlighted.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;There are many different ways to make a 
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;mark&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;word
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/mark&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;stand out.
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		There are many different ways to make a 
		<mark>
			word
		</mark>
		 stand out.
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
