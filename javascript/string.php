<?php
	$PAGE_NAME = 'String';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>A String object in Javascript is any data consisting of a series of characters enclosed by "double" or 'single' quotes. All properly stored string variables have the properties listed on this page, and can be controlled using these methods.</p>
	</section>
	<section>
		<h4>String Properties:</h4>
		<dl>
			<dt><code>constructor</code></dt>
			<dd>This property stores the code that created the string's prototype. Unless this string, somewhere up its heredity, was created by the <code>new</code> operator, this will return <code>function String() { [native code] }</code>, reflecting a core part of Javascript's engine.</dd>
			<dt><code>length</code></dt>
			<dd>This property stores the current length of the string, or the count of its characters (zero-indexed).</dd>
			<dt><code>prototype</code></dt>
			<dd>A unique way to add new properties or methods to an object, this is not a standard property, but borrows syntax from them. It can be used to add properties to objects produced by "factories" (functions designed to create new objects with certain specifications); as an example, <code><var>factoryname</var>.prototype.<var>propertyname</var> = <var>propertyvalue</var></code> will append both the new property and its value to every new object produced by <code><var>factoryname</var></code>.</dd>
		</dl>
	</section>
	<section>
		<h4>String Methods:</h4>
		<dl>
			<dt><code>charAt()</code></dt>
			<dd>Accepts an index (position within <code>length</code>) as its argument, and returns the character at that index.</dd>
			<dt><code>charCodeAt()</code></dt>
			<dd>As <code>charAt</code>, except it returns the Unicode value of the character, instead of the character itself.</dd>
			<dt><code>concat()</code></dt>
			<dd>Accepts any number of strings in its argument, and returns a string consisting of all of the specified strings joined together.</dd>
			<dt><code>endsWith()</code></dt>
			<dd>Accepts a string or specific characters as its argument, and returns <code>true</code> if the string ends with its argument, or <code>false</code> if it does not.</dd>
			<dt><code>fromCharCode()</code></dt>
			<dd>Accepts a Unicode value as its argument, and returns the character associated with that value.</dd>
			<dt><code>includes()</code></dt>
			<dd>Accepts a string or specific characters as its argument, and returns <code>true</code> if the string contains its argument, or <code>false</code> if it does not.</dd>
			<dt><code>indexOf()</code></dt>
			<dd>As <code>includes</code>, except instead of returning <code>true</code> if the string contains its argument, it instead returns the index of the <em>first</em> occurrence of its argument it finds. If its argument is not present in the string, it instead returns <code>-1</code>.</dd>
			<dt><code>lastIndexOf()</code></dt>
			<dd>As <code>indexOf</code>, except instead of returning the index of the first occurrence, it instead returns the last occurrence.</dd>
			<dt><code>localeCompare()</code></dt>
			<dd>Accepts a string value as its argument, and queries whether the targeted string or the argument come first in alphabetical order according to the browser locale. Returns <code>-1</code> if the targeted string is first, <code>0</code> if they are equal, and <code>1</code> if the argument is first.</dd>
			<dt><code>match()</code></dt>
			<dd>Accepts a regular expression as its argument, and searches the string using that regular expression, returning each match it finds.</dd>
			<dt><code>repeat()</code></dt>
			<dd>Accepts a numeric value as its argument, and returns a string consisting of that many repetitions of the targeted string.</dd>
			<dt><code>replace()</code></dt>
			<dd>Accepts a regular expression and a string value or two string values as its arguments, searching the targeted string using the first argument, and returning a copy of that string where each match is replaced with the second argmuent.</dd>
			<dt><code>search()</code></dt>
			<dd>As <code>indexOf</code>, except using a regular expression as its argument.</dd>
			<dt><code>slice()</code></dt>
			<dd>Accepts any number of indexes in its argument, and returns a copy of the string with those indexes removed.</dd>
			<dt><code>split()</code></dt>
			<dd>Accepts a string or empty string as its argument, returning a copy of the string as an array containing the string's text in values separated at each point the argument's string occurs. If an empty string is used, each character will be its own value in the array.</dd>
			<dt><code>startsWith()</code></dt>
			<dd>Accepts a string or specific characters as its argument, and returns <code>true</code> if the targeted string begins with its argument, and <code>false</code> if it does not.</dd>
			<dt><code>substr()</code></dt>
			<dd>Accepts an index and (optionally) a numeric value as its arguments, and returns a copy of the string with indexes before the first argument removed. The length of the returned string may not exceed the second number, if one is specified.</dd>
			<dt><code>substring()</code></dt>
			<dd>Accepts two indexes in its argument, and returns a copy of the string containing only the characters between those two indexes (and including them).</dd>
			<dt><code>toLocaleLowerCase()</code></dt>
			<dd>Returns a copy of the string with all its characters converted to lowercase in a way that takes the browser's locale into account.</dd>
			<dt><code>toLocaleUpperCase()</code></dt>
			<dd>As <code>toLocaleLowerCase</code>, except characters are converted to uppercase instead of lowercase.</dd>
			<dt><code>toLowerCase()</code></dt>
			<dd>As <code>toLocaleLowerCase</code>, except it disregards the browser's locale, which can result in undesirable behavior with specific languages.</dd>
			<dt><code>toString()</code></dt>
			<dd>Returns the target in the form of a string.</dd>
			<dt><code>toUpperCase()</code></dt>
			<dd>As <code>toLocaleUpperCase</code>, except it disregards the browser's locale, which can result in undesirable behavior with specific languages.</dd>
			<dt><code>trim()</code></dt>
			<dd>Returns a copy of the string with any whitespace (spaces and tabs) removed from the beginning and end.</dd>
			<dt><code>valueOf()</code></dt>
			<dd>Returns the primitive value of the string; due to strings being relatively simple objects, this simply returns its value.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
