<?php
    $PAGE_NAME = '&lt;s&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Part of the "Syntactic Web" philosophy, this tag is for the highly specific purpose of denoting text that is no longer correct or relevant.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;s&gt;I have 57 HTML tag pages.&lt;/s&gt;
			<br>
			&lt;/p&gt;
			<br>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;I have 59 HTML tag pages.
			<br>
			&lt;/p&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<p>
			<s>I have 57 HTML tag pages.</s>
		</p>
		<p>
			I have 59 HTML tag pages.
		</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
