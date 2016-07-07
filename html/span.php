<?php
    $PAGE_NAME = '&lt;span&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>The &lt;span&gt; tag, having no displayed appearance of its own, is generally used to contain other elements or text inline to be modified by CSS or Javascript.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;p&gt;The famous poem states that violets are &lt;span style="color:blue"&gt;blue&lt;/span&gt;. But are they not, in fact, &lt;span style="color:violet"&gt;violet&lt;/span&gt;? Some questions may never be answered.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<p>The famous poem states that violets are <span style="color:blue">blue</span>. But are they not, in fact, <span style="color:violet">violet</span>? Some questions may never be answered.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
