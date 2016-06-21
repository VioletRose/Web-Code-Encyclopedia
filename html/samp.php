<?php
    $PAGE_NAME = '&lt;samp&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>Part of the "Syntactic Web" design philosophy, this tag denotes sample output from a computer program, such as the result of a complex calculation or logical process.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;samp&gt;Error: file not found.&lt;/samp&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<samp>Error: file not found.</samp>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
