<?php
    $PAGE_NAME = '&lt;h1-h6&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This Semantic Web tag designates the included text as a heading for the page or subsection of the page, as well as bolding it and adjusting the font size by default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;h1&gt;Heading one!&lt;/h1&gt;
				<br>
				&lt;p&gt;This heading is rendered with 2em font size.&lt;/p&gt;
				<br>
				&lt;h2&gt;Heading two!&lt;/h2&gt;
				<br>
				&lt;p&gt;This heading is rendered with 1.5em font size.&lt;/p&gt;
				<br>
				&lt;h3&gt;Heading three!&lt;/h3&gt;
				<br>
				&lt;p&gt;This heading is rendered with 1.17em font size.&lt;/p&gt;
				<br>
				&lt;h4&gt;Heading four!&lt;/h4&gt;
				<br>
				&lt;p&gt;This heading is rendered with 1em font size.&lt;/p&gt;
				<br>
				&lt;h5&gt;Heading five!&lt;/h5&gt;
				<br>
				&lt;p&gt;This heading is rendered with 0.83em font size.&lt;/p&gt;
				<br>
				&lt;h6&gt;Heading six!&lt;/h6&gt;
				<br>
				&lt;p&gt;This heading is rendered with 0.67em font size.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<h1>Heading one!</h1>
			<p>This heading is rendered with 2em font size.</p>
			<h2>Heading two!</h2>
			<p>This heading is rendered with 1.5em font size.</p>
			<h3>Heading three!</h3>
			<p>This heading is rendered with 1.17em font size.</p>
			<h4>Heading four!</h4>
			<p>This heading is rendered with 1em font size.</p>
			<h5>Heading five!</h5>
			<p>This heading is rendered with 0.83em font size.</p>
			<h6>Heading six!</h6>
			<p>This heading is rendered with 0.67em font size.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
