<?php
    $PAGE_NAME = '&lt;nav&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		A Syntactic Web container intended to contain a block of navigational links. Not all links should be put here, just many navigation links that will all be displayed together.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;nav&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="/index.php"&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="/html.php"&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HTML
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="/css.php"&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSS
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="/javascript.php"&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Javascript
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/a&gt;
			<br>
			&lt;/nav&gt;
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<nav>
			<a href="/index.php">
				Home
			</a>
			<br>
			<a href="/html.php">
				HTML
			</a>
			<br>
			<a href="/css.php">
				CSS
			</a>
			<br>
			<a href="/javascript.php">
				Javascript
			</a>
		</nav>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
