<?php
    $PAGE_NAME = '&lt;kbd&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Part of the "Syntactic Web" design philosophy, this is a styling element specifically meant to represent keyboard input.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;This is &lt;kbd&gt;keyboard input&lt;/kbd&gt;!
			<br>
			&lt;/p&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<p>
			This is <kbd>keyboard input</kbd>!
		</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
