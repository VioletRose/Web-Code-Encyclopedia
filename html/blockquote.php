<?php
    $PAGE_NAME = '&lt;blockquote&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>Serving as part of the "syntactic web" specification, &lt;blockquote&gt; is an element that both automatically indents a section of text as well as informs software reading it that it is quoted from a source, often another website.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;blockquote cite="https://violetrose.prototeam.org/html.php"&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I will make the list of elements prettier in the future, but for right now I just wanted to get started.
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/blockquote&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<blockquote cite="https://violetrose.prototeam.org/html.php">I will make the list of elements prettier in the future, but for right now I just wanted to get started.</blockquote>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
