<?php
	$PAGE_NAME = 'Array';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Arrays are a type of object used to store multiple values in one variable. However, like variables themselves, arrays can contain things more complex than just numeric or string data, including other kinds of object or even other arrays! Entries within arrays, no matter their type, are accessible at <code><var>arrayName</var>[<var>indexNumber</var>]</code>. Like much of Javascript, arrays are zero-indexed.</p>
	</section>
	<section>
		<h4>Array Type Properties:</h4>
		<dl>
			<dt><code>constructor</code></dt>
			<dd>This property stores the code that created the array's prototype. Unless this array, somewhere up its heredity, was created by the <code>new</code> operator, this will return <code>function Array() { [native code] }</code>, reflecting a core part of Javascript's engine.</dd>
			<dt><code>length</code></dt>
			<dd>This property stores the length of the array, or how many entries it has. It can be altered directly as well - giving it a lower value than the number it currently has will truncate those entries, but giving it a higher value will result in the new entries being <code>undefined</code>.</dd>
			<dt><code>prototype</code></dt>
			<dd>A unique way to add new properties or methods to an object, this is not a standard property, but borrows syntax from them. It can be used to add properties to objects produced by "factories" (functions designed to create new objects with certain specifications); as an example, <code><var>factoryname</var>.prototype.<var>propertyname</var> = <var>propertyvalue</var></code> will append both the new property and its value to every new object produced by <code><var>factoryname</var></code>.</dd>
		</dl>
	</section>
	<section>
		<h4>Array Type Methods:</h4>
		<dl>
			<dt><code>concat()</code></dt>
			<dd>Accepts two or more arrays in its argument, and returns a copy of these arrays joined together. The first array will retain its current indexing, while subsequent arrays will be appended to the first, in order.</dd>
			<dt><code>copyWithin()</code></dt>
			<dd>Accepts 2-3 numbers in its argument, representing a target index, a source index, and, if provided, an ending point for the source indices. Changes the array so that all entries within the bounds of the source indices are copied to the target index, overwriting a number of entries equal to the number of copied values, and returns the new state of the array.</dd>
			<dt><code>every()</code></dt>
			<dd>Accepts a conditional check in its argument, and returns <code>true</code> if every element in the array returns <code>true</code> to the condition(s), otherwise, it returns <code>false</code>.</dd>
			<dt><code>fill()</code></dt>
			<dd>Accepts 1 value and 1-2 numbers in its argument, representing a desired new value, a beginning index, and, if provided, an ending index. Changes the array so that every entry within the specified bounds (or the entire array, if no indices are specified) is overwritten with the specified value, and returns the new state of the array.</dd>
			<dt><code>filter()</code></dt>
			<dd>Accepts a conditional check in its argument, and returns a copy of the array containing only the entries that returned <code>true</code> to that conditional check.</dd>
			<dt><code>find()</code></dt>
			<dd>Accepts a conditional check in its argument, and returns the value of the first element in the array that returns <code>true</code>.</dd>
			<dt><code>findIndex()</code></dt>
			<dd>Accepts a conditional check in its argument, and returns the index of the first element in the array that returns <code>true</code>.</dd>
			<dt><code>forEach()</code></dt>
			<dd>Accepts a required function in its argument, which will be run once for each element in the array, and optionally, a value that function should use for <code>this</code>. The function may have up to three arguments of any name, which will be used as aliases for: the value of the current element, the array index of the current element, and the array the current element belongs to, respectively.</dd>
			<dt><code>indexOf()</code></dt>
			<dd>Accepts a search value in its argument, and returns the index number of the first element with that value. If it cannot find any matches, it returns <code>-1</code>.</dd>
			<dt><code>isArray()</code></dt>
			<dd>Accepts a string in its argument, and returns <code>true</code> if the string matches the name of a defined array. Otherwise, returns <code>false</code>.</dd>
			<dt><code>join()</code></dt>
			<dd>Returns a string containing the values of every element within the array, separated by commas.</dd>
			<dt><code>lastIndexOf()</code></dt>
			<dd>Accepts a search value in its argument, and returns the index number of the last element with that value. If it cannot find any matches, it returns <code>-1</code>.</dd>
			<dt><code>map()</code></dt>
			<dd>Accepts a function in its argument, and returns a copy of the array with that function having been run upon each entry in the array. The function being run automatically has the following arguments passed to it: the value of the element it's currently running on, the index value of the current element, and the array object the current element belongs to.</dd>
			<dt><code>pop()</code></dt>
			<dd>Removes the last element from the array, and returns that element's value.</dd>
			<dt><code>push()</code></dt>
			<dd>Accepts any amount of new values in its argument, and adds new entries to the end of the array with those values.</dd>
			<dt><code>reduce()</code></dt>
			<dd>Accepts a required function in its argument, to be run once for each element in the array going from beginning to end, and optionally, an initial value. The function may have up to four arguments of any name, which will be used as aliases for: the initial value (or the most recently returned value of the function, if no initial value was set), the value of the current element, the array index of the current element, and the array the current element belongs to, respectively. The array will be reduced to a single entry, which will have the final returned value of the specified function as its value, and the method will return the new state of the array.</dd>
			<dt><code>reduceRight()</code></dt>
			<dd>Accepts a required function in its argument, to be run once for each element in the array going from end to beginning, and optionally, an initial value. The function may have up to four arguments of any name, which will be used as aliases for: the initial value (or the most recently returned value of the function, if no initial value was set), the value of the current element, the array index of the current element, and the array the current element belongs to, respectively. The array will be reduced to a single entry, which will have the final returned value of the specified function as its value, and the method will return the new state of the array.</dd>
			<dt><code>reverse()</code></dt>
			<dd>Reverses the order of every element in the array, so that they are now ordered last to first.</dd>
			<dt><code>shift()</code></dt>
			<dd>Removes the first element from the array, and returns that element's value.</dd>
			<dt><code>slice()</code></dt>
			<dd>Accepts 1-2 index values in its argument, beginning and end. If not provided, the end value will be the length of the array. Returns a copy of the array containing only the elements within the bounds of those index values.</dd>
			<dt><code>some()</code></dt>
			<dd>Accepts a conditional check in its argument, and returns <code>true</code> if any element in the array returns <code>true</code> to the condition(s), otherwise, it returns <code>false</code>.</dd>
			<dt><code>sort()</code></dt>
			<dd>Accepts an optional function in its argument, that must in turn have two arguments of any name, which will be used as aliases for the two items <code>Array.sort</code>is comparing, and in typical use also returns the value of <code><var>itemOne</var> - <var>itemTwo</var></code> or <code><var>itemTwo</var> - <var>itemOne</var></code>. This method will then sort the array's elements by comparison return values from lowest to highest. If not provided, it will treat all elements' values as strings and sort them alphabetically, which can lead to undesirable results in the case of numeric data.</dd>
			<dt><code>splice()</code></dt>
			<dd>Accepts a starting index value, number of items following that index value which will be removed, and any amount of new values. The new values will be added to the array as new elements at the index position specified, and the specified number of items starting with that index will be deleted; that value can be <code>0</code>, in which case no items will be deleted.</dd>
			<dt><code>toString()</code></dt>
			<dd>Returns a string containing the values of each element in the array, separated by commas.</dd>
			<dt><code>unshift()</code></dt>
			<dd>Accepts any amount of new values in its argument, and adds new entries to the beginning of the array with those values.</dd>
			<dt><code>valueOf()</code></dt>
			<dd>Returns the primitive value of the array. This results in the values of each element in the array, separated by commas.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
