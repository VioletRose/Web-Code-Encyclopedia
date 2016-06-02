<?php
    $PAGE_NAME = '&lt;dfn&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		This odd tag is intended to be used to denote the definition of a term or abbreviation in the first place it's seen within a larger document, allowing it to be used unexplained from that point onward.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;dfn id="html-dfn" title="Hypertext Markup Language"&gt;HTML&lt;/dfn&gt; is the core language used in the creation of websites across the entire internet, and is the focus of this section of my encyclopedia. Now that I've defined it once, it won't be necessary in the future to tell you what &lt;a href="#html-dfn"&gt;HTML&lt;/a&gt; means again!
			<br>
			&lt;/p&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<p>
			<dfn id="html-dfn" title="Hypertext Markup Language">HTML</dfn>	is the core language used in the creation of websites across the entire internet, and is the focus of this section of my encyclopedia. Now that I've defined it once, it won't be necessary in the future to tell you what <a href="#html-dfn">HTML</a>	means again!
		</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
