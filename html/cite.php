<?php
    $PAGE_NAME = '&lt;cite&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This Syntactic Web tag designates the included text as the title of a creative work such a book, TV show, game, painting, etc. as well as italicizing it by default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;p&gt;&lt;cite&gt;Rocket Leaguelt;/cite&gt; is developed by Psyonix, and was first released on July 7, 2015.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<p><cite>Rocket League</cite> is developed by Psyonix, and was first released on July 7, 2015.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
