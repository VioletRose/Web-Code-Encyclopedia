<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Violet's Web Code Encyclopedia - <?php echo $PAGE_NAME; ?></title>
<link rel="stylesheet" type="text/css" href="/stylesheets/encyclopedia.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans|Inconsolata' rel='stylesheet' type='text/css'><!--The use of open fonts is a personal quirk of mine, namely that I want all text on this website to appear as intended and not be thrown off by browsers that don't follow web standards, or fonts that haven't been updated.-->
<script src="/scripts/jquery-3.0.0.min.js"></script>
<script src="/scripts/navMenu.js"></script>
</head>
<body class="languageSection">
<nav class="navSidebar">
	<ul>
		<li><a href="/javascript/global.php">Global</a></li>
		<li><a href="/javascript/operators.php">Operators</a></li>
		<li><a href="/javascript/number.php">Number</a></li>
		<li><a href="/javascript/statements.php">Statements</a></li>
		<li><a href="/javascript/string.php">String</a></li>
	</ul>
	<div class="hidden scriptedMenu">
		<h4>Javascript</h4>
		<div class="chevron"></div>
		<div class="scriptedMenu hidden">
			<h4>Boolean</h4>
			<div class="chevron"></div>
			<ul class="hidden">
				<li><a <!--href="/javascript/overview-boolean.php"-->Overview</a></li>
				<li><a <!--href="/javascript/booleanproperties.php"-->Properties</a></li>
				<li><a <!--href="/javascript/booleanmethods.php"-->Methods</a></li>
			</ul>
		</div>
		<div class="scriptedMenu hidden">
			<h4>Browser BOM</h4>
			<div class="chevron"></div>
			<ul class="hidden">
				<li><a <!--href="/javascript/overview-bom.php"-->Overview</a></li>
			</ul>
			<div class="scriptedMenu hidden">
				<h4>Window</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="/javascript/windowproperties.php"-->Properties</a></li>
					<li><a <!--href="/javascript/windowmethods.php"-->Methods</a></li>
				</ul>
			</div>
			<div class="scriptedMenu hidden">
				<h4>Navigator</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="/javascript/navigatorproperties.php"-->Properties</a></li>
					<li><a <!--href="/javascript/navigatormethods.php"-->Methods</a></li>
				</ul>
			</div>
			<div class="scriptedMenu hidden">
				<h4>Screen</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="screenproperties.php"-->Properties</a></li>
				</ul>
			</div>
			<div class="scriptedMenu hidden">
				<h4>History</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="/javascript/historyproperties.php"-->Properties</a></li>
					<li><a <!--href="/javascript/historymethods.php"-->Methods</a></li>
				</ul>
			</div>
			<div class="scriptedMenu hidden">
				<h4>Location</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="/javascript/locationproperties.php"-->Properties</a></li>
					<li><a <!--href="/javascript/locationmethods.php"-->Methods</a></li>
				</ul>
			</div>
		</div>
		<div class="scriptedMenu hidden">
			<h4><code>CSSStyleDeclaration</code></h4>
			<div class="chevron"></div>
			<ul class="hidden">
				<li><a <!--href="/javascript/cssstyledeclarationproperties.php"-->Properties</a></li>
				<li><a <!--href="/javascript/cssstyledelcarationmethods.php"-->Methods</a></li>
			</ul>
		</div>
		<div class="scriptedMenu hidden">
			<div class="chevron"></div>
			<h4>Date</h4>
			<ul class="hidden">
				<li><a <!--href="/javascript/overview-date.php"-->Overview</a></li>
				<li><a <!--href="/javascript/dateproperties.php"-->Properties</a></li>
				<li><a <!--href="/javascript/datemethods.php"-->Methods</a></li>
			</ul>
		</div>
		<div class="scriptedMenu hidden">
			<h4>Global</h4>
			<div class="chevron"></div>
			<ul class="hidden">
				<li><a <!--href="/javascript/globalproperties.php"-->Properties</a></li>
				<li><a <!--href="/javascript/globalfunctions.php"-->Functions</a></li>
			</ul>
		</div>
		<div class="scriptedMenu hidden">
			<h4>HTML DOM</h4>
			<div class="chevron"></div>
			<div class="scriptedMenu hidden">
				<h4>Document</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="/javascript/overview-document.php"-->Overview</a></li>
					<li><a <!--href="/javascript/documentproperties-methods.php"-->Properties/Methods</a></li>
				</ul>
			</div>
			<div class="scriptedMenu hidden">
				<h4>Elements</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="/javascript/overview-elements.php"-->Overview</a></li>
					<li><a <!--href="/javascript/elementsproperties-methods.php"-->Properties/Methods</a></li>
				</ul>
			</div>
			<div class="scriptedMenu hidden">
				<h4>Attributes</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="/javascript/overview-attributes.php"-->Overview</a></li>
					<li><a <!--href="/javascript/attributesproperties-methods.php"-->Properties/Methods</a></li>
				</ul>
			</div>
			<div class="scriptedMenu hidden">
				<h4>Events</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="/javascript/overview-events">Overview</a></li>
					<li><a <!--href="/javascript/eventconstants.php"-->Constants</a></li>
					<li><a <!--href="/javascript/eventproperties.php"-->Properties</a></li>
					<li><a <!--href="/javascript/animationevents.php"-->Animation</a></li>
					<li><a <!--href="/javascript/clipboardevents.php"-->Clipboard</a></li>
					<li><a <!--href="/javascript/dragevents.php"-->Drag</a></li>
					<li><a <!--href="/javascript/formevents.php"-->Form</a></li>
					<li><a <!--href="/javascript/frame-objectevents.php"-->Frame/Object</a></li>
					<li><a <!--href="/javascript/keyboardevents.php"-->Keyboard</a></li>
					<li><a <!--href="/javascript/mediaevents.php"-->Media</a></li>
					<li><a <!--href="/javascript/miscevents.php"-->Misc</a></li>
					<li><a <!--href="/javascript/mouseevents.php"-->Mouse</a></li>
					<li><a <!--href="/javascript/printevents.php"-->Print</a></li>
					<li><a <!--href="/javascript/server-sentevents.php"-->Server-sent</a></li>
					<li><a <!--href="/javascript/touchevents.php"-->Touch</a></li>
					<li><a <!--href="/javascript/transitionevents.php"-->Transition</a></li>
				</ul>
				<div class="scriptedMenu hidden">
					<h4>Objects</h4>
					<div class="chevron"></div>
					<ul class="hidden">
						<li><a <!--href="/javascript/animationeventobject.php"-->AnimationEvent</a></li>
						<li><a <!--href="/javascript/focuseventobject.php"-->FocusEvent</a></li>
						<li><a <!--href="/javascript/hashchangeobject.php"-->HashChange</a></li>
						<li><a <!--href="/javascript/keyboardeventobject.php"-->KeyboardEvent</a></li>
						<li><a <!--href="/javascript/mouseeventobject.php"-->MouseEvent</a></li>
						<li><a <!--href="/javascript/pagetransitioneventobject.php"-->PageTransitionEvent</a></li>
						<li><a <!--href="/javascript/transitioneventobject.php"-->TransitionEvent</a></li>
						<li><a <!--href="/javascript/wheeleventobject.php"-->WheelEvent</a></li>
					</ul>
				</div>
			</div>
			<div class="scriptedMenu hidden">
				<h4>Style</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="/javascript/overview-style.php"-->Overview</a></li>
					<li><a <!--href="/javascript/styleproperties.php"-->Properties</a></li>
				</ul>
			</div>
		</div>
		<div class="scriptedMenu hidden">
			<h4>Math</h4>
			<div class="chevron"></div>
			<ul class="hidden">
				<li><a <!--href="/javascript/mathproperties.php"-->Properties</a></li>
				<li><a <!--href="/javascript/mathmethods.php"-->Methods</a></li>
			</ul>
		</div>
		<div class="scriptedMenu hidden">
			<h4>Operators</h4>
			<div class="chevron"></div>
			<ul class="hidden">
				<li><a <!--href="/javascript/arithmeticoperators.php"-->Arithmetic</a></li>
				<li><a <!--href="/javascript/assignmentoperators.php"-->Assignment</a></li>
				<li><a <!--href="/javascript/stringoperators.php"-->String</a></li>
				<li><a <!--href="/javascript/comparisonoperators.php"-->Comparison</a></li>
				<li><a <!--href="/javascript/conditionaloperators.php"-->Conditional</a></li>
				<li><a <!--href="/javascript/logicaloperators.php"-->Logical</a></li>
				<li><a <!--href="/javascript/bitwiseoperators.php"-->Bitwise</a></li>
				<li><code><a <!--href="/javascript/typeofoperator.php"-->typeof</a></code></li>
				<li><code><a <!--href="/javascript/deleteoperator.php"-->delete</a></code></li>
				<li><code><a <!--href="/javascript/inoperator.php"-->in</a></code></li>
				<li><code><a <!--href="/javascript/instanceofoperators.php"-->instanceof</a></code></li>
				<li><code><a <!--href="/javascript/voidoperator.php"-->void</a></code></li>
			</ul>
		</div>
		<div class="scriptedMenu hidden">
			<h4>RegExp</h4>
			<div class="chevron"></div>
			<ul class="hidden">
				<li><a <!--href="/javascript/overview-regexp"-->Overview</a></li>
				<li><a <!--href="/javascript/regexpproperties"-->Properties</a></li>
				<li><a <!--href="/javascript/regexpmethods"-->Methods</a></li>
			</ul>
		</div>
		<div class="scriptedMenu hidden">
			<h4>Statements</h4>
			<div class="chevron"></div>
			<ul class="hidden">
				<li><a <!--href="/javascript/overview-statements.php"-->Overview</a></li>
				<li><a <!--href="/javascript/statementidentifiers.php"-->Identifiers</a></li>
			</ul>
		</div>
		<div class="scriptedMenu hidden">
			<h4>Variables</h4>
			<div class="chevron"></div>
			<ul class="hidden">
				<li><a <!--href="/javascript/overview-variables.php"-->Overview</a></li>
				<li><a <!--href="/javascript/typeconversions.php"-->Type Conversions</a></li>
			</ul>
			<div class="scriptedMenu hidden">
				<h4>Arrays</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="/javascript/arrayproperties.php"-->Properties</a></li>
					<li><a <!--href="/javascript/arraymethods.php"-->Methods</a></li>
				</ul>
			</div>
			<div class="scriptedMenu hidden">
				<h4>Numbers</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="/javascript/numberproperties.php"-->Properties</a></li>
					<li><a <!--href="/javascript/numbermethods.php"-->Methods</a></li>
				</ul>
			</div>
			<div class="scriptedMenu hidden">
				<h4>Strings</h4>
				<div class="chevron"></div>
				<ul class="hidden">
					<li><a <!--href="/javascript/stringproperties.php"-->Properties</a></li>
					<li><a <!--href="/javascript/stringmethods.php"-->Methods</a></li>
					<li><a <!--href="/javascript/stringhtmlwrappers.php"-->HTML Wrappers</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<header>
	<h1 class="pageHeadline"><?php echo $PAGE_NAME; ?></h1>
	<nav class="navTopbar">
		<a href="/index.php">Home</a>
		<a href="/html.php">HTML</a>
		<a href="/css.php">CSS</a>
		<a href="/javascript.php">Javascript</a>
		<a href="/changelog.php">Changelog</a>
	</nav>
</header>
