<?php
    $PAGE_NAME = '&lt;i&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Much like &lt;b&gt;, this styling element simply makes text italic, but it is advised to use any of the more contextual methods of styling <em>unless</em> you only want that text italicized for stylistic reasons, and there's no other context to it. But for most purposes, you should use &lt;em&gt; instead.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;The eighth word in this sentence is &lt;i&gt;italicized&lt;/i&gt; for no reason!
			<br>
			&lt;/p&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<p>
			The eighth word in this sentence is <i>italicized</i> for no reason!
		</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
