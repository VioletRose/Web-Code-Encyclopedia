<?php
    $PAGE_NAME = '&lt;b&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>This tag styles text inline to be bolded. Note, however, that due to the Syntactic Web design philosophy, this tag should usually be avoided in favor of other tags depending on the actual reason for the difference. Usually, bold text is used to indicate a strong tone of information that absolutely should not be ignored, and for that purpose, the &lt;strong&gt; tag is better suited. Generally speaking, a tag like this should only be used in cases where none of the normal contexts apply, such as if the text is meant to look different for a purely aesthetic reason.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;p&gt;&lt;b&gt;The boldest of text.&lt;/b&gt;&lt;/p&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p><b>The boldest of text.</b></p>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
