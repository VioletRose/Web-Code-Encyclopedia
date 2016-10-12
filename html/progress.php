<?php
    $PAGE_NAME = '&lt;progress&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag displays a visible progress meter in the website, representing something's amount of completion. The example I give here is static, but these are most often used alongside scripting to show progress dynamically.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;progress value="74" max="100"&gt;&lt;/progress&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;progress&gt;&lt;/progress&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<progress value="74" max="100"></progress>
			<br>
			<progress></progress>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>max</code></dt>
			<dd>&#10551; Defines the maximum numeric value of the element, upon which it is complete. If this attribute is not set, it will default to 1.</dd>
			<dt><code>value</code></dt>
			<dd>&#10551; Defines the current numeric value of the element. If not defined, the element will animate to represent being not fully loaded.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
