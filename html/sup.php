<?php
    $PAGE_NAME = '&lt;sup&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>Instead of subscript, this tag styles inline text as a superscript. This is the most common appearance for citation markers.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;p&gt;The world wide web is full of content of every type, from the most everyday to the most bizarre&lt;sup&gt;[1]&lt;/sup&gt;.&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p>The world wide web is full of content of every type, from the most everyday to the most bizarre<sup>[1]</sup>.</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
