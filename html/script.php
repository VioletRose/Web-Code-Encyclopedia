<?php
    $PAGE_NAME = '&lt;script&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>This tag is used to either begin and end Javascript code within the HTML page, or refer to an external .js file.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;script&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;document.write("Hello, and welcome to my HTML tag page!")
			<br>
			&lt;/script&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<script>
			document.write("Hello, and welcome to my HTML tag page!")
		</script>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
