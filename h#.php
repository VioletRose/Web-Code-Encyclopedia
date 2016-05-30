<?php
    $PAGE_NAME = '&lt;h#&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<div class="mainText">
	<p>
		Less of a tag and more a series of tags, h1 through h6 define a heading for a page or body of text, in descending order of importance.
	</p>
	<p>
		Example:
		<br>
		&lt;h1&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;One!
		<br>
		&lt;/h1&gt;
		<br>
		&lt;h2&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Two!
		<br>
		&lt;/h2&gt;
		<br>
		&lt;h3&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Three!
		<br>
		&lt;/h3&gt;
		<br>
		&lt;h4&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Four!
		<br>
		&lt;/h4&gt;
		<br>
		&lt;h5&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Five!
		<br>
		&lt;/h5&gt;
		<br>
		&lt;h6&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Six!
		<br>
		&lt;/h6&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<h1>
			One!
		</h1>
		<h2>
			Two!
		</h2>
		<h3>
			Three!
		</h3>
		<h4>
			Four!
		</h4>
		<h5>
			Five!
		</h5>
		<h6>
			Six!
		</h6>
	</p>
</div>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
