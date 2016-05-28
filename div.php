<?php
    $PAGE_NAME = '&lt;div&gt;';
    require_once('head.php');
?>
<div class="mainText">
	<p>
		One of my favorite tags! &lt;div&gt;'s effect isn't that visually impressive by default, but it's one of the most effective ways to group multiple elements together for mass styling, usually by CSS but by use of &lt;style&gt; for this demonstration.
	</p>
	<p>
		Example:
		<br>
		&lt;div style="color:#7F00FF"&gt;
		<br>
		&lt;h2&gt;
		<br>
		Div!
		<br>
		&lt;/h2&gt;
		<br>
		&lt;p&gt;
		<br>
		Huzzah for divs!
		<br>
		&lt;/p&gt;
		<br>
		&lt;/div&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<div style="color:#7F00FF">
			<h2>
				Div!
			</h2>
			<p>
				Huzzah for divs!
			</p>
		</div>
	</p>
</div>	
<?php
    require_once('foot.php');
?>
