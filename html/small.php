<?php
    $PAGE_NAME = '&lt;small&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>This tag will have a particular section of text be smaller than the page default.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;p&gt;This website continues to progress apace, and by the time it's done, I'll be a genius at web development!&lt;/p&gt;
			<br>
			&lt;p&gt;&lt;small&gt;Note: I will likely not be a genius at web development. Though it is possible.&lt;/small&gt;&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p>This website continues to progress apace, and by the time it's done, I'll be a genius at web development!</p>
		<p><small>Note: I will likely not be a genius at web development. Though it is possible.</small></p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
