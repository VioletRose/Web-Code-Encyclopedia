<?php
    $PAGE_NAME = '&lt;style&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>Mostly used only within the head section of the page, to achieve the same effects as CSS, but this tag should generally be avoided in favor of actual stylesheets unless there is a genuine need for it. The &lt;style&gt; tag is also similar to &lt;script&gt;, in that the code inside needs to be formatted differently from normal HTML. In this element, use CSS syntax for everything, even comments, or things may fail unexpectedly.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;style&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;.pageHeadline {
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-size: 36pt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-weight: normal;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-align: center;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;}
			<br>
			&lt;/style&gt;
		</code>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
