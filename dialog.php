<?php
    $PAGE_NAME = '&lt;dialog&gt;';
    require_once('head.php');
?>
<div class="mainText">
	<p>
		This tag creates a dialog "window" of sorts, usually one that will be modified by CSS and Javascript to open on demand and stay in the same place regardless of the user's scrolling. However, by default it's just a text box that will remain hidden completely unless the open attribute is set on it by default.
	</p>
	<p>
		Example:
		<br>
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
	</p>
	<p>
		Will be rendered as:
		<br>
		<dialog>
			This text won't even be rendered, because this window is closed.
		</dialog>
		<dialog open>
			This text will be rendered! Although if it doesn't look right, you may need to switch to a better web browser.
		</dialog>
	</p>
</div>	
<?php
    require_once('foot.php');
?>
