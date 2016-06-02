<?php
    $PAGE_NAME = '&lt;ins&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		A partner to the &lt;del&gt; tag, which denotes redacted text with a strikethrough, this tag specifically denotes text that's meant to replace the struck out text.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;Sometimes, text needs to be &lt;del&gt;corracted&lt;/del&gt;&lt;ins&gt;corrected&lt;/ins&gt;, but for some reason you want the mistake to be documented or noted in the finished product.
			<br>
			&lt;/p&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<p>
			Sometimes, text needs to be <del>corracted</del><ins>corrected</ins>, but for some reason you want the mistake to be documented or noted in the finished product.
		</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
