<?php
    $PAGE_NAME = '&lt;q&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>This tag is used to denote a small quotation, without attribution.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;p&gt;It is often said that to achieve a state of neatness and precision in one's work, one must &lt;q&gt;Mind your p's and q's.&lt;/q&gt; However, this doesn't refer to careful handwriting as outward appearances might suggest, instead being a more metaphorical way to say that even the small details matter.&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p>It is often said that to achieve a state of neatness and precision in one's work, one must <q>Mind your p's and q's.</q> However, this doesn't refer to careful handwriting as outward appearances might suggest, instead being a more metaphorical way to say that even the small details matter.</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
