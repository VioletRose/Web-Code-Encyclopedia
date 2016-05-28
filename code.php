<?php
    $PAGE_NAME = '&lt;code&gt;';
    require_once('head.php');
?>
<div class="mainText">
	<p>
		Part of the "Syntactic Web" design philosophy, this auto-formatting element makes the text within display in a monospace font, as well as informing site-scanning software that said text is programming code.
	</p>
	<p>
		Example:
		<br>
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
	</p>
	<p>
		Will be rendered as:
		<br>
		<code>
			main( ) {
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("hello, world");
			<br>
			}
		</code>
	</p>
</div>	
<?php
    require_once('foot.php');
?>
