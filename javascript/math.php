<?php
	$PAGE_NAME = 'Math';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The Math object holds a number of properties and methods useful for many mathematical purposes beyond the scope of simple arithmetic, for which mathematical operators are better suited. Note that I will only be documenting the use of this object; explaining the math itself would go well beyond the scope of this website.</p>
	</section>
	<section>
		<h4>Math Properties:</h4>
		<p>The properties of Math have values storing numbers commonly used in advanced mathematics.</p>
		<dl>
			<dt><code>E</code></dt>
			<dd>Returns Euler's number, approximately 2.718.</dd>
			<dt><code>LN2</code></dt>
			<dd>Returns the natural logarithm of 2, approximately 0.693.</dd>
			<dt><code>LN10</code></dt>
			<dd>Returns the natural logarithm of 10, approximately 2.302.</dd>
			<dt><code>LOG2E</code></dt>
			<dd>Returns the base-2 logarithm of Euler's number, approximately 1.442.</dd>
			<dt><code>LOG10E</code></dt>
			<dd>Returns the base-10 logarithm of Euler's number, approximately 0.434.</dd>
			<dt><code>PI</code></dt>
			<dd>Returns Pi, approximately 3.14.</dd>
			<dt><code>SQRT1_2</code></dt>
			<dd>Returns the square root of 0.50, approximately 0.707.</dd>
			<dt><code>SQRT2</code></dt>
			<dd>Returns the square root of 2, approximately 1.414.</dd>
		</dl>
	</section>
	<section>
		<h4>Math Methods:</h4>
		<p></p>
		<dl>
			<dt><code>abs()</code></dt>
			<dd>Accepts a numeric value in its argument, and returns the absolute value of that number, or its distance from 0. This generally just returns the number, but will change negative numbers to positive since negative distance is the same as positive distance.</dd>
			<dt><code>acos()</code></dt>
			<dd>Accepts a numeric value in its argument, and returns the arccosine of that number, in radians.</dd>
			<dt><code>asin()</code></dt>
			<dd>Accepts a numeric value in its argument, and returns the arccosine of that number, in radians.</dd>
			<dt><code>atan()</code></dt>
			<dd>Accepts a numeric value in its argument, and returns the arctangent of that number, in radians.</dd>
			<dt><code>atan2()</code></dt>
			<dd>Accepts two numbers in its argument, and returns the arctangent of their quotient.</dd>
			<dt><code>ceil()</code></dt>
			<dd>Accepts a numeric value in its argument, and returns the nearest integer rounding up from that number.</dd>
			<dt><code>cos()</code></dt>
			<dd>Accepts a numeric value in radians in its argument, and returns the cosine of that number.</dd>
			<dt><code>exp()</code></dt>
			<dd>Accepts a numeric value in its argument, and returns Euler's number to the power of that number.</dd>
			<dt><code>floor()</code></dt>
			<dd>Accepts a numeric value in its argument, and returns the nearest integer rounding down from that number.</dd>
			<dt><code>log()</code></dt>
			<dd>Accepts a numeric value in its argument, and returns the natural logarithm of that number.</dd>
			<dt><code>max()</code></dt>
			<dd>Accepts any number of numeric values in its argument, and returns the largest one of them.</dd>
			<dt><code>min()</code></dt>
			<dd>Accepts any number of numbers in its argument, and returns the smallest one of them.</dd>
			<dt><code>pow()</code></dt>
			<dd>Accepts two numeric values in its argument, and returns the outcome of the first number to the power of the second number.</dd>
			<dt><code>random()</code></dt>
			<dd>Returns a random number between 0 and 1.</dd>
			<dt><code>round()</code></dt>
			<dd>Accepts a numeric value in its argument, and returns the nearest integer rounding up or down from that number.</dd>
			<dt><code>sin()</code></dt>
			<dd>Accepts a numeric value in radians in its argument, and returns the sine of that number.</dd>
			<dt><code>sqrt()</code></dt>
			<dd>Accepts a numeric value in its argument, and returns the square root of that number.</dd>
			<dt><code>tan()</code></dt>
			<dd>Accepts a numeric value in radians (representing an angle) in its argument, and returns the tangent of that number.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
