<?php
    $PAGE_NAME = '&lt;ol&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>This tag creates a preformatted ordered list, i.e. one where each item is preceded by a letter or number, in ascending or descending order. It also supports starting at a specific point, rather than from the beginning.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;ol&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Ichi&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Ni&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;San&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Shi/yon&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Go&lt;/li&gt;
			<br>
			&lt;/ol&gt;
			<br>
			&lt;ol reversed start="22" type="A"&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;One&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Two&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Three&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Four&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Five&lt;/li&gt;
			<br>
			&lt;/ol&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<ol>
			<li>Ichi</li>
			<li>Ni</li>
			<li>San</li>
			<li>Shi/yon</li>
			<li>Go</li>
		</ol>
		<ol reversed start="22" type="A">
			<li>One</li>
			<li>Two</li>
			<li>Three</li>
			<li>Four</li>
			<li>Five</li>
		</ol>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
