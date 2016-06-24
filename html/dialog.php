<?php
    $PAGE_NAME = '&lt;dialog&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag creates a dialog "window" of sorts, usually one that will be modified by CSS and Javascript to open on demand and stay in the same place regardless of the user's scrolling. However, by default it's just a text box that will remain hidden completely unless the open attribute is set on it by default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;dialog&gt;This text won't even be rendered, because this window is closed.&lt;/dialog&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;dialog open&gt;This text will be rendered! Although if it doesn't look right, you may need to switch to a better web browser.&lt;/dialog&gt;
			</code>
		</figure>
	</section>
	<section id="rendereddialog">
		<!--<dialog> is not counted as a child element, so this section was rendering too small. I am currently using CSS as a workaround until I can script it properly.-->
		<h4>Will be rendered as:</h4>
		<figure>
			<dialog>This text won't even be rendered, because this window is closed.</dialog>
			<dialog open>This text will be rendered! Although if it doesn't look right, you may need to switch to a better web browser.</dialog>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>open</code></dt>
			<dd>&#10551; If present, the element will be open by default rather than closed.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
