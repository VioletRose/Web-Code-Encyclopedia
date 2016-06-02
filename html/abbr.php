<?php
    $PAGE_NAME = '&lt;abbr&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		This element theoretically defines a 'full form' of an abbreviated term that will be displayed if the user mouses over the abbreviation.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;The real power of &lt;abbr title="Hypertext Markup Language"&gt;HTML&lt;/abbr&gt; is the degree to which most of the actual work is done by the browser, not the website.
			<br>
			&lt;/p&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<p>
			The real power of <abbr title="Hypertext Markup Language">HTML</abbr> is the degree to which most of the actual work is done by the browser, not the website.
		</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
