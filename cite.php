<?php
    $PAGE_NAME = '&lt;cite&gt;';
    require_once('head.php');
?>
<div class="mainText">
	<p>
		Part of the "Syntactic Web" concept, on top of auto-formatting the included text, this element also informs site-reading software that said text is the title of a creative work such as a book, TV show, game, painting etc.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;cite&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rocket League
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/cite&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;is developed by Psyonix, and was first released on July 7, 2015.
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<cite>
			Rocket League
		</cite>
		is developed by Psyonix, and was first released on July 7, 2015.
	</p>
</div>	
<?php
    require_once('foot.php');
?>
