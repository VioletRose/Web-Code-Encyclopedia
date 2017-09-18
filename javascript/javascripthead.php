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
	<h4>Javascript Objects</h4>
	<ul>
		<li><a href="/javascript/array.php">Array</a></li>
		<li><a href="/javascript/boolean.php">Boolean</a></li>
		<li><a href="/javascript/date.php">Date</a></li>
		<li><a href="/javascript/error.php">Error</a></li>
		<li><a href="/javascript/global.php">Global</a></li>
		<li><a href="/javascript/math.php">Math</a></li>
		<li><a href="/javascript/number.php">Number</a></li>
		<li><a href="/javascript/operators.php">Operators</a></li>
		<li><a href="/javascript/regexp.php">RegExp</a></li>
		<li><a href="/javascript/statements.php">Statements</a></li>
		<li><a href="/javascript/string.php">String</a></li>
	</ul>
	<h4>Browser BOM</h4>
	<ul>
		<li><a href="/javascript/window.php">Window</a></li>
		<li><a href="/javascript/navigator.php">Navigator</a></li>
		<li><a href="/javascript/screen.php">Screen</a></li>
		<li><a href="/javascript/history.php">History</a></li>
		<li><a href="/javascript/location.php">Location</a></li>
	</ul>
	<h4>HTML DOM</h4>
	<ul>
		<li><a href="/javascript/document.php">Document</a></li>
		<li><a href="/javascript/element.php">Element</a></li>
		<li><a href="/javascript/attribute.php">Attribute</a></li>
		<li><a href="/javascript/event.php">Event</a></li>
		<li><a href="/javascript/style.php">Style</a></li>
	</ul>
	<h4>Elements</h4>
	<ul>
		<li><a href="/javascript/canvas.php">Canvas</a></li>
	</ul>
	<h4>jQuery</h4>
	<ul>
		<li><a href="/javascript/jqajax.php">AJAX</a></li>
		<li><a href="/javascript/jqeffect.php">Effect</a></li>
		<li><a href="/javascript/jqevent.php">Event</a></li>
		<li><a href="/javascript/jqhtml-css.php">HTML/CSS</a></li>
		<li><a href="/javascript/jqmisc.php">Misc</a></li>
		<li><a href="/javascript/jqproperties.php">Properties</a></li>
		<li><a href="/javascript/jqselectors.php">Selectors</a></li>
		<li><a href="/javascript/jqtraversing.php">Traversing</a></li>
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
