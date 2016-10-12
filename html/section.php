<?php
    $PAGE_NAME = '&lt;section&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This Syntactic Web element designates any included elements or text as part of a subsection within the main body of the page.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;section&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;Quantum Uncertainty&lt;/h1&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Is this the example section? Or is the demonstration section? Is it both? Who could ever know for sure?&lt;/p&gt;
				<br>
				&lt;/section&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<section>
				<h1>Quantum Uncertainty</h1>
				<p>Is this the example section? Or is the demonstration section? Is it both? Who could ever know for sure?</p>
			</section>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
