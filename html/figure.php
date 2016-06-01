<?php
    $PAGE_NAME = '&lt;figure&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		A container intended for content that is related to the main text of the page, but intended to be neatly separated from it. Mostly used for photos, images, charts, and excerpts of code or text.
		<br>
		Note: This tag should never be displayed inline, as that defeats the purpose of having its content be separate from the page's normal flow.
	</p>
	<p>
		Example:
		<br>
		&lt;p&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;This is an example of how the navigation panel for the HTML section of my encyclopedia looked as of May 28th, 2016:
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;figure&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src="/images/navpanel.png" alt="Old HTML navigation panel" width="509" height="168"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/img&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/figure&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;As one can see, it was a very makeshift, unprofessional style, and fortunately was eventually overhauled completely.
		<br>
		&lt;/p&gt;
	</p>
		Will be rendered as:
		<br>
		This is an example of how the navigation panel for the HTML section of my encyclopedia looked as of May 28th, 2016:
		<figure>
			<img src="/images/navpanel.png" alt="Old HTML navigation panel" width="509" height="168">
			</img>
		</figure>
		As one can see, it was a very makeshift, unprofessional style, and fortunately was eventually overhauled completely.
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
