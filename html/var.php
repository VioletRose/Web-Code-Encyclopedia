<?php
    $PAGE_NAME = '&lt;var&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This Semantic Web tag designates the included text as a code variable, and displays it in a monospace font.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;A specific type of variable, known as "boolean", is the basis of all modern computing. Commonly known as 0s and 1s, boolean variables have only two possible values:&lt;/p&gt;
				<br>
				&lt;var&gt;0 - False&lt;/var&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;var&gt;1 - True&lt;/var&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>A specific type of variable, known as "boolean", is the basis of all modern computing. Commonly known as 0s and 1s, boolean variables have only two possible values:</p>
			<var>0 - False</var>
			<br>
			<var>1 - True</var>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
