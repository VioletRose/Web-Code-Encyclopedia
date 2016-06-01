<?php
    $PAGE_NAME = '&lt;i&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Much like &lt;b&gt;, this styling element simply makes text italic, but it is advised to use any of the more contextual methods of styling 
		<em>
			unless
		</em>
		 you only want that text italicized for stylistic reasons, and there's no other context to it. But for most purposes, you should use &lt;em&gt; instead.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;The eighth word in this sentence is 
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;italicized
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/i&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;for no reason!
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		The eighth word in this sentence is 
		<i>
			italicized
		</i>
		for no reason!
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
