<?php
    $PAGE_NAME = '&lt;aside&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>This Syntactic Web element is used to contain an aside from the main text of the page.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;p&gt;Today I learned about the &lt;aside&gt; element.&lt;/p&gt;
			<br>
			&lt;aside&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&gt;&amp;lt;aside&amp;gt;&lt;/h4&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&amp;lt;aside&amp;gt; is an element in the HTML programming language.&lt;/p&gt;
			<br>
			&lt;/aside&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p>Today I learned about the &lt;aside&gt; element.</p>
		<aside>
			<h4>&lt;aside&gt;</h4>
			<p>&lt;aside&gt; is an element in the HTML programming language.</p>
		</aside>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
