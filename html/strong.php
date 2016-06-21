<?php
    $PAGE_NAME = '&lt;strong&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>Part of the Syntactic Web design philosophy, this should not be used solely to render text as bold, it's intended for text that is meant to have full attention paid to it, conveying a sense of importance</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;p&gt;In general, whenever you are writing any body of text, there will be certain parts you consider highly important to the user. This is when the &amp;lt;strong&amp;gt; tag should be used, &lt;strong&gt;not&lt;/strong&gt; &amp;lt;b&amp;gt;.&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p>In general, whenever you are writing any body of text, there will be certain parts you consider highly important to the user. This is when the &lt;strong&gt; tag should be used, <strong>not</strong> &lt;b&gt;.</p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
