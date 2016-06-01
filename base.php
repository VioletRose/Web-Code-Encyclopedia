<?php
    $PAGE_NAME = '&lt;base&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		When relative URLs, i.e. URLs that give directions to another file or page without specifying the full path, are used, the &lt;base&gt; element can be employed to modify the relative point. It must be placed in the head element, 
		<strong>
			not
		</strong>
		 the body.
	</p>
	<p>
		Example:
		<br>
		&lt;base href="https://violetrose.github.io/Web-Code-Encyclopedia/images/" target="_blank"&gt;
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
