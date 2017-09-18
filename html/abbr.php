<?php
    $PAGE_NAME = '&lt;abbr&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This element defines a 'full form' of an abbreviated term that will be displayed if the user mouses over the abbreviation.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;The real power of &lt;abbr title="Hypertext Markup Language"&gt;HTML&lt;/abbr&gt; is the degree to which most of the actual work is done by the browser, not the website.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>The real power of <abbr title="Hypertext Markup Language">HTML</abbr> is the degree to which most of the actual work is done by the browser, not the website.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
