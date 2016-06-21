<?php
    $PAGE_NAME = '&lt;br&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>This tag creates a single line break, which is required because normally, all text entered in an HTML document will ignore line breaks and render sequentially.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			This is not
			<br>
			a valid way to insert a line break. You must use the &amp;lt;br&amp;gt; tag, like this:
			<br>
			&lt;br&gt;
			<br>
			to accomplish that.
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		This is not a valid way to insert a line break. You must use the &lt;br&gt; tag, like this:
		<br>
		to accomplish that.
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
