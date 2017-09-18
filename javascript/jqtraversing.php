<?php
	$PAGE_NAME = 'jQuery Traversing';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Traversing is the name given to the jQuery methods specifically designed for changing and manipulating the current selection, allowing on the fly retargeting of a statement without needing to begin a new statement with a fully different selector. This is useful for efficiency, as while calling the jQuery library only uses minimal resources, even that can add up if too heavily overused.</p>
	</section>
	<section>
		<h4>jQuery Element Traversing Methods:</h4>
		<dl>
			<dt><code>add()</code></dt>
			<dd>Accepts a selector, jQuery object, HTML element(s), or an HTML snippet (a line of HTML code not currently present in the document) in its argument, and adds that to the statement's current selection. Can also accept a second argument, an element on the page which functions as context and starts the selector's search from that point in the document.</dd>
			<dt><code>addBack()</code></dt>
			<dd>Can accept a selector in its argument, and adds the previous set of elements selected before the most recent change of selection back into the selection; if a selector is provided, those previous elements will be filtered to only those matching it.</dd>
			<dt><code>children()</code></dt>
			<dd>Can accept a selector in its argument, and returns all direct children of the statement's selected element(s), making them the new selection; if a selector is provided, those child elements will be filtered to only those matching it.</dd>
			<dt><code>closest()</code></dt>
			<dd>Can accept a selector and a context element in its argument, and returns the most recent ancestor of the statement's selected element(s), making them the new selection; if a selector is provided, the ancestor element(s) will be filtered to only those matching it, and if a context element is provided, its search is restricted to within that element.</dd>
			<dt><code>contents()</code></dt>
			<dd>Returns all direct children of the statement's selected element(s), including text and comment nodes, making them the new selection.</dd>
			<dt><code>each()</code></dt>
			<dd>Accepts a function in its argument, and runs that function one time per element in the statement's current selection; note that if that function is made to <code>return false</code>, the loop will end early. The function may have two arguments of any name, which will be used as aliases for the current index position within the selection, and the element the function is currently acting upon.</dd>
			<dt><code>end()</code></dt>
			<dd>Sets the current state of the statement's selected element(s) back one step, before the most recent change in the selection.</dd>
			<dt><code>eq()</code></dt>
			<dd>Accepts an index number in its argument, and returns the element at that index number within the statement's selected element(s), making it the new selection. A negative number may be used, in which case the index is counted backwards from the end instead of forwards from the beginning.</dd>
			<dt><code>filter()</code></dt>
			<dd>Can accept a selector, jQuery object, or specific element(s), as well as a function in its argument. Filters the statement's selected element(s) down to the first argument, and if provided with a function, runs that function once for each element selected, only keeping that element in the selection if the function returns <code>true</code>. The function may have one argument of any name, which will be used as an alias for the current index position within the selection.</dd>
			<dt><code>find()</code></dt>
			<dd>Accepts a selector, jQuery object, or specific element(s) in its argument, and returns descendent elements of the statement's selected element(s) which match the given criteria, making them the new selection.</dd>
			<dt><code>first()</code></dt>
			<dd>Returns the first element within the statement's selected element(s), making it the new selection.</dd>
			<dt><code>has()</code></dt>
			<dd>Accepts a selector or specific element(s) in its argument, and returns all of the statement's selected element(s) which have a matching element inside of them, making the containing element(s) the new selection.</dd>
			<dt><code>is()</code></dt>
			<dd>Accepts a selector, jQuery object, or specific element(s) in its argument, but can accept a function instead; returns <code>true</code> if any of the selected element(s) match the first argument, and <code>false</code> if none do. If provided a function instead, the function will be run once for each element in the selection, and may have two arguments of any name, which will be used as aliases for the current index position within the selection, and the element the function is currently acting upon. If the function returns <code>true</code> at any point, the method returns <code>true</code>, otherwise, it returns <code>false</code>.</dd>
			<dt><code>last()</code></dt>
			<dd>Returns the last element within the statement's selected element(s), making it the new selection.</dd>
			<dt><code>map()</code></dt>
			<dd>Accepts a function in its argument, and runs that function once for each of the statement's selected element(s). When this process has completed, the method returns an array containing the return values from each time the function completed. The function may have two arguments of any name, which will be used as aliases for the current index position within the selection, and the element the function is currently acting upon.</dd>
			<dt><code>next()</code></dt>
			<dd>Can accept a selector in its argument, and returns the next sibling element(s) of the statement's selected element(s); if a selector is provided, the sibling element(s) will be filtered to only those matching it.</dd>
			<dt><code>nextAll()</code></dt>
			<dd>Can accept a selector in its argument, and returns all of the next sibling elements of the statement's selected element(s); if a selector is provided, the sibling element(s) will be filtered to only those matching it.</dd>
			<dt><code>nextUntil()</code></dt>
			<dd>Can accept a selector, jQuery object, or specific element(s) in its argument, and if no arguments are provided, returns all of the next sibling elements of the statement's selected element(s); if the first argument is provided, the search for next siblings will stop at the first match for it in the DOM tree, and if the second argument is provided, the sibling element(s) will be filtered to only those matching it.</dd>
			<dt><code>not()</code></dt>
			<dd>Can accept a selector, jQuery object, or specific element(s) as well as a function in its argument, and filters the statement's selected element(s) to remove those not matching the first argument; if a function is provided, it will be run once for each element in the selection, and may have one argument of any name, which will be used as an alias for the current index position within the selection.</dd>
			<dt><code>offsetParent()</code></dt>
			<dd>Returns the first parent element of the statement's selected element(s) which has a CSS <code>position</code> value of <code>relative</code>, <code>absolute</code>, or <code>fixed</code>.</dd>
			<dt><code>parent()</code></dt>
			<dd>Can accept a selector in its argument, and returns the direct parent element(s) of the statement's selected element(s); if a selector is provided, the parent elmeent(s) will be filtered to only those matching it.</dd>
			<dt><code>parents()</code></dt>
			<dd>Can accept a selector in its argument, and returns all parent element(s) of the statement's selected element(s); if a selector is provided, the parent element(s) will be filtered to only those matching it.</dd>
			<dt><code>parentsUntil()</code></dt>
			<dd>Can accept a selector, jQuery object, or specific element(s) in its argument, and if no arguments are provided, returns all parent elements of the statement's selected element(s); if the first argument is provided, the search for parents will stop at the first match for it in the DOM tree, and if the second argument is provided, the parent element(s) will be filtered to only those matching it.</dd>
			<dt><code>prev()</code></dt>
			<dd>Can accept a selector in its argument, and returns the previous sibling element(s) of the statement's selected element(s); if a selector is provided, the sibling element(s) will be filtered to only those matching it.</dd>
			<dt><code>prevAll()</code></dt>
			<dd>Can accept a selector in its argument, and returns all of the previous sibling elements of the statement's selected element(s); if a selector is provided, the sibling element(s) will be filtered to only those matching it.</dd>
			<dt><code>prevUntil()</code></dt>
			<dd>Can accept a selector, jQuery object, or specific element(s) in its argument, and if no arguments are provided, returns all of the previous sibling elements of the statement's selected element(s); if the first argument is provided, the search for previous siblings will stop at the first match for it in the DOM tree, and if the second argument is provided, the sibling element(s) will be filtered to only those matching it.</dd>
			<dt><code>siblings()</code></dt>
			<dd>Can accept a selector in its argument, and returns all sibling elements of the statement's selected element(s) in both directions; if a selector is provided, the sibling element(s) will be filtered to only those matching it.</dd>
			<dt><code>slice()</code></dt>
			<dd>Accepts a starting index number, and can also accept a stopping index number in its argument; adjusts the statement's selected element(s) to only include those from the index number provided onward, up to the stopping point number if one was provided.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
