<?php
    $PAGE_NAME = '&lt;title&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>A tag that specifically goes in the head of the page, and defines the page's title as it will be displayed on top of the browser viewing it, as well as in search results and user history.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;title&gt;Violet's Web Code Encyclopedia - &amp;lt;title&amp;gt;&lt;/title&gt;
			</code>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
