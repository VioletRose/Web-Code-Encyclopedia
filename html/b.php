<?php
    $PAGE_NAME = '&lt;b&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>Despite seeming to be simply an innocuous formatting element, &lt;b&gt; is actually a point of contention due to the fact that there are numerous other ways to achieve the same visual effect that also inform site-scanning software of <em>why</em> that text is differentiated. As such, this element should only be used in situations where the text it modifies is not an article header, emphasized text, important text, or marked/highlighted text, i.e. purely for visual effect.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;p&gt;&lt;b&gt;The boldest of text.&lt;/b&gt;&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p><b>The boldest of text.</b></p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
