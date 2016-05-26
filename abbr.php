<?php
    $PAGE_NAME = '&lt;abbr&gt;';
    require_once('head.php');
?>
<div class="mainText">
	<p>
		An oddity due to the divergence between its name and intended function vs. what it can be used for, this element theoretically defines a 'full form' of an abbreviated term that will be displayed if the user mouses over the abbreviation. However, you will learn how to use it to its full potential best if you think of it not as 'abbreviation', but as 'mouseover text'.
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
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is the degree to which most of the actual work is done by the browser, not the 
		<br> 
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;abbr title="Secret~"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;website
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/abbr&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;.
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
		is the degree to which most of the actual work is done by the browser, not the 
		<abbr title="Secret~">
			website
		</abbr>.
	</p>
</div>	
<?php
    require_once('foot.php');
?>
