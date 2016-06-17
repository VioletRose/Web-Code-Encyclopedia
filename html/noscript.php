<?php
    $PAGE_NAME = '&lt;noscript&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>The &lt;noscript&gt; tag allows a website to display certain things in response to the user having scripting disabled, or using a browser that doesn't support it, often in the same place scripted content would normally appear, but sometimes as a generic warning at the beginning of the page that things won't work properly.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;script&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;document.write("If you are reading this, your browser supports scripting!"
			<br>
			&lt;/script&gt;
			<br>
			&lt;noscript&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;If you are reading this, your browser does not support scripting, or you have it disabled.
			<br>
			&lt;/noscript&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<script>
			document.write("If you are reading this, your browser supports scripting!")
		</script>
		<noscript>
			If you are reading this, your browser does not support scripting, or you have it disabled.
		</noscript>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
