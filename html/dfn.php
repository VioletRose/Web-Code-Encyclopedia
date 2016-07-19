<?php
    $PAGE_NAME = '&lt;dfn&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag marks the definition of a term or abbreviation in the first place it's seen within a larger document, allowing it to be targeted by hyperlinks so that it won't need to be typed out again each time the term is mentioned.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;p&gt;&lt;dfn id="html-dfn" title="Hypertext Markup Language"&gt;HTML&lt;/dfn&gt; is the core language used in the creation of websites across the entire internet, and is the focus of this section of my encyclopedia. Now that I've defined it once, it won't be necessary in the future to tell you what &lt;a href="#html-dfn"&gt;HTML&lt;/a&gt; means again!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<p><dfn id="html-dfn" title="Hypertext Markup Language">HTML</dfn>	is the core language used in the creation of websites across the entire internet, and is the focus of this section of my encyclopedia. Now that I've defined it once, it won't be necessary in the future to tell you what <a href="#html-dfn">HTML</a>	means again!</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
