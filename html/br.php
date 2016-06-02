<?php
    $PAGE_NAME = '&lt;br&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		This tag creates a single line break, which is required because normally, all text entered in an HTML document will ignore line breaks and render sequentially.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;This is not
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;a valid way to insert a line break. You must use the &amp;lt;br&amp;gt; tag, like this:
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;to accomplish that.
			<br>
			&lt;/p&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<p>
			This is not a valid way to insert a line break. You must use the &lt;br&gt; tag, like this:
			<br>
			to accomplish that.
		</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
