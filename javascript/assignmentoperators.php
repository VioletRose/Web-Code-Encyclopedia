<?php
	$PAGE_NAME = 'Assignment Operators';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>Assignment operators are operators used to assign values to nearly anything which can have a value. Whatever is placed before the assignment operator will have its value set to the latter, whether the latter is just a value or a function which produces a usable value as its result.</p>
	</section>
	<section>
		<h4>Assignment Operators:</h4>
		<dl>
			<dt><code>=</code></dt>
			<dd>&#10551; Sets any value to the specified value. An example is <code>var second = 2;</code>, which sets <code>second</code> to <code>2</code></dd>
			<dt><code>+=</code></dt>
			<dd>&#10551; Sets a value to itself plus another value. An example is <code>second += 2;</code>, which adds <code>2</code> to the value of <code>second</code>.</dd>
			<dt><code>-=</code></dt>
			<dd>&#10551; Sets a numeric value to itself minus another value. An example is <code>second -= 2;</code>, which subtracts <code>2</code> from the value of <code>second</code>.</dd>
			<dt><code>*=</code></dt>
			<dd>&#10551; Sets a numeric value to itself multiplied by another value. An example is <code>second *= 2;</code>, which multiplies <code>second</code>'s value by <code>2</code>.</dd>
			<dt><code>/=</code></dt>
			<dd>&#10551; Sets a numeric value to itself divided by another value. An example is <code>second /= 2;</code>, which divides <code>second</code>'s value by <code>2</code>.</dd>
			<dt><code>%=</code></dt>
			<dd>&#10551; Sets a numeric value to itself after a modulus operation with another value (divide by, then return the remainder). An example is <code>second %= 2;</code>, which performs a modulus operation on the value of <code>second</code> using <code>2</code> for the division.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
