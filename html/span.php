<?php
    $PAGE_NAME = '&lt;span&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>The &lt;span&gt; tag is generally used for hooking inline elements to be modified by CSS or Javascript commands.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;p&gt;The famous poem states that violets are &lt;span style="color:blue"&gt;blue&lt;/span&gt;. But are they not, in fact, &lt;span style="color:violet"&gt;violet&lt;/span&gt;? Some questions may never be answered.&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p>The famous poem states that violets are <span style="color:blue">blue</span>. But are they not, in fact, <span style="color:violet">violet</span>? Some questions may never be answered.</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
