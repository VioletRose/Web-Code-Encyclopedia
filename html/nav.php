<?php
    $PAGE_NAME = '&lt;nav&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This Syntactic Web container designates the contained elements and text as a block of navigational links. Not all links should be contained inside a <code>&lt;nav&gt;</code> element, just many navigation links that will all be displayed together.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;nav&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="/index.php"&gt;Home&lt;/a&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="/html.php"&gt;HTML&lt;/a&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="/css.php"&gt;CSS&lt;/a&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="/javascript.php"&gt;Javascript&lt;/a&gt;
				<br>
				&lt;/nav&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<nav>
				<a href="/index.php">Home</a>
				<br>
				<a href="/html.php">HTML</a>
				<br>
				<a href="/css.php">CSS</a>
				<br>
				<a href="/javascript.php">Javascript</a>
			</nav>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
