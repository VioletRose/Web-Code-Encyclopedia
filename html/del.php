<?php
    $PAGE_NAME = '&lt;del&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Probably better thought of as strikethrough, this denotes text that has been retracted or corrected, but left in the document for the sake of history, context, or transparency.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;Text that needs to be &lt;del&gt;redacted&lt;/del&gt;.
			<br>
			&lt;/p&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<p>
			Text that needs to be <del>redacted</del>.
		</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
