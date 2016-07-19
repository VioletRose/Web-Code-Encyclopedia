<?php
    $PAGE_NAME = '&lt;mark&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This Syntactic Web tag designates the included text as marked or highlighted, distinguished so it will be easier to find while skimming the page, as well as giving the text a yellow background color by default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;p&gt;There are many different ways to make a &lt;mark&gt;word&lt;/mark&gt; stand out.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<p>There are many different ways to make a <mark>word</mark> stand out.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
