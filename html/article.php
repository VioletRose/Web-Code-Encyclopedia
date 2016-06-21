<?php
    $PAGE_NAME = '&lt;article&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>This Syntactic Web element is used to contain a discrete article separate from the page as a whole.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;article&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;&amp;lt;article&amp;gt;&lt;/h1&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&amp;lt;article&amp;gt; is a slightly more complex auto-formatting element, intended for discrete articles on a webpage.&lt;/p&gt;
			<br>
			&lt;/article&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<article>
			<h1>&lt;article&gt;</h1>
			<p>&lt;article&gt; is a slightly more complex auto-formatting element, intended for discrete articles on a webpage.</p>
		</article>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
