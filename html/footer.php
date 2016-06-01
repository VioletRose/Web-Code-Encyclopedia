<?php
    $PAGE_NAME = '&lt;footer&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Part of the "Syntactic Web" design philosophy, the footer tag has no visible effect, but is intended to contain 'concluding' sorts of information for a document such as authorship, copyright status, contact details, or other pages that might be of interest.
	</p>
	<p>
		Example:
		<br>
		&lt;footer&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Created by Violet Rose
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact me at:
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="mailto:actuallya@fakeemailaddress.com"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;actuallya@fakeemailaddress.com
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;
		<br>
		&lt;/footer&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<footer>
			<p>
				Created by Violet Rose
			</p>
			<p>
				Contact me at:
				<a href="mailto:actuallya@fakeemailaddress.com">
					actuallya@fakeemailaddress.com
				</a>
			</p>
		</footer>
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
