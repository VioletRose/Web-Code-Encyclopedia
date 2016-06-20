<?php
    $PAGE_NAME = '&lt;button&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>As one might imagine, this tag creates a clickable button. However, since the default style of this button is rather behind modern standards of web design, its use is more or less relegated specifically to buttons that control forms, such as resetting a form or submitting it. As such, it has a number of specialized attributes for that purpose which are outside of the scope of this website to demonstrate. Please see <a href="http://www.w3schools.com/tags/tag_button.asp">W3Schools</a> for further reference on those advanced attributes.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;button autofocus type="button" onclick="alert('Heh, made you click')"&gt;Autofocused!&lt;/button&gt;
			<br>
			&lt;br&gt;
			<br>
			&lt;button disabled type="button"&gt;Disabled.&lt;/button&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<button autofocus type="button" onclick="alert('Heh, made you click')">Autofocused!</button>
		<br>
		<button disabled type="button">Disabled.</button>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
