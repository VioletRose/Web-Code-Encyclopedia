<?php
    $PAGE_NAME = '&lt;aside&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<div class="mainText">
	<p>
		An element designed to support the "Syntactic Web" concept, to the human eye it is simply auto-formatting but provides important context to search engines, screen readers, and any other software attempting to read your page. In this case, it designates an aside from the main text of the page.
	</p>
	<p>
		Example:
		<br>
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
	</p>
	<p>
		Will be rendered as:
		<br>
		Today I learned about the &lt;aside&gt; element.
		<aside>
			<h4>
				&lt;aside&gt;
			</h4>
			&lt;aside&gt; is an element in the HTML programming language.
		</aside>
	</p>
</div>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
