<?php
    $PAGE_NAME = '&lt;abbr&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<div class="mainText">
	<p>
		This element theoretically defines a 'full form' of an abbreviated term that will be displayed if the user mouses over the abbreviation.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;The real power of 
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;abbr title="Hypertext Markup Language"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HTML
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/abbr&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is the degree to which most of the actual work is done by the browser, not the website.
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		The real power of 
		<abbr title="Hypertext Markup Language">
			HTML
		</abbr>
		is the degree to which most of the actual work is done by the browser, not the website.
	</p>
</div>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
