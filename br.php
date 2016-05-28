<?php
    $PAGE_NAME = '&lt;br&gt;';
    require_once('head.php');
?>
<div class="mainText">
	<p>
		This tag creates a single line break, which is required because normally, all text entered in an HTML document will ignore line breaks and render sequentially.
	</p>
	<p>
		Example:
		<br>
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
	</p>
	<p>
		Will be rendered as:
		<br>
		This is not a valid way to insert a line break. You must use the &lt;br&gt; tag, like this:
		<br>
		to accomplish that.
	</p>
</div>	
<?php
    require_once('foot.php');
?>
