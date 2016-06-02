<?php
    $PAGE_NAME = '&lt;mark&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		A Syntactic Web tag that designates text as marked, or highlighted.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;There are many different ways to make a &lt;mark&gt;word&lt;/mark&gt; stand out.
			<br>
			&lt;/p&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<p>
			There are many different ways to make a <mark>word</mark> stand out.
		</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
