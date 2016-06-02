<?php
    $PAGE_NAME = '&lt;base&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		When relative URLs, i.e. URLs that give directions to another file or page without specifying the full path, are used, the &lt;base&gt; element can be employed to modify the relative point. It must be placed in the head element, <em>not</em> the body.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;base href="https://violetrose.prototeam.org/images/" target="_blank"&gt;
		</code>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
