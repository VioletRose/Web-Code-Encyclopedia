<?php
    $PAGE_NAME = '&lt;u&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>A basic tag that styles text inline, making it appear underlined. As with &lt;b&gt; and &lt;i&gt;, it should be noted that another tag is usually more appropriate, and in this case, care should also be taken to avoid the underlined text being mistaken for a hyperlink.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;p&gt;Sometimes, on special occasions, you just want a &lt;u&gt;line under it&lt;/u&gt;, and nothing else will do.&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p>Sometimes, on special occasions, you just want a <u>line under it</u>, and nothing else will do.</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
