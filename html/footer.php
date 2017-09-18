<?php
    $PAGE_NAME = '&lt;footer&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This Semantic Web element designates any contained elements or text as a footer after the main content. This is usually used to contain information like authorship, copyright information, contact details, or related pages.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;footer&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Created by Violet Rose&lt;/p&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Contact me at: &lt;a href="mailto:actuallya@fakeemailaddress.com"&gt;actuallya@fakeemailaddress.com&lt;/a&gt;&lt;/p&gt;
				<br>
				&lt;/footer&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<footer>
				<p>Created by Violet Rose</p>
				<p>Contact me at: <a href="mailto:actuallya@fakeemailaddress.com">actuallya@fakeemailaddress.com</a></p>
			</footer>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
