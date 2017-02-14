<?php
	$PAGE_NAME = 'jQuery HTML / CSS';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The jQuery library has many methods for directly manipulating the HTML on the page, as well as the CSS properties which apply to it. Except for the <code>html()</code> method, these methods all work equally well for HTML and XML documents.</p>
	</section>
	<section>
		<dl>
			<dt><code>addClass()</code></dt>
			<dd>Accepts a new class name (or multiple space-separated class names) or a function which returns new class name(s) in the same format in its argument, and appends the new class name(s) to the statement's selected element(s). The function itself can have two arguments, which will be used as variables containing the index position of the current element in the set, and the current class name(s) of the current element.</dd>
				<!--What is 'the set' in this context? And is this 'variables' thing even right?-->
			<dt><code>after()</code></dt>
			<dd>Accepts an HTML element, jQuery object, or DOM element, or a function which returns one of those objects in its argument, and inserts that content after the statement's selected element(s).</dd>
			<dt><code>append()</code></dt>
			<dd>Accepts an HTML element, jQuery object, or DOM element, or a function which returns one of those objects in its argument, and appends that content at the end of the statement's selected element(s).</dd>
			<dt><code>appendTo()</code></dt>
			<dd>Accepts HTML content and a selector in its argument, and appends that HTML content at the end of element(s) matching the selector. If the HTML content in question is an existing element on the page, that element will be removed from its current position before being appended to each target element.</dd>
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
						<dt><code><var>function</var>(<var>index</var>,<var>currentValue</var>)</code>
						<dd>Optional; a function which returns an attribute value, which may have two arguments, which will be used as variables containing the index position of the current element in the set and the current attribute value, respectively.</dd>
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
						<dt><code><var>function</var>(<var>index</var>,<var>currentValue</var>)</code>
						<dd>Optional; a function which returns a CSS property value, which may have two arguments, which will be used as variables containing the index position of the current element in the set and the current CSS property value, respectively.</dd>
						<dt><code>{<var>property</var>:<var>value</var>, <var>property</var>:<var>value</var>}</code>
						<dd>Optional; as an alternative to the preceding arguments, you may provide a set of property:value keypairs for setting the values of multiple CSS properties at a time. You may include as many keypairs as you wish, separated by a comma and a space.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>detach()</code></dt>
			<dd>Removes the statement's selected element(s), including text and child nodes, from the DOM; however, data and events are left intact, and the method returns </dd>
				<!--What are 'data and events' when associated with a removed element, and what exactly is the return value of the method, an array or something else?-->
			<dt><code>empty()</code></dt>
			<dd>Removes all child nodes and content from the statement's selected element(s).</dd>
			<dt><code>hasClass()</code></dt>
			<dd>Accepts a class name in its argument, and returns <code>true</code> if any of the statement's selected element(s) have that class name defined; otherwise, returns <code>false</code>.</dd>
			<dt><code>height()</code></dt>
			<dd></dd>
			<dt><code>html()</code></dt>
			<dd></dd>
			<dt><code>innerHeight()</code></dt>
			<dd></dd>
			<dt><code>innerWidth()</code></dt>
			<dd></dd>
			<dt><code>insertAfter()</code></dt>
			<dd></dd>
			<dt><code>insertBefore()</code></dt>
			<dd></dd>
			<dt><code>offset()</code></dt>
			<dd></dd>
			<dt><code>offsetParent()</code></dt>
			<dd></dd>
			<dt><code>outerHeight()</code></dt>
			<dd></dd>
			<dt><code>outerWidth()</code></dt>
			<dd></dd>
			<dt><code>position()</code></dt>
			<dd></dd>
			<dt><code>prepend()</code></dt>
			<dd></dd>
			<dt><code>prependTo()</code></dt>
			<dd></dd>
			<dt><code>prop()</code></dt>
			<dd></dd>
			<dt><code>remove()</code></dt>
			<dd></dd>
			<dt><code>removeAttr()</code></dt>
			<dd></dd>
			<dt><code>removeClass()</code></dt>
			<dd></dd>
			<dt><code>removeProp()</code></dt>
			<dd></dd>
			<dt><code>replaceAll()</code></dt>
			<dd></dd>
			<dt><code>replaceWith()</code></dt>
			<dd></dd>
			<dt><code>scrollLeft()</code></dt>
			<dd></dd>
			<dt><code>scrollTop()</code></dt>
			<dd></dd>
			<dt><code>text()</code></dt>
			<dd></dd>
			<dt><code>toggleClass()</code></dt>
			<dd></dd>
			<dt><code>unwrap()</code></dt>
			<dd></dd>
			<dt><code>val()</code></dt>
			<dd></dd>
			<dt><code>width()</code></dt>
			<dd></dd>
			<dt><code>wrap()</code></dt>
			<dd></dd>
			<dt><code>wrapAll()</code></dt>
			<dd></dd>
			<dt><code>wrapInner()</code></dt>
			<dd></dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
