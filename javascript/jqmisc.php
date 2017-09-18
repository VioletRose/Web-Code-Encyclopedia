<?php
	$PAGE_NAME = 'jQuery Misc';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>A catch-all for methods which are otherwise hard to categorize, the miscellaneous methods here are nevertheless useful in specialized situations.</p>
	</section>
	<section>
		<h4>jQuery Object Misc Methods</h4>
		<dl>
			<dt><code>$.noConflict()</code></dt>
			<dd>Can accept a boolean value in its argument, and releases jQuery's use of <code>$</code> as a variable name. If the boolean value is <code>true</code>, <em>every</em> variable used by jQuery is released, while if it is <code>false</code> or not provided, it will only affect <code>$</code>. Note that this method's return value is the object being unbound from <code>$</code>, so another variable can be set to take its place.</dd>
			<dt><code>$.param()</code></dt>
			<dd>Accepts an array or object in its argument, and can accept a boolean value; this method returns a serialized form of an object or array, i.e. a string containing all of its entries or properties separated by <code>&amp;</code> symbols. If provided with a <code>true</code> value as its second argument, it will use the older style of serialization, where objects within objects would not be fully serialized. This method can be useful for passing object or array values into a URL.</dd>
		</dl>
	</section>
	<section>
		<h4>Element jQuery Misc Methods:</h4>
		<dl>
			<dt><code>data()</code></dt>
			<dd>Can accept up to three arguments, the name of data attached to an element or element(s), a value for that data, or an object containing the same two things as a key-value pair. If not provided with any arguments, this method returns all data stored on the first of the statement's selected elements as an object. If provided with a data name, it returns the data attached to the first of the statement's selected element(s) under that name. And if provided with both a name and a value, it sets the specified data under that name to all of the statement's selected element(s).</dd>
			<dt><code>each()</code></dt>
			<dd>Accepts a function in its argument, and runs that function one time per element in the statement's current selection; note that if that function is made to <code>return false</code>, the loop will end early. The function may have two arguments, which will be used as variable names containing the current index position within the selection, and the element the function is currently acting upon.</dd>
			<dt><code>get()</code></dt>
			<dd>Accepts an index number in its argument, and returns the element at that index within the statement's selected element(s), making it the new selection.</dd>
			<dt><code>index()</code></dt>
			<dd>Accept a specific element or a selector in its argument, and returns the index number of either the first element matching the selector, or the specified element, relative to the first element in the statement's selected element(s). If the specified element is not part of the current selection, the method will return <code>-1</code>.</dd>
			<dt><code>removeData()</code></dt>
			<dd>Can accepts the name of data attached to an element or element(s) in its argument. If not provided with any arguments, this method will remove all data previously set with the <code>data()</code> method from all of the statement's selected element(s), while if provided the name of the data, it will only remove that specific data.</dd>
			<dt><code>toArray()</code></dt>
			<dd>Returns the statement's selected element(s) as an array with each element as an entry.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
