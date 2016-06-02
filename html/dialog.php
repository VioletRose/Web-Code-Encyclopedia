<?php
    $PAGE_NAME = '&lt;dialog&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		This tag creates a dialog "window" of sorts, usually one that will be modified by CSS and Javascript to open on demand and stay in the same place regardless of the user's scrolling. However, by default it's just a text box that will remain hidden completely unless the open attribute is set on it by default.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;dialog&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;This text won't even be rendered, because this window is closed.
			<br>
			&lt;/dialog&gt;
			<br>
			&lt;br&gt;
			<br>
			&lt;dialog open&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;This text will be rendered! Although if it doesn't look right, you may need to switch to a better web browser.
			<br>
			&lt;/dialog&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<dialog>
			This text won't even be rendered, because this window is closed.
		</dialog>
		<dialog open>
			This text will be rendered! Although if it doesn't look right, you may need to switch to a better web browser.
		</dialog>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
