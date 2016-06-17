<?php
    $PAGE_NAME = '&lt;a&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>An anchor, or hyperlink, is how a web browser can be instructed to navigate to another page when certain things are clicked. &lt;a&gt; is one of the HTML elements that modifies future elements until it is closed, rather than making anything appear on the page by itself. Also worth noting is that &lt;a&gt; is the only exception to the rule of inline tags not acting as containers - it <em>can</em> be used that way, and often is. Anchors can be attached to many things, but most common are text and images.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;a href="/html.php"&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Click here to be directed back to the HTML element index! Or, click this image!&lt;/p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src="/images/html.png"&gt;&lt;/img&gt;
			<br>
			&lt;/a&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<a href="/html.php">
			<p>	Click here to be directed back to the HTML element index! Or, click this image!</p>
			<img src="/images/html.png"></img>
		</a>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
