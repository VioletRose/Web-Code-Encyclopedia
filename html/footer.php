<?php
    $PAGE_NAME = '&lt;footer&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Part of the "Syntactic Web" design philosophy, the footer tag has no visible effect, but is intended to contain 'concluding' sorts of information for a document such as authorship, copyright status, contact details, or other pages that might be of interest.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
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
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact me at: &lt;a href="mailto:actuallya@fakeemailaddress.com"&gt;actuallya@fakeemailaddress.com&lt;/a&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;
			<br>
			&lt;/footer&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<footer>
			<p>
				Created by Violet Rose
			</p>
			<p>
				Contact me at: <a href="mailto:actuallya@fakeemailaddress.com">actuallya@fakeemailaddress.com</a>
			</p>
		</footer>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
