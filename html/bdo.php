<?php
    $PAGE_NAME = '&lt;bdo&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		This tag is used to force the text within to be oriented left-to-right or right-to-left, regardless of the default for the characters used in it.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;bdo dir="rtl"&gt;Right to left.&lt;/bdo&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;bdo dir="ltr"&gt;左から右へ&lt;/bdo&gt;
			<br>
			&lt;/p&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<p>
			<bdo dir="rtl">Right to left.</bdo>
			<br>
			<bdo dir="ltr">左から右へ</bdo>
		</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
