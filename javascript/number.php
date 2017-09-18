<?php
	$PAGE_NAME = 'Number';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>A number in Javascript is either a floating-point number (a form of number used in computing, which is prone to small inaccuracies in extreme cases), or, more rarely, an integer, which is completely accurate and highly efficient but has size limitations and cannot have a decimal place. All properly stored number variables have the properties listed on this page, and can be controlled using these methods.</p>
	</section>
	<section>
		<h4>Number Object Properties:</h4>
		<dl>
			<dt><code>constructor</code></dt>
			<dd>This property stores the code that created the number's prototype. Unless this number, somewhere up its heredity, was created by the <code>new</code> operator, this will return <code>function Number() { [native code] }</code>, reflecting a core part of Javascript's engine.</dd>
			<dt><code>MAX_VALUE</code></dt>
			<dd>Stores the largest possible floating point number in Javascript, which is <code>1.7976931348623157e+308</code>. This and other values like it are generally useful for checks and comparisons.</dd>
			<dt><code>MIN_VALUE</code></dt>
			<dd>Stores the smallest possible floating point number in Javascript, which is <code>5e-324</code>.</dd>
			<dt><code>NEGATIVE_INFINITY</code></dt>
			<dd>Stores a value representing negative infinity.</dd>
			<dt><code>NaN</code></dt>
			<dd>Stores a value representing NaN, or Not a Number - an invalid number. Impossible mathematical operations and treating non-numeric data as numbers both tend to result in NaN.</dd>
			<dt><code>POSITIVE_INFINITY</code></dt>
			<dd>Stores a value representing positive, or normal infinity.</dd>
			<dt><code>prototype</code></dt>
			<dd>A unique way to add new properties or methods to an object, this is not a standard property, but borrows syntax from them. It can be used to add properties to objects produced by "factories" (functions designed to create new objects with certain specifications); as an example, <code><var>factoryname</var>.prototype.<var>propertyname</var> = <var>propertyvalue</var></code> will append both the new property and its value to every new object produced by <code><var>factoryname</var></code>.</dd>
		</dl>
	</section>
	<section>
		<h4>Number Type Methods:</h4>
		<dl>
			<dt><code>isFinite()</code></dt>
			<dd>Returns <code>true</code> if the number is a valid, finite number, otherwise, returns <code>false</code>.</dd>
			<dt><code>isInteger()</code></dt>
			<dd>Returns <code>true</code> if the number is stored as an integer, otherwise, returns <code>false</code>.</dd>
			<dt><code>isNaN()</code></dt>
			<dd>Returns <code>true</code> if the number is NaN, otherwise, returns <code>false</code>.</dd>
			<dt><code>isSafeInteger()</code></dt>
			<dd>Returns <code>true<code> if the number is an integer with values between −2<sup>53</sup> and 2<sup>53</sup>, otherwise, returns <code>false</code>.</dd>
			<dt><code>toExponential()</code></dt>
			<dd>May accept an integer between 0 and 20 in its argument, representing how many digits after the decimal point the notation covers. Returns a string representing the number in exponential notation.</dd>
			<dt><code>toFixed()</code></dt>
			<dd>May accept a number in its argument, and returns a string representing the number rounded to a number of decimal places specified in the argument, defaulting to <code>0</code> if no argument is used, and adding more 0s if the number of decimal places specified is larger than the number.</dd>
			<dt><code>toPrecision()</code></dt>
			<dd>May accept a number in its argument, and returns a string representing the number truncated to the length specified by the argument, adding a decimal point and 0s if the length is greater than the original number. If no argument is used, simply returns a string representing the number.</dd>
			<dt><code>toString()</code></dt>
			<dd>Returns a string representing the number, with no alteration.</dd>
			<dt><code>valueOf()</code></dt>
			<dd>Returns the primitive value of the number; due to number being relatively simple objects, this simply returns its value.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
