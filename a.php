<?php
    $PAGE_NAME = '&lt;a&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		An anchor, or hyperlink, is how a web browser can be instructed to navigate to another page when certain things are clicked. &lt;a&gt; is one of the HTML elements that modifies future elements until it is closed, rather than making anything appear on the page by itself. Anchors can be attached to many things, but most common are text and images.
	</p>
	<p>
		Example:
		<br>
		&lt;a href="html.php"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click here to be directed back to the HTML element index! Or, click this image!
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src="html.png"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/img&gt;
		<br>
		&lt;/a&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<a href="html.php">
			Click here to be directed back to the HTML element index! Or, click this image! 
			<img src="images/html.png">
			</img>
		</a>
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
