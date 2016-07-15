<?php
    $PAGE_NAME = 'CSS';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p><strong>This page is not complete yet!</strong></p>
		<p>On every page in this section, on the left side of the screen you will find links to pages for each of the properties used in CSS, sorted categorically and alphabetically, as well as indexes of CSS selectors and standard web colors. Each page will have a brief description of the property, an example of its use, and a list of accepted values. On this page, you will also find explanations of the more basic concepts in CSS.</p>
		<p>In HTML, some elements can't be used unless they are contained inside of other ones. But CSS code doesn't, internally, have parent/child roles, it only uses them when referring to other types of code. As such, where a property can only be used alongside of another property, I've noted this in the description. <strong>Additionally, to condense the otherwise huge amount of redundancy, shorthand properties and their related properties will all be described on the same page.</strong></p>
	</section>
	<section>
		<h4>What is CSS?</h4>
		<p>CSS - Cascade StyleSheets code is the primary force behind how the modern Web looks and behaves in your browser. A .css file is loaded by the browser, along with the page, which contains instructions in CSS code for how to display the page and all of its components. CSS code may also be inserted into HTML code through the use of the <a href="/html/style.php"<code>&lt;style&gt;</code></a> tag, but under most circumstances this is best avoided. Note: although the code examples provided in this section invariably make use of the <code>&lt;style&gt;</code> tag, <strong>this is done for the purpose of having a user-readable demonstration and is not recommended for most other purposes.</strong></p>
	</section>
	<section>
		<h4>Syntax - How to Write a CSS Stylesheet</h4>
		<figure>
			<p>Stylesheet files do not have any of the overhead an HTML document does. They simply consist of a list of entries in this format:</p>
			<code>
				<i>selector</i> {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;<i>property</i>: <i>value</i>;
				<br>
				}
			</code>
		</figure>
		<p>The <i>selector</i> is how the browser knows which elements or tags the style rules should be applied to. After that, the { bracket begins the actual instructions. A <i>property</i> is an instruction for the browser on what aspect of the element or tag targeted by the <i>selector</i> is meant to be different from its normal behavior; <code>background-color</code> is one example. The <i>value</i> specifies exactly how the default behavior will be changed. Note that, like HTML, CSS is not very picky about spacing, tabbing, and line breaks. Also like HTML, this should not be taken as an excuse to write sloppy code - under most circumstances, keeping your CSS neat and readable will be a good thing for you and anyone else who may need to work with it. There is one exception: on large sites accessed very frequently and with very long stylesheets, it can be useful to reduce bandwidth use via "minifying" the stylesheet to remove all such unnecessary characters; however, this does not mean the stylesheet should be <i>written</i> that way, and an un-minified backup should be kept for future editing.</p>
	</section>
	<section>
		<h4>Selectors</h4>
		<p>Selectors specify exactly what a set of CSS properties should apply to, and can range from something as simple as the name of an HTML element to more complex attribute filters and even things like what the user's mouse is currently hovering above, or which links they've visited already. For an exhaustive list of the possibilities, please refer to the <a href="http://www.w3schools.com/cssref/css_selectors.asp">W3Schools page</a> on the subject.</p>
	</section>
	<section>
		<h4>Specificity</h4>
		<p>In CSS, a given set of style rules can apply very broadly, from everything on the page, to only elements with a specific id set (which are supposed to be used uniquely, one per site). However, given that this is the case, it easily becomes possible for different rules to conflict with each other, and when this happens, the rule with the more specific selector is the one that will be used. A wildcard selecting every element on the site has less specificity than a rule selecting only <code>&lt;div&gt;</code> elements, which has less specificity than a rule selecting a specific class, which has less specificity than a rule selecting a specific id. The more specific selector always wins a conflict, and in cases where both selectors are equally specific, it will be the one listed last in the stylesheet. There is, however, one exception to this. A CSS property set as <code><i>property</i>: <i>value</i> !important;</code> will take priority no matter the specificity of the associated selector; the only exception is if, somewhere else, the same property is set with an additional number of <code>!important</code>s greater than the first one. <strong>In almost every case, the use of <code>!important</code> is ill-advised and you should increase specificity instead.</strong></p>
	</section>
	<section>
		<h4>Inherited Properties</h4>
		<p>Some CSS properties, once applied to an element, will automatically pass down to any elements or tags it contains, <code>background-color</code> being one example. This can be very important, especially when debugging or trying to figure out why something in particular isn't working as you intended. Try to build up an understanding of which properties auto-inherit, and remember that if they don't do this by default, and you want them to, a very large number of properties also accept <code>inherit</code> as a value.</p>
	</section>
	<section>
		<h4>Useful Shortcuts and Shorthand Properties</h4>
		<p>When setting values for properties, there are a couple of simple shortcuts you can use to save space and avoid adding more properties to your stylesheet than you really need. The most frequent example of this is shorthand properties, things like <code>margin</code> which encompass the function of <code>margin-left</code>, <code>margin-right</code>, and so on, which, if you know how to use them, can allow you to set multiple margin values with one property. Specifically in the case of properties defining sides, like <code>margin</code> or <code>border</code>, keep in mind that the values are arranged clockwise - top, right, down, left. And if you only give them two values, they'll interpret that as equal sides - top/bottom, right/left. A similar shortcut applies to defining colors; you can put in the full hexadecimal value, such as <code>#FF00FF</code>, or you can condense a hex value with repeated characters, i.e. <code>#F0F</code> Keep in mind, though, that it has to contain three repeated characters, as only six and three character values will be interpreted correctly.</p>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
