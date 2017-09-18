<?php
	$PAGE_NAME = 'jQuery HTML / CSS';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>The jQuery library has many methods for directly manipulating the HTML on the page, as well as the CSS properties which apply to it. Except for the <code>html()</code> method, these methods all work equally well for HTML and XML documents.</p>
	</section>
	<section>
		<h4>Element jQuery HTML / CSS Methods</h4>
		<dl>
			<dt><code>addClass()</code></dt>
			<dd>Accepts a new class name (or multiple space-separated class names) or a function which returns new class name(s) in the same format in its argument, and appends the new class name(s) to the statement's selected element(s). The function itself can have two arguments of any name, which will be used as aliases for the index position of the current element in the set (of selected elements), and the current class name(s) of the current element.</dd>
			<dt><code>after()</code></dt>
			<dd>Accepts an HTML element, jQuery object, or DOM element, or a function which returns one of those objects in its argument, and inserts that content after the statement's selected element(s).</dd>
			<dt><code>append()</code></dt>
			<dd>Accepts an HTML element, jQuery object, or DOM element, or a function which returns one of those objects in its argument, and appends that content at the end of the statement's selected element(s).</dd>
			<dt><code>appendTo()</code></dt>
			<dd>Accepts HTML content and a jQuery selector in its argument, and appends that HTML content at the end of element(s) matching the selector. If the HTML content in question is an existing element on the page, that element will be removed from its current position before being appended to each target element.</dd>
			<dt><code>attr()</code></dt>
			<dd>
				Can return or set attributes on the statement's selected element(s) depending on which arguments are used when the method is run.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>attribute</var></code>
						<dd>Required; an attribute name. When only this argument is provided, the method will return the appropriate value of only the first of the statement's selected element(s). If a value or function are provided in <em>addition</em> to this argument, this attribute's value will be set for all of the statement's selected element(s).</dd>
						<dt><code><var>value</var></code>
						<dd>Optional; an attribute value.</dd>
						<dt><code><var>function</var></code>
						<dd>Optional; a function which returns an attribute value, which may have two arguments of any name, which will be used as aliases for the index position of the current element in the set and the current attribute value, respectively.</dd>
						<dt><code>{<var>attribute</var>:<var>value</var>, <var>attribute</var>:<var>value</var>}</code>
						<dd>Optional; as an alternative to the preceding arguments, you may provide a set of attribute:value keypairs for setting the values of multiple attributes at a time. You may include as many keypairs as you wish, separated by a comma and a space.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>before()</code></dt>
			<dd>Accepts an HTML element, jQuery object, or DOM element, or a function which returns one of those objects in its argument, and inserts that content before the statement's selected element(s).</dd>
			<dt><code>clone()</code></dt>
			<dd>Accepts a boolean value in its argument, and returns copies of the statement's selected element(s); if the boolean is <code>true</code>, event handlers on those element(s) will be copied as well, otherwise event handlers are not copied.</dd>
			<dt><code>css()</code></dt>
			<dd>
				Can return or set CSS property values on the statement's selected element(s) depending on which arguments are used when the method is run.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>property</var></code>
						<dd>Required; a CSS property name. When only this argument is provided, the method will return the appropriate value of only the first of the statement's selected element(s). If a value or function are provided in <em>addition</em> to this argument, this property's value will be set for all of the statement's selected element(s). Note that CSS shorthand properties are not reliably supported, and may return different values depending on the browser.</dd>
						<dt><code><var>value</var></code>
						<dd>Optional; a CSS property value.</dd>
						<dt><code><var>function</var></code>
						<dd>Optional; a function which returns a CSS property value, which may have two arguments of any name, which will be used as aliases for the index position of the current element in the set and the current CSS property value, respectively.</dd>
						<dt><code>{<var>property</var>:<var>value</var>, <var>property</var>:<var>value</var>}</code>
						<dd>Optional; as an alternative to the preceding arguments, you may provide a set of property:value keypairs for setting the values of multiple CSS properties at a time. You may include as many keypairs as you wish, separated by a comma and a space.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>detach()</code></dt>
			<dd>Removes the statement's selected element(s), including text and child nodes, from the DOM; however, data and events associated with that element as a JavaScript object are left intact; the method returns an array containing each of the removed objects, which, if kept, allows them to be reinserted into the DOM later.</dd>
			<dt><code>empty()</code></dt>
			<dd>Removes all child nodes and content from the statement's selected element(s).</dd>
			<dt><code>hasClass()</code></dt>
			<dd>Accepts a class name in its argument, and returns <code>true</code> if any of the statement's selected element(s) have that class name defined; otherwise, returns <code>false</code>.</dd>
			<dt><code>height()</code></dt>
			<dd>Can accept either a value for height (in CSS units) or a function which returns a height value to be used in its argument. If no arguments are used, this method returns the current height value of the first of the statement's selected element(s), while if given a height value or a function to obtain one, all of the statement's selected element(s) will be set to the new height. The height-returning function may have two arguments of any name, which will be used as aliases for the index position of the current element in the set and the current height value of that element, respectively.</dd>
			<dt><code>html()</code></dt>
			<dd>Can accept either HTML content or a function which returns HTML content in its argument. If no arguments are used, this method returns the current HTML contents of the first of the statement's selected element(s), while if given HTML content or a function to obtain it, all of the statement's selected element(s) will have their current HTML content replaced by the new content. The content-returning function may have two arguments of any name, which will be used as aliases for the index position of the current element in the set and the current HTML content of that element, respectively.</dd>
			<dt><code>innerHeight()</code></dt>
			<dd>Returns the inner height (which includes padding, but not borders or margins) of the first of the statement's selected element(s) as a number representing pixels.</dd>
			<dt><code>innerWidth()</code></dt>
			<dd>Returns the inner width (which includes padding, but not borders or margins) of the first of the statement's selected element(s) as a number representing pixels.</dd>
			<dt><code>insertAfter()</code></dt>
			<dd>Accepts HTML content (must contain HTML tags, not only text) and a jQuery selector in its arguments, and inserts that content into the document after each element matching the selector. If the HTML content consisted of an existing element in the document, that element will be removed from its current position before being inserted elsewhere.</dd>
			<dt><code>insertBefore()</code></dt>
			<dd>Accepts HTML content (must contain HTML tags, not only text) and a jQuery selector in its arguments, and inserts that content into the document before each element matching the selector. If the HTML content consisted of an existing element in the document, that element will be removed from its current position before being inserted elsewhere.</dd>
			<dt><code>offset()</code></dt>
			<dd>
				Returns the offset coordinates of the first of the statement's selected element(s), as an object containing the <code>top</code> and <code>left</code> offsets as properties in numbers representing pixels, or sets the offset coordinates of all of the statement's selected element(s), depending on the arguments provided.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code>{top:<var>value</var>,left:<var>value</var>}</code></dt>
						<dd>A two-part key:value pair consisting of the new offset coordinates to be assigned.</dd>
						<dt><code><var>function</var></code></dt>
						<dd>As an alternative to providing the above argument, you may provide a function which returns an equivalent result, which may have two arguments of any name, which will be used as aliases for the index position of the current element in the set and an object containing the current offset values, respectively.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>offsetParent()</code></dt>
			<dd>Returns the first parent element of the statement's selected elements with a <code>position</code> value of <code>relative</code>, <code>absolute</code>, or <code>fixed</code>.</dd>
			<dt><code>outerHeight()</code></dt>
			<dd>Can accept a boolean value in its argument, and returns the outer height (which includes padding and border, but not margins) of the first of the statement's selected elements, as a number representing pixels; if the boolean value is <code>true</code>, the border will also be included.</dd>
			<dt><code>outerWidth()</code></dt>
			<dd>Can accept a boolean value in its argument, and returns the outer width (which includes padding and border, but not margins) of the first of the statement's selected elements, as a number representing pixels; if the boolean value is <code>true</code>, the border will also be included.</dd>
			<dt><code>position()</code></dt>
			<dd>Returns the position (relative to the most immediate parent element) of the first of the statement's selected element(s), as an object containing the <code>top</code> and <code>left</code> offsets as properties in numbers representing pixels.</dd>
			<dt><code>prepend()</code></dt>
			<dd>Accepts an HTML element, jQuery object, or DOM element, or a function which returns one of those objects in its argument, and appends that content at the beginning of the statement's selected element(s).</dd>
			<dt><code>prependTo()</code></dt>
			<dd>Accepts HTML content and a jQuery selector in its argument, and appends that HTML content at the end of element(s) matching the selector. If the HTML content in question is an existing element on the page, that element will be removed from its current position before being prepended to each target element.</dd>
			<dt><code>prop()</code></dt>
			<dd>
				Can return or set DOM or custom properties on the statement's selected element(s) depending on which arguments are used when the method is run.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>property</var></code>
						<dd>Required; a DOM or custom property name. When only this argument is provided, the method will return the appropriate value of only the first of the statement's selected element(s). If a value or function are provided in <em>addition</em> to this argument, this property's value will be set for all of the statement's selected element(s).</dd>
						<dt><code><var>value</var></code>
						<dd>Optional; a property value.</dd>
						<dt><code><var>function</var></code>
						<dd>Optional; a function which returns a property value, which may have two arguments of any name, which will be used as aliases for the index position of the current element in the set and the current property value, respectively.</dd>
						<dt><code>{<var>property</var>:<var>value</var>, <var>property</var>:<var>value</var>}</code>
						<dd>Optional; as an alternative to the preceding arguments, you may provide a set of property:value keypairs for setting the values of multiple properties at a time. You may include as many keypairs as you wish, separated by a comma and a space.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>remove()</code></dt>
			<dd>Removes the statement's selected element(s) from the document, including all text and child nodes, as well as data and events.</dd>
			<dt><code>removeAttr()</code></dt>
			<dd>Accepts an attribute name (or more than one, separated by spaces) in its argument, and removes that attribute from all of the statement's selected element(s).</dd>
			<dt><code>removeClass()</code></dt>
			<dd>Can accept a class name (or space-separated list of class names) or a function returning an equivalent value in its argument; if no argument is provided, this method will remove <em>all</em> class names from the statement's selected element(s), otherwise it will only remove the class names specified through its argument. The function may have two arguments of any name, which will be used as aliases for the index position of the current element in the set and an object containing the class names of that element, respectively.</dd>
			<dt><code>removeProp()</code></dt>
			<dd>Accepts a DOM or custom property name in its argument, and removes properties with that name from the statement's selected element(s).</dd>
			<dt><code>replaceAll()</code></dt>
			<dd>Accepts an HTML element in its argument, and replaces all of the statement's selected element(s) with that HTML element. If the HTML element in question is an existing element on the page, that element will be removed from its current position before replacing each target element.</dd>
			<dt><code>replaceWith()</code></dt>
			<dd>Accepts an HTML element and a jQuery selector in its argument, and replaces element(s) matching the selector with the new element. If the HTML element in question is an existing element on the page, that element will be removed from its current position before replacing each target element.</dd>
			<dt><code>scrollLeft()</code></dt>
			<dd>Can accept a number representing pixels relative to the left edge in its argument, and if provided with this argument, moves the horizontal scrollbar to that position for all of the statement's selected element(s) that are applicable. If not given an argument, this method returns the horizontal scrollbar position of the first of the statement's selected element(s) as a number representing pixels relative to the top edge.</dd>
			<dt><code>scrollTop()</code></dt>
			<dd>Can accept a number representing pixels relative to the top edge in its argument, and if provided with this argument, moves the vertical scrollbar to that position for all of the statement's selected element(s) that are applicable. If not given an argument, this method returns the vertical scrollbar position of the first of the statement's selected element(s) as a number representing pixels relative to the top edge.</dd>
			<dt><code>text()</code></dt>
			<dd>Can accept either text content or a function which returns text content in its argument. If no arguments are used, this method returns the current text contents of the first of the statement's selected element(s) (HTML tags will not be included), while if given text content or a function to obtain it, all of the statement's selected element(s) will have their current text and HTML content replaced by the new text content. The content-returning function may have two arguments of any name, which will be used as aliases for the index position of the current element in the set and the current text content of that element, respectively.</dd>
			<dt><code>toggleClass()</code></dt>
			<dd>
				Adds or removes class names from the statement's selected element(s), depending on whether they are currently present or not and the arguments used.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>class</var></code></dt>
						<dd>Required; a class name or space-separated string of class names. The method will toggle (add or remove) the class(es) specified.</dd>
						<dt><code><var>function</var></code></dt>
						<dd>Optional; a function which returns class name or space-separated string of class names, which may have two arguments of any name, which will be used as aliases for the index position of the current element in the set and the class names of that element, respectively.</dd>
						<dt><code><var>switch</var></code></dt>
						<dd>Optional; a boolean value. If <code>true</code>, this method will only add classes and not remove them, while if it is <code>false</code>, it will only remove classes and not add them.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>unwrap()</code></dt>
			<dd>Removes the parent elements from each of the statement's selected element(s), as well as their data and events. Note that if some of the statement's selected element(s) are parents of others, instead of being removed, each will be made into its own element.</dd>
			<dt><code>val()</code></dt>
			<dd>Can accept a value for a <code>value</code> attribute, or a function which returns such a value in its argument. If no argument is provided, this method will return the value of the <code>value</code> attribute of the first of the statement's selected element(s), while if given a new value, it will set that new value for all of the statement's selected element(s). The function may have two arguments of any name, which will be used as aliases for the index position of the current element in the set and an object containing the current offset values, respectively.</dd>
			<dt><code>width()</code></dt>
			<dd>Can accept either a value for width (in CSS units) or a function which returns a width value to be used in its argument. If no arguments are used, this method returns the current width value of the first of the statement's selected element(s), while if given a width value or a function to obtain one, all of the statement's selected element(s) will be set to the new width. The width-returning function may have two arguments of any name, which will be used as aliases for the index position of the current element in the set and the current width value of that element, respectively.</dd>
			<dt><code>wrap()</code></dt>
			<dd>Accepts an HTML element, jQuery object, or DOM element, or a function which returns one of those objects in its argument, and wraps that content around each of the statement's selected element(s). The function may have one argument of any name, which will be used as an alias for the index position of the current element in the set.</dd>
			<dt><code>wrapAll()</code></dt>
			<dd>Accepts an HTML element, jQuery object, or DOM element in its argument, and wraps that content around all of the statement's selected element(s), not individually but as a parent of every one.</dd>
			<dt><code>wrapInner()</code></dt>
			<dd>Accepts an HTML element, jQuery object, or DOM element, or a function which returns one of those objects in its argument, and wraps that content around the current content of each of the statement's selected element(s), internal to each of them. The function may have one argument of any name, which will be used as an alias for the index position of the current element in the set.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
