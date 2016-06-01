<?php
    $PAGE_NAME = '&lt;header&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Related to and usually containing the &lt;h#&gt; tag, &lt;header&gt; includes more verbose information at the head of an article or body of text, usually both the title and a logo or authorship information.
	</p>
	<p>
		Example:
		<br>
		&lt;header&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On the Versatility of the Glorious Div
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h1&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;by Violet Rose
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h3&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This text not reprinted with permission, because this is the original work and not a reprinting.
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;
		<br>
		&lt;/header&gt;
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Divs are great! I love divs!
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;...Were you expecting more?
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<header>
			<h1>
				On the Versatility of the Glorious Div
			</h1>
			<h3>
				by Violet Rose
			</h3>
			<p>
				This text not reprinted with permission, because this is the original work and not a reprinting.
			</p>
		</header>
		<p>
			Divs are great! I love divs!
			<br>
			...Were you expecting more?
		</p>
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
