<?php
    $PAGE_NAME = '&lt;code&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>Part of the "Syntactic Web" design philosophy, this auto-formatting element makes the text within display in a monospace font, as well as informing site-scanning software that said text is programming code.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;code&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;main( ) {
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("hello, world");
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}
			<br>
			&lt;/code&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<code>
			main( ) {
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("hello, world");
			<br>
			}
		</code>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
