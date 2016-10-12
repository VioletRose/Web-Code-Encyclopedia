<?php
    $PAGE_NAME = '&lt;comment&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This is the HTML comment syntax. All text between the opening <code>&lt;</code> and the closing <code>&gt;</code> will be ignored by the browser completely, <em>unless</em> it is placed within an element that expects CSS or Javascript formatting, in which case it can cause adverse effects.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;!--This is an example of how to properly format a comment in HTML.--&gt;
			</code>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
