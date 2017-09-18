<?php
    $PAGE_NAME = '&lt;figure&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>A container intended for content that is related to the main text of the page, but intended to be neatly separated from it. Mostly used for photos, images, charts, and excerpts of code or text.</p>
		<p>Note: This tag should never be displayed inline, as that defeats the purpose of having its content be separate from the page's normal flow.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;This is an example of how the navigation panel for the HTML section of my encyclopedia looked as of May 28th, 2016:&lt;/p&gt;
				<br>
				&lt;figure&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;img class="htmlSized" src="/images/navpanel.png" alt="Old HTML navigation panel" width="509" height="168"&gt;&lt;/img&gt;
				<br>
				&lt;/figure&gt;
				<br>
				&lt;p&gt;As one can see, it was a very makeshift, unprofessional style, and fortunately was eventually overhauled completely.&lt;/p&gt;
				<br>
				&lt;/figure&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>This is an example of how the navigation panel for the HTML section of my encyclopedia looked as of May 28th, 2016:</p>
			<figure>
				<img class="htmlSized" src="/images/navpanel.png" alt="Old HTML navigation panel" width="509" height="168">
			</figure>
			<p>As one can see, it was a very makeshift, unprofessional style, and fortunately was eventually overhauled completely.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
