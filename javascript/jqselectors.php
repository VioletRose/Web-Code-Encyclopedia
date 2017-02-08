<?php
	$PAGE_NAME = 'jQuery Selectors';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The jQuery library has its own range of selectors, which allow easy selection and filtering of DOM objects in a manner similar to CSS. All jQuery-specific selectors are formatted as strings and passed to the jQuery function as arguments; <code>$('<var>selector</var>')</code> and <code>jQuery("<var>selector</var>")</code> are both valid. Note that while calling the jQuery function is relatively trivial in terms of resources, it's still best from a performance perspective to filter existing selections if your next target was going to be a subset of what you already had selected.</p>
	</section>
	<section>
		<h4>Basic Selectors:</h4>
		<dl>
			<dt><code>*</code></dt>
			<dd>&#10551; All elements in the document.</dd>
			<dt><code>#<var>id</var></code></dt>
			<dd>&#10551; The element with this id.</dd>
			<dt><code>.<var>class</var></code></dt>
			<dd>&#10551; All elements with this class; multiple classes may be specified with a single comma between them.</dd>
			<dt><code><var>element</var></code></dt>
			<dd>&#10551; All elements of this tag name; multiple tag names may be specified with a single comma between them.</dd>
		</dl>
	</section>
	<section>
		<h4>Iteration Selectors:</h4>
		<dl>
			<dt><code><var>selector</var>:first</code></dt>
			<dd>&#10551; The first match for this selector in the document.</dd>
			<dt><code><var>selector</var>:last</code></dt>
			<dd>&#10551; The last match for this selector in the document.</dd>
			<dt><code><var>selector</var>:even</code></dt>
			<dd>&#10551; Every even element in the list of matches for this selector.</dd>
			<dt><code><var>selector</var>:odd</code></dt>
			<dd>&#10551; Every odd element in the list of matches for this selector.</dd>
			<dt><code><var>selector</var>:first-child</code></dt>
			<dd>&#10551; Every match for this selector that is also the first child of its parent.</dd>
			<dt><code><var>selector</var>:first-of-type</code></dt>
			<dd>&#10551; Every match for this selector that is also the first matching child of its parent.</dd>
			<dt><code><var>selector</var>:last-child</code></dt>
			<dd>&#10551; Every match for this selector that is also the last child of its parent.</dd>
			<dt><code><var>selector</var>:last-of-type</code></dt>
			<dd>&#10551; Every match for this selector that is also the last matching child of its parent.</dd>
			<dt><code><var>selector</var>:nth-child(<var>n</var>)</code></dt>
			<dd>&#10551; Every match for this selector that is also the <var>n</var>th child of its parent.</dd>
			<dt><code><var>selector</var>:nth-last-child(<var>n</var>)</code></dt>
			<dd>&#10551; Every match for this selector that is also the <var>n</var>th child of its parent, counted in reverse.</dd>
			<dt><code><var>selector</var>:nth-of-type(<var>n</var>)</code></dt>
			<dd>&#10551; Every match for this selector that is also the <var>n</var>th matching child of its parent.</dd>
			<dt><code><var>selector</var>:nth-last-of-type(<var>n</var>)</code></dt>
			<dd>&#10551; Every match for this selector that is also the <var>n</var>th matching child of its parent, counted in reverse.</dd>
			<dt><code><var>selector</var>:only-child</code></dt>
			<dd>&#10551; Every match for this selector that is also the only child of its parent.</dd>
			<dt><code><var>selector</var>:only-of-type</code></dt>
			<dd>&#10551; Every match for this selector that is also the only matching child of its parent.</dd>
		</dl>
	</section>
	<section>
		<h4>Relationship Selectors:</h4>
		<dl>
			<dt><code><var>selector</var> > <var>selector</var></code></dt>
			<dd>&#10551; Every match for the first selector that is also a direct child of a match for the second selector.</dd>
			<dt><code><var>selector</var> <var>selector</var></code></dt>
			<dd>&#10551; Every match for the second selector that is descended from a match for the first selector.</dd>
			<dt><code><var>selector</var> + <var>selector</var></code></dt>
			<dd>&#10551; Every match for the second selector that is next to a match for the first selector.</dd>
			<dt><code><var>selector</var> ~ <var>selector</var></code></dt>
			<dd>&#10551; Every match for the second selector that is also a sibling of a match for the first selector.</dd>
			<dt><code><var>selector</var>:has(<var>selector</var>)</code></dt>
			<dd>&#10551; All matches for the first selector which also contain a match for the second selector.</dd>
		</dl>
	</section>
	<section>
		<h4>Index Selectors</h4>
		<dl>
			<dt><code><var>selector</var>:eq(<var>index</var>)</code></dt>
			<dd>&#10551; The match at that index number in the list of matches for this selector.</dd>
			<dt><code><var>selector</var>:gt(<var>index</var>)</code></dt>
			<dd>&#10551; Matches at index numbers higher than this in the list of matches for this selector.</dd>
			<dt><code><var>selector</var>:lt(<var>index</var>)</code></dt>
			<dd>&#10551; Matches at index numbers lower than this in the list of matches for this selector.</dd>
		</dl>
	</section>
	<section>
		<h4>Miscellaneous Selectors</h4>
		<dl>
			<dt><code><var>selector</var>:not(<var>selector</var>)</code></dt>
			<dd>&#10551; Matches for the first selector that do not match the second selector.</dd>
			<dt><code>:header</code></dt>
			<dd>&#10551; All header elements, i.e. <code>&lt;h1&gt;</code>, <code>&lt;h2&gt;</code>, <code>&lt;h3&gt;</code>, <code>&lt;h4&gt;</code>, <code>&lt;h5&gt;</code>, and <code>&lt;h6&gt;</code>.</dd>
			<dt><code>:animated</code></dt>
			<dd>&#10551; All elements currently animated via the CSS <code>animation</code> property.</dd>
			<dt><code>:focus</code></dt>
			<dd>&#10551; The element which currently has focus.</dd>
			<dt><code>:contains('<var>string</var>'</code></dt>
			<dd>&#10551; All elements containing this string as text.</dd>
			<dt><code>:empty</code></dt>
			<dd>&#10551; All elements containing no text.</dd>
			<dt><code>:parent</code></dt>
			<dd>&#10551; All elements which have at least one child element.</dd>
			<dt><code><var>selector</var>:hidden</code></dt>
			<dd>&#10551; All matches for this selector that are hidden via the <code>display</code> CSS property, <code>&lt;input&gt;</code> elements with a <code>type="hidden"</code> attribute, width and height being set to 0, or a parent element hidden in one of these ways.</dd>
			<dt><code><var>selector</var>:visible</code></dt>
			<dd>&#10551; All matches for this selector that are visible, i.e. not hidden through any of the above methods.</dd>
			<dt><code>:root</code></dt>
			<dd>&#10551; The document's root element. Under most circumstances, this will always be the <code>&lt;html&gt;</code> element.</dd>
		</dl>
	</section>
	<section>
		<h4>Attribute Selectors</h4>
		<dl>
			<dt><code>[<var>attribute</var>]</code></dt>
			<dd>&#10551; All elements with this attribute defined.</dd>
			<dt><code>[<var>attribute</var>='<var>value</var>']</code></dt>
			<dd>&#10551; All elements with this attribute defined as this value.</dd>
			<dt><code>[<var>attribute</var>!='<var>value</var>']</code></dt>
			<dd>&#10551; All elements with this attribute <em>not</em> defined as this value.</dd>
			<dt><code>[<var>attribute</var>$='<var>value</var>']</code></dt>
			<dd>&#10551; All elements with this attribute defined as a value ending with this string.</dd>
			<dt><code>[<var>attribute</var>|='<var>value</var>']</code></dt>
			<dd>&#10551; All elements with this attribute defined as either this value or a value starting with this string followed by a hyphen.</dd>
			<dt><code>[<var>attribute</var>^='<var>value</var>']</code></dt>
			<dd>&#10551; All elements with this attribute defined as a value starting with this string.</dd>
			<dt><code>[<var>attribute</var>~='<var>value</var>']</code></dt>
			<dd>&#10551; All elements with this attribute defined as a value containing this specific string.</dd>
			<dt><code>[<var>attribute</var>]*='<var>value</var>'</code></dt>
			<dd>&#10551; All elements with this attribute defined as a value containing this substring in <em>any</em> form; if this sequence of characters is present in the attribute's value it will be a match, whether or not they are separated by spaces or even other characters.</dd>
		</dl>
	</section>
	<section>
		<h4>Form Selectors</h4>
		<dl>
			<dt><code>:input</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements.</dd>
			<dt><code>:text</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements with <code>type="text"</code> defined.</dd>
			<dt><code>:password</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements with <code>type="password"</code> defined.</dd>
			<dt><code>:radio</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements with <code>type="radio"</code> defined.</dd>
			<dt><code>:checkbox</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements with <code>type="checkbox"</code> defined.</dd>
			<dt><code>:submit</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements with <code>type="submit"</code> defined.</dd>
			<dt><code>:reset</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements with <code>type="reset"</code> defined.</dd>
			<dt><code>:button</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements with <code>type="button"</code> defined.</dd>
			<dt><code>:image</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements with <code>type="image"</code> defined.</dd>
			<dt><code>:file</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements with <code>type="file"</code> defined.</dd>
			<dt><code>:enabled</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements which do not have the <code>disabled</code> attribute..</dd>
			<dt><code>:disabled</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements which have the <code>disabled</code> attribute.</dd>
			<dt><code>:selected</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements which have the <code>selected</code> attribute.</dd>
			<dt><code>:checked</code></dt>
			<dd>&#10551; All <code>&lt;input&gt;</code> elements with their <code>type</code> attribute defined as <code>checkbox</code> or <code>radio</code> and which are also checked.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
