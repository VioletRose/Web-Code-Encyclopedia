<?php
    $PAGE_NAME = '&lt;em&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<div class="mainText">
	<p>
		Part of the "Syntactic Web" philosophy, &lt;em&gt; has the visual effect of italics, but also indicates to software such as screen readers that the text it modifies is emphasized rather than simply stylized.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;This text is 
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;em&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;important!
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/em&gt;
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		This text is 
		<em>
			important!
		</em>
	</p>
</div>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
