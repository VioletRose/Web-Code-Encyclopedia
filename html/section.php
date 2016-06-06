<?php
    $PAGE_NAME = '&lt;section&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>A more generic form of more specific tags such as header and footer, &lt;section&gt; should be used in cases where a more proper tag can't be determined.</p>
	<h4>Example:</h4>
	<figure>
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
	<h4>Will be rendered as:</h4>
	<figure>
		<section>
			<h1>Quantum Uncertainty</h1>
			<p>Is this the example section? Or is the demonstration section? Is it both? Who could ever know for sure?</p>
		</section>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
