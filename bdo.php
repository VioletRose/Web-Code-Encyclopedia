<?php
    $PAGE_NAME = '&lt;bdo&gt;';
    require_once('head.php');
?>
<div class="mainText">
	<p>
		This tag is used to force the text within to be oriented left-to-right or right-to-left, regardless of the default for the characters used in it.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;bdo dir="rtl"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Right to left.
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/bdo&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;bdo dir="ltr"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;左から右へ
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/bdo&gt;
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<bdo dir="rtl">
			Right to left.
		</bdo>
		<br>
		<bdo dir="ltr">
			左から右へ
		</bdo>
	</p>
</div>	
<?php
    require_once('foot.php');
?>
