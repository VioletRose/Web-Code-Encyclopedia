<?php
    $PAGE_NAME = '&lt;head&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		The second of the three simplest, most all-encompassing elements in HTML, &lt;head&gt; contains information the browser should have before it even begins loading the page, such as the page title that appears on top of the browser window, font information, and other things as needed.
	</p>
	<p>
		Example:
		<br>
		&lt;html&gt;
		<br>
		&lt;head&gt;
		<br>
		&lt;/head&gt;
		<br>
		&lt;body&gt;
		<br>
		&lt;/body&gt;
		<br>
		&lt;/html&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		Absolutely nothing, empty white space, and lacking many important things a well-made website has, but it
		<em>
			is
		</em>
		the smallest, simplest form of HTML code possible.
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
