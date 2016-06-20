<?php
    $PAGE_NAME = '&lt;var&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>Part of the Syntactic Web design philosophy, this tag doesn't merely italicize text but also designates it as a variable to search engines and similar site-scanning algorithms.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;p&gt;A variable, known as "boolean", is the basis of all modern computing. Commonly known as 0s and 1s, boolean variables have only two possible values:&lt;/p&gt;
			<br>
			&lt;var&gt;0 - False&lt;/var&gt;
			<br>
			&lt;br&gt;
			<br>
			&lt;var&gt;1 - True&lt;/var&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<p>A variable, known as "boolean", is the basis of all modern computing. Commonly known as 0s and 1s, boolean variables have only two possible values:</p>
		<var>0 - False</var>
		<br>
		<var>1 - True</var>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
