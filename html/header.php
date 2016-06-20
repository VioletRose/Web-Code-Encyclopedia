<?php
    $PAGE_NAME = '&lt;header&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>Related to and usually containing the &lt;h#&gt; tag, &lt;header&gt; includes more verbose information at the head of an article or body of text, usually both the title and a logo or authorship information.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;header&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;On the Versatility of the Glorious Div&lt;/h1&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&gt;by Violet Rose&lt;/h3&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;This text not reprinted with permission, because this is the original work and not a reprinting.&lt;/p&gt;
			<br>
			&lt;/header&gt;
			<br>
			&lt;p&gt;Divs are great! I love divs!&lt;/p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;...Were you expecting more?&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<header>
			<h1>On the Versatility of the Glorious Div</h1>
			<h3>by Violet Rose</h3>
			<p>This text not reprinted with permission, because this is the original work and not a reprinting.</p>
		</header>
		<p>Divs are great! I love divs!</p>
		<p>...Were you expecting more?</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
