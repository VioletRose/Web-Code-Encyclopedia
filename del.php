<?php
    $PAGE_NAME = '&lt;del&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<div class="mainText">
	<p>
		Probably better thought of as strikethrough, this denotes text that has been retracted or corrected, but left in the document for the sake of history, context, or transparency.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Text that needs to be 
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;del&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;redected
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/del&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;redacted.
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		Text that needs to be 
		<del>
			redected
		</del>
		redacted.
	</p>
</div>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
