<?php
    $PAGE_NAME = 'CSS';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>On every page in this section, on the left side of the screen you will find links to pages for each of the properties used in CSS, sorted categorically and alphabetically, as well as indexes of CSS selectors and standard web colors. Each page will have a brief description of the property, an example of its use, and a section on how to set its value(s). On this page, you will also find explanations of the more basic concepts in CSS.</p>
		<p>In HTML, some elements can't be used unless they are contained inside of other ones. But CSS code doesn't, internally, have parent/child roles, it only uses them when referring to other types of code. As such, where a property can only be used alongside of another property, I've noted this in the description. <strong>Additionally, to condense the otherwise huge amount of redundancy, shorthand properties and their related properties will all be described on the same page.</strong></p>
	</section>
	<section>
		<h4>What is CSS?</h4>
		<p>CSS - Cascade StyleSheets code is the primary force behind how the modern Web looks and behaves in your browser. A .css file is loaded by the browser, along with the page, which contains instructions in CSS code for how to display the page and all of its components. CSS code may also be inserted into HTML code through the use of the <a href="/html/style.php"<code>&lt;style&gt;</code></a> tag, but under most circumstances this is best avoided. Note: although the code examples provided in this section invariably make use of the <code>&lt;style&gt;</code> tag, <strong>this is done for the purpose of having a user-readable demonstration and is not recommended for most other purposes.</strong></p>
	</section>
	<section>
		<h4>Syntax - How to Write a CSS Stylesheet</h4>
		<figure>
			<p>Stylesheet files do not have any of the overhead an HTML document does. They simply consist of a list of entries, called <strong>rules</strong>, separated by line breaks and in this format:</p>
			<code>
				<var>selector</var> {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;<var>property</var>: <var>value</var>;
				<br>
				}
			</code>
		</figure>
		<p>The <var>selector</var> is how the browser knows which elements or tags the style rules should be applied to. After that, the { bracket begins the actual instructions. A <var>property</var> is an instruction for the browser on what aspect of the element or tag targeted by the <var>selector</var> is meant to be different from its normal behavior; <code>background-color</code> is one example. The <var>value</var> specifies exactly how the default behavior will be changed. Note that, like HTML, CSS is not very picky about spacing, tabbing, and line breaks. Also like HTML, this should not be taken as an excuse to write sloppy code - under most circumstances, keeping your CSS neat and readable will be a good thing for you and anyone else who may need to work with it. There is one exception: on large sites accessed very frequently and with very long stylesheets, it can be useful to reduce bandwidth use via "minifying" the stylesheet to remove all such unnecessary characters; however, this does not mean the stylesheet should be <var>written</var> that way, and an un-minified backup should be kept for future editing.</p>
	</section>
	<section>
		<h4>Selectors</h4>
		<p>Selectors specify exactly what a set of CSS properties should apply to, and can range from something as simple as the name of an HTML element to more complex attribute filters and even things like what the user's mouse is currently hovering above, or which links they've visited already. For an exhaustive list of the possibilities, please refer to the <a href="http://www.w3schools.com/cssref/css_selectors.asp">W3Schools page</a> on the subject.</p>
	</section>
	<section>
		<h4>Specificity</h4>
		<p>In CSS, a given set of style rules can apply very broadly, from everything on the page, to only elements with a specific id set (which are supposed to be used uniquely, one per site). However, given that this is the case, it easily becomes possible for different rules to conflict with each other, and when this happens, the rule with the more specific selector is the one that will be used. A wildcard selecting every element on the site has less specificity than a rule selecting only <code>&lt;div&gt;</code> elements, which has less specificity than a rule selecting a specific class, which has less specificity than a rule selecting a specific id. The more specific selector always wins a conflict, and in cases where both selectors are equally specific, it will be the one listed last in the stylesheet. There is, however, one exception to this. A CSS property set as <code><var>property</var>: <var>value</var> !important;</code> will take priority no matter the specificity of the associated selector; the only exception is if, somewhere else, the same property is set with an additional number of <code>!important</code>s greater than the first one. <strong>In almost every case, the use of <code>!important</code> is ill-advised and you should increase specificity instead.</strong></p>
	</section>
	<section>
		<h4>Inherited Properties</h4>
		<p>Some CSS properties, once applied to an element, will automatically pass down to any elements or tags it contains, <code>background-color</code> being one example. This can be very important, especially when debugging or trying to figure out why something in particular isn't working as you intended. Try to build up an understanding of which properties auto-inherit, and remember that if they don't do this by default, and you want them to, a very large number of properties also accept <code>inherit</code> as a value.</p>
	</section>
	<section>
		<h4>Height, Width, and Dimensions</h4>
		<p>In CSS, nearly every way in which the size of something can be set works multiple ways, depending on how the size is being measured. There are two basic kinds of measurement, absolute and relative. Absolute dimensions are more useful for things where the size has to be precisely controlled, while relative measurements are especially useful when a page is meant to be able to scale down to fit a smaller browser window, which is critical for responsive design. Additionally, 0 uses no measurements as it is the same regardless of what scale is used.</p>
		<br>
		<details>
			<summary>Absolute measurements:</summary>
			<dl>
				<dt><code>cm</code></dt>
				<dd>Each unit is one centimeter.</dd>
				<dt><code>mm</code></dt>
				<dd>Each unit is one millimeter (1/10th of a centimeter).</dd>
				<dt><code>in</code></dt>
				<dd>Each unit is one inch (2.54 centimeters).</dd>
				<dt><code>px</code></dt>
				<dd>Each unit is one pixel (1/96th of an inch).</dd>
				<dt><code>pt</code></dt>
				<dd>Each unit is one point (1/72th of an inch). The most common measurement of font size.</dd>
				<dt><code>pc</code></dt>
				<dd>Each unit is one pica (12 points).</dd>
			</dl>
		</details>
		<details>
			<summary>Relative measurements:</summary>
			<dl>
				<dt><code>em</code></dt>
				<dd>Each unit is 100% of the size of the element's current font.</dd>
				<dt><code>ex</code></dt>
				<dd>Each unit is approximately 2% of the current font's x-height.</dd> <!--This needs verification and may be incorrect.-->
				<dt><code>ch</code></dt>
				<dd>Each unit is approximately 1% of the width of the current font's 0 character.</dd> <!--This needs verification and may be incorrect.-->
				<dt><code>rem</code></dt>
				<dd>Each unit is 100% of the size of the <code>&lt;body&gt;</code> element's current font.</dd>
				<dt><code>vw</code></dt>
				<dd>Each unit is 1% of the width of the viewport, which is the browser window.</dd>
				<dt><code>vh</code></dt>
				<dd>Each unit is 1% of the height of the viewport, which is the browser window.</dd>
				<dt><code>vmin</code></dt>
				<dd>Each unit is 1% of the height or width of the viewport, whichever is smaller.</dd>
				<dt><code>vmax</code></dt>
				<dd>Each unit is 1% of the height or width of the viewport, whichever is larger.</dd>
				<dt><code>%</code></dt>
				<dd>A percentage of the parent element's size, from 0% to 100%. Under most circumstances, if this is being used as a measurement of distance, distance is from the top left corner of the element. Note that <code>&lt;body&gt;</code> is always the parent element if nothing else is.</dd>
			</dl>
		</details>
	</section>
	<section>
		<h4>Responsive Design</h4>
		<p>Responsive design is the term used for designing sites in such a way that they retain full function and as much aesthetics as possible regardless of what device is being used to view them. This mostly takes the form of choosing relative measurements so the page will gracefully scale down to fit a phone's screen without requiring the user to scroll horizontally and vertically all over to find what they're looking for. Though, depending on the design, sometimes CSS alone will not be enough and other types of code must be employed to do the rest of the work; the navigation sidebar in this section is a good example of something that can't really be reduced in size without loss of functionality. In general, responsive design is an advanced topic but very important for developers hoping to work professionally or for a broad audience, due to the fact that mobile phones and tablets have become an inextricable part of modern web browsing.
	</section>
	<section>
		<h4>Useful Shortcuts and Shorthand Properties</h4>
		<p>When setting values for properties, there are a couple of simple shortcuts you can use to save space and avoid adding more properties to your stylesheet than you really need. The most frequent example of this is shorthand properties, things like <code>margin</code> which encompass the function of <code>margin-left</code>, <code>margin-right</code>, and so on, which, if you know how to use them, can allow you to set multiple margin values with one property. Specifically in the case of properties defining sides, like <code>margin</code> or <code>border</code>, keep in mind that the values are arranged clockwise - top, right, down, left. And if you only give them two values, they'll interpret that as equal sides - top/bottom, right/left, while three values results in definitions for top, right/left, and bottom. A similar shortcut applies to defining colors; you can put in the full hexadecimal value, such as <code>#FF00FF</code>, or you can condense a hex value with repeated characters, i.e. <code>#F0F</code> Keep in mind, though, that it has to contain three repeated characters, as only six and three character values will be interpreted correctly. Lastly, while entering a web color name or a hex value might be the fastest, most space-efficient, and therefore most optimal method of defining a color, keep in mind that only <code>rgba(<var>r</var>, <var>g</var>, <var>b</var>, <var>a</var>)</code> allows transparency to be set with the <code><var>a</var></code>, a number between 0 and 1 for full transparency to no transparency.</p>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
