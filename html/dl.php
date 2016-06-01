<?php
    $PAGE_NAME = '&lt;dl&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		One of several types of list in HTML, this one alternately lists terms and the descriptions of those terms.
	</p>
	<p>
		Example:
		<br>
		&lt;dl&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;dt&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HTML
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/dt&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;dd&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hypertext Markup Language, the cornerstone of web development.
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/dd&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;dt&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSS
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/dt&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;dd&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cascading Style Sheets, the optimal way for changing the default appearance of elements on a webpage.
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/dd&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;dt&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JQuery
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/dt&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;dd&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A very popular Javascript library that streamlines and simplifies the use of Javascript immensely.
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/dd&gt;
		<br>
		&lt;/dl&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<dl>
			<dt>
				HTML
			</dt>
			<dd>
				Hypertext Markup Language, the cornerstone of web development.
			</dd>
			<dt>
				CSS
			</dt>
			<dd>
				Cascading Style Sheets, the optimal way for changing the default appearance of elements on a webpage.
			</dd>
			<dt>
				JQuery
			</dt>
			<dd>
				A very popular Javascript library that streamlines and simplifies the use of Javascript immensely.
			</dd>
		</dl>
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
