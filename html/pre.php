<?php
    $PAGE_NAME = '&lt;pre&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		This tag denotes text that should be displayed exactly as written in the HTML file, in a fixed-width font, fully preserving both spaces and line breaks.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;pre&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;This&nbsp;text&nbsp;&nbsp;has
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;been&nbsp;&nbsp;&nbsp;formatted&nbsp;in
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;a&nbsp;&nbsp;very&nbsp;&nbsp;&nbsp;stupid
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;way.
			<br>
			&lt;/pre&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<pre>
			This text  has
			been   formatted in
			a  very   stupid
			way.
		</pre>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
