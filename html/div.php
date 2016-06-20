<?php
    $PAGE_NAME = '&lt;div&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>One of my favorite tags! &lt;div&gt;'s effect isn't that visually impressive by default, but it's one of the most effective ways to group multiple elements together for mass styling, usually by CSS but by use of &lt;style&gt; for this demonstration.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;div style="color:#7F00FF"&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&gt;Div!&lt;/h2&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Huzzah for divs!&lt;/p&gt;
			<br>
			&lt;/div&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<div style="color:#7F00FF">
			<h2>Div!</h2>
			<p>Huzzah for divs!</p>
		</div>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
