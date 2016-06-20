<?php
    $PAGE_NAME = '&lt;textarea&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>This element defines an area for the contained text to appear in, with a fixed width and height. If the text inside doesn't fit within that size, it will automatically add scroll arrows to itself.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;textarea rows="4" cols="70"&gt;Welcome to Violet's Web Code Encyclopedia, a project I am working on to familiarize myself with coding in HTML, CSS, and Javascript, in terms of both study and practice. Within this site, you will find visual examples and explanations of the various elements, declarations, and statements that are possible in each language.&lt;/textarea&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<textarea rows="4" cols="70">Welcome to Violet's Web Code Encyclopedia, a project I am working on to familiarize myself with coding in HTML, CSS, and Javascript, in terms of both study and practice. Within this site, you will find visual examples and explanations of the various elements, declarations, and statements that are possible in each language.</textarea>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
