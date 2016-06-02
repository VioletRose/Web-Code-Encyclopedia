<?php
    $PAGE_NAME = '&lt;h1-h6&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Less of a tag and more a series of tags, h1 through h6 define a heading for a page or body of text, in descending order of importance.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
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
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
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
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>