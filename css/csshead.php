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
	<h4>
		<a href="/css/prefixes.php">Prefixes</a>
		<a href="/css/colors.php">Web Colors</a>
	</h4>
	<h4>Properties</h4>
	<ul>
		<li><code><a href="/css/align-content.php">align-content</a></code></li>
		<li><code><a href="/css/align-items.php">align-items</a></code></li>
		<li><code><a href="/css/align-self.php">align-self</a></code></li>
		<li><code><a href="/css/all.php">all</a></code></li>
		<li><code><a href="/css/animation.php">animation</a></code></li>
		<li><code><a href="/css/backface-visibility.php">backface-visibility</a></code></li>
		<li><code><a href="/css/background.php">background</a></code></li>
		<li><code><a href="/css/background-blend-mode.php">background-blend-mode</a></code></li>
		<li><code><a href="/css/border.php">border</a></code></li>
		<li><code><a href="/css/border-collapse.php">border-collapse</a></code></li>
		<li><code><a href="/css/border-image.php">border-image</a></code></li>
		<li><code><a href="/css/border-radius.php">border-radius</a></code></li>
		<li><code><a href="/css/border-spacing.php">border-spacing</a></code></li>
		<li><code><a href="/css/bottom.php">bottom</a></code></li>
		<li><code><a href="/css/box-shadow.php">box-shadow</a></code></li>
		<li><code><a href="/css/box-sizing.php">box-sizing</a></code></li>
		<li><code><a href="/css/caption-side.php">caption-side</a></code></li>
		<li><code><a href="/css/clear.php">clear</a></code></li>
		<li><code><a href="/css/clip.php">clip</a></code></li>
		<li><code><a href="/css/color.php">color</a></code></li>
		<li><code><a href="/css/column-gap.php">column-gap</a></code></li>
		<li><code><a href="/css/column-rule.php">column-rule</a></code></li>
		<li><code><a href="/css/column-span.php">column-span</a></code></li>
		<li><code><a href="/css/columns.php">columns</a></code></li>
		<li><code><a href="/css/content.php">content</a></code></li>
		<li><code><a href="/css/counter-increment.php">counter-increment</a></code></li>
		<li><code><a href="/css/counter-reset.php">counter-reset</a></code></li>
		<li><code><a href="/css/cursor.php">cursor</a></code></li>
		<li><code><a href="/css/direction.php">direction</a></code></li>
		<li><code><a href="/css/display.php">display</a></code></li>
		<li><code><a href="/css/empty-cells.php">empty-cells</a></code></li>
		<li><code><a href="/css/filter.php">filter</a></code></li>
		<li><code><a href="/css/flex.php">flex</a></code></li>
		<li><code><a href="/css/flex-flow.php">flex-flow</a></code></li>
		<li><code><a href="/css/float.php">float</a></code></li>
		<li><code><a href="/css/font.php">font</a></code></li>
		<li><code><a href="/css/font-size-adjust.php">font-size-adjust</a></code></li>
		<li><code><a href="/css/height.php">height</a></code></li>
		<li><code><a href="/css/justify-content.php">justify-content</a></code></li>
		<li><code><a href="/css/left.php">left</a></code></li>
		<li><code><a href="/css/letter-spacing.php">letter-spacing</a></code></li>
		<li><code><a href="/css/line-height.php">line-height</a></code></li>
		<li><code><a href="/css/list-style.php">list-style</a></code></li>
		<li><code><a href="/css/margin.php">margin</a></code></li>
		<li><code><a href="/css/max-height.php">max-height</a></code></li>
		<li><code><a href="/css/max-width.php">max-width</a></code></li>
		<li><code><a href="/css/min-height.php">min-height</a></code></li>
		<li><code><a href="/css/min-width.php">min-width</a></code></li>
		<li><code><a href="/css/opacity.php">opacity</a></code></li>
		<li><code><a href="/css/order.php">order</a></code></li>
		<li><code><a href="/css/outline.php">outline</a></code></li>
		<li><code><a href="/css/outline-offset.php">outline-offset</a></code></li>
		<li><code><a href="/css/overflow.php">overflow</a></code></li>
		<li><code><a href="/css/padding.php">padding</a></code></li>
		<li><code><a href="/css/page-break-after.php">page-break-after</a></code></li>
		<li><code><a href="/css/page-break-before.php">page-break-before</a></code></li>
		<li><code><a href="/css/page-break-inside.php">page-break-inside</a></code></li>
		<li><code><a href="/css/perspective.php">perspective</a></code></li>
		<li><code><a href="/css/perspective-origin.php">perspective-origin</a></code></li>
		<li><code><a href="/css/position.php">position</a></code></li>
		<li><code><a href="/css/quotes.php">quotes</a></code></li>
		<li><code><a href="/css/resize.php">resize</a></code></li>
		<li><code><a href="/css/right.php">right</a></code></li>
		<li><code><a href="/css/tab-size.php">tab-size</a></code></li>
		<li><code><a href="/css/table-layout.php">table-layout</a></code></li>
		<li><code><a href="/css/text-align.php">text-align</a></code></li>
		<li><code><a href="/css/text-align-last.php">text-align-last</a></code></li>
		<li><code><a href="/css/text-decoration.php">text-decoration</a></code></li>
		<li><code><a href="/css/text-indent.php">text-indent</a></code></li>
		<li><code><a href="/css/text-overflow.php">text-overflow</a></code></li>
		<li><code><a href="/css/text-shadow.php">text-shadow</a></code></li>
		<li><code><a href="/css/text-transform.php">text-transform</a></code></li>
		<li><code><a href="/css/top.php">top</a></code></li>
		<li><code><a href="/css/transform.php">transform</a></code></li>
		<li><code><a href="/css/transform-origin.php">transform-origin</a></code></li>
		<li><code><a href="/css/transform-style.php">transform-style</a></code></li>
		<li><code><a href="/css/transition.php">transition</a></code></li>
		<li><code><a href="/css/unicode-bidi.php">unicode-bidi</a></code></li>
		<li><code><a href="/css/vertical-align.php">vertical-align</a></code></li>
		<li><code><a href="/css/visibility.php">visibility</a></code></li>
		<li><code><a href="/css/white-space.php">white-space</a></code></li>
		<li><code><a href="/css/width.php">width</a></code></li>
		<li><code><a href="/css/word-break.php">word-break</a></code></li>
		<li><code><a href="/css/word-spacing.php">word-spacing</a></code></li>
		<li><code><a href="/css/word-wrap.php">word-wrap</a></code></li>
		<li><code><a href="/css/z-index.php">z-index</a></code></li>
	</ul>
	<h4>Rules</h4>
	<ul>
		<li><code><a href="/css/font-face.php">@font-face</a></code></li>
		<li><code><a href="/css/keyframes.php">@keyframes</a></code></li>
		<li><code><a href="/css/media.php">@media</a></code></li>
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
