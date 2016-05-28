<?php
    $PAGE_NAME = '&lt;dfn&gt;';
    require_once('head.php');
?>
<div class="mainText">
	<p>
		This odd tag is intended to be used to denote the definition of a term or abbreviation in the first place it's seen within a larger document, allowing it to be used unexplained from that point onward.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;dfn id="html-dfn" title="Hypertext Markup Language"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HTML
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/dfn&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;is the core language used in the creation of websites across the entire internet, and is the focus of this section of my encyclopedia. Now that I've defined it once, it won't be necessary in the future to tell you what
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="#html-dfn"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HTML
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;means again!
		<br>
		&lt;/p&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<dfn id="html-dfn" title="Hypertext Markup Language">
			HTML
		</dfn>
		is the core language used in the creation of websites across the entire internet, and is the focus of this section of my encyclopedia. Now that I've defined it once, it won't be necessary in the future to tell you what
		<a href="#html-dfn">
			HTML
		</a>
		means again!
	</p>
</div>	
<?php
    require_once('foot.php');
?>
