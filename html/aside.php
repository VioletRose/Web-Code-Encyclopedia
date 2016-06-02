<?php
    $PAGE_NAME = '&lt;aside&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		An element designed to support the "Syntactic Web" concept, to the human eye it is simply auto-formatting but provides important context to search engines, screen readers, and any other software attempting to read your page. In this case, it designates an aside from the main text of the page.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;Today I learned about the &lt;aside&gt; element.
			<br>
			&lt;/p&gt;
			<br>
			&lt;aside&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;lt;aside&amp;gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;lt;aside&amp;gt; is an element in the HTML programming language.
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;
			<br>
			&lt;/aside&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<p>
			Today I learned about the &lt;aside&gt; element.
		</p>
		<aside>
			<h4>
				&lt;aside&gt;
			</h4>
			<p>
				&lt;aside&gt; is an element in the HTML programming language.
			</p>
		</aside>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
