<?php
    $PAGE_NAME = '&lt;em&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>Part of the "Syntactic Web" philosophy, &lt;em&gt; has the visual effect of italics, but also indicates to software such as screen readers that the text it modifies is emphasized rather than simply stylized.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;p&gt;This text is &lt;em&gt;important!&lt;/em&gt;&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p>This text is <em>important!</em></p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
