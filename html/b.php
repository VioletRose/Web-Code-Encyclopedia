<?php
    $PAGE_NAME = '&lt;b&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Despite seeming to be simply an innocuous formatting element, &lt;b&gt; is actually a point of contention due to the fact that there are numerous other ways to achieve the same visual effect that also inform site-scanning software of <em>why</em> that text is differentiated. As such, this element should only be used in situations where the text it modifies is not an article header, emphasized text, important text, or marked/highlighted text, i.e. purely for visual effect.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;b&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The boldest of text.
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/b&gt;
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<b>
			The boldest of text.
		</b>
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>