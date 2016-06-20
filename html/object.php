<?php
    $PAGE_NAME = '&lt;object&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>This tag is a general container for nearly any other type of content that can be embedded into a webpage, such as audio, video, Java applets, ActiveX, PDFs, Flash, and even other websites. However, it should be used with care as many of those things already have specific elements dedicated to them, and it's important to use the right thing for the right task.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;object width="304" height="154" data="/html/iframe.php"&gt;
			<br>
			&lt;/object&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<object width="304" height="154" data="/html/iframe.php">
		</object>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
