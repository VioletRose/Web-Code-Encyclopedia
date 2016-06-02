<?php
    $PAGE_NAME = '&lt;div&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		One of my favorite tags! &lt;div&gt;'s effect isn't that visually impressive by default, but it's one of the most effective ways to group multiple elements together for mass styling, usually by CSS but by use of &lt;style&gt; for this demonstration.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;div style="color:#7F00FF"&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Div!
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h2&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Huzzah for divs!
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;
			<br>
			&lt;/div&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<div style="color:#7F00FF">
			<h2>
				Div!
			</h2>
			<p>
				Huzzah for divs!
			</p>
		</div>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
