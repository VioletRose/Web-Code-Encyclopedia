<?php
    $PAGE_NAME = '&lt;address&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>This Syntactic Web element is used to contain contact information containing a mailing address.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;address&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;Page created by &lt;a href="mailto:actuallya@fakeemailaddress.com"&gt;Violet Rose&lt;/a&gt;.
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;Contact me at:
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;notarealwebsite.com
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;Box 404, Nonexistence
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;USA
			<br>
			&lt;/address&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<address>
			Page created by <a href="mailto:actuallya@fakeemailaddress.com">Violet Rose</a>.
			<br>
			Contact me at:
			<br>
			notarealwebsite.com
			<br>
			Box 404, Nonexistence
			<br>
			USA
		</address>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
