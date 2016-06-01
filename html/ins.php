<?php
    $PAGE_NAME = '&lt;ins&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		A partner to the &lt;del&gt; tag, which denotes redacted text with a strikethrough, this tag specifically denotes text that's meant to replace the struck out text.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Sometimes, text needs to be 
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;del&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;corracted
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/del&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;ins&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;corrected
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ins&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;, but for some reason you want the mistake to be documented or noted in the finished product.
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		Sometimes, text needs to be 
		<del>
			corracted
		</del>
		<ins>
			corrected
		</ins>
		, but for some reason you want the mistake to be documented or noted in the finished product.
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
