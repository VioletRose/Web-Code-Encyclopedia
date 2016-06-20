<?php
    $PAGE_NAME = '&lt;s&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>Part of the "Syntactic Web" philosophy, this tag is for the highly specific purpose of denoting text that is no longer correct or relevant.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;p&gt;&lt;s&gt;I have 57 HTML tag pages.&lt;/s&gt;&lt;/p&gt;
			<br>
			&lt;p&gt;I have 59 HTML tag pages.&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p><s>I have 57 HTML tag pages.</s></p>
		<p>I have 59 HTML tag pages.</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
