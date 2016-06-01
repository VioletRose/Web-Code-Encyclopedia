<?php
    $PAGE_NAME = '&lt;article&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		An element designed to support the "Syntactic Web" concept, to the human eye it is simply auto-formatting but provides important context to search engines, screen readers, and any other software attempting to read your page. In this case, used to designate a discrete article separate from the page as a whole.
	</p>
	<p>
		Example:
		<br>
		&lt;article&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;lt;article&amp;gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h1&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;lt;article&amp;gt; is a slightly more complex auto-formatting element, intended for discrete articles on a webpage.
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;
		<br>
		&lt;/article&gt;		
	</p>
	<p>
		Will be rendered as:
		<br>
		<article>
			<h1>
				&lt;article&gt;
			</h1>
			&lt;article&gt; is a slightly more complex auto-formatting element, intended for discrete articles on a webpage.
		</article>
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
