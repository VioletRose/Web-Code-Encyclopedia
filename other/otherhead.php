<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Violet's Web Code Encyclopedia - <?php echo $PAGE_NAME; ?></title>
<link rel="stylesheet" type="text/css" href="/stylesheets/pure/base-min.css">
<link rel="stylesheet" type="text/css" href="/stylesheets/pure/grids-min.css">
<link rel="stylesheet" type="text/css" href="/stylesheets/pure/grids-responsive-min.css">
<link rel="stylesheet" type="text/css" href="/stylesheets/encyclopedia.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans|Inconsolata' rel='stylesheet' type='text/css'><!--The use of open fonts is a personal quirk of mine, namely that I want all text on this website to appear as intended and not be thrown off by browsers that don't follow web standards, or fonts that haven't been updated.-->
<script src="/scripts/jquery-3.0.0.min.js"></script>
<?php
	if(isset($EXTRA_PAGE_HEAD_LINES)) {
		foreach ($EXTRA_PAGE_HEAD_LINES as &$value) {
			echo $value;
		}
	}
?>
</head>
<body>
<input class="navTab" type="checkbox">
<nav class="navSidebar">
	<ul>
		<li><a href="/other/clickyclickyblocks.php">Clicky Clicky Blocks</a></li>
		<li><a href="/other/javascriptexamples.php">Javascript Examples</a></li>
		<li><a href="/other/palindromechecker.php">Palindrome Checker</a></li>
		<li><a href="/other/snek.php">SNEK</a></li>
		<li><a href="/other/spookyghostwriter.php">Spooky Ghost Writer</a></li>
	</ul>
</nav>
<div class="pure-g">
<header class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<h1 class="pageHeadline"><?php echo $PAGE_NAME; ?></h1>
	<nav class="navTopbar">
		<a href="/index.php">Home</a>
		<a href="/html.php">HTML</a>
		<a href="/css.php">CSS</a>
		<a href="/javascript.php">Javascript</a>
		<a href="/other.php">Other</a>
		<a href="/changelog.php">Changelog</a>
	</nav>
</header>
