<?php
    $PAGE_NAME = '&lt;aside&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This Syntactic Web tag designates the included text as an aside from the main text of the page, as well as bolding it by default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
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
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>Today I learned about the &lt;aside&gt; element.</p>
			<aside>
				<h4>&lt;aside&gt;</h4>
				<p>&lt;aside&gt; is an element in the HTML programming language.</p>
			</aside>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
