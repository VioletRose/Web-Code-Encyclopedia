<?php
    $PAGE_NAME = '&lt;blockquote&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<div class="mainText">
	<p>
		Serving as part of the "syntactic web" specification, &lt;blockquote&gt; is an element that both automatically indents a section of text as well as informs software reading it that it is quoted from a source, often another website.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;blockquote cite="https://violetrose.prototeam.org/html.php"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I will make the list of elements prettier in the future, but for right now I just wanted to get started.
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/blockquote&gt;
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<blockquote cite="https://violetrose.prototeam.org/html.php">
			I will make the list of elements prettier in the future, but for right now I just wanted to get started.
		</blockquote>
	</p>
</div>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
