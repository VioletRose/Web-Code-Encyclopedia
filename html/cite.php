<?php
    $PAGE_NAME = '&lt;cite&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Part of the "Syntactic Web" concept, on top of auto-formatting the included text, this element also informs site-reading software that said text is the title of a creative work such as a book, TV show, game, painting etc.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;cite&gt;Rocket Leaguelt;/cite&gt; is developed by Psyonix, and was first released on July 7, 2015.
			<br>
			&lt;/p&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<p>
			<cite>Rocket League</cite> is developed by Psyonix, and was first released on July 7, 2015.
		</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
