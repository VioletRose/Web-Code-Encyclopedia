<?php
    $PAGE_NAME = '&lt;time&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>Unusual even for a Syntactic Web tag, &lt;time&gt; doesn't display any kind of formatting at all by default, and as such is only really useful to search engines and similar algorithms aiming to scrape time or date information from a page.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;p&gt;It is currently &lt;time&gt;2:07 PM&lt;/time&gt;. In 27 days' time, it will be &lt;time datetime="2016-07-04 0:00"&gt;Independence Day&lt;/time&gt;.&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p>It is currently <time>2:07 PM</time>. In 27 days' time, it will be <time datetime="2016-07-04 0:00">Independence Day</time>.</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
