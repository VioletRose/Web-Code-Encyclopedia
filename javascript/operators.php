<?php
	$PAGE_NAME = 'Operators';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>Operators may be placed between two targets, usually variables although there are other possibilities, to take some kind of action upon their values, whether it be to adjust them arbitrarily, adjust them relative to one another, perform comparisons, or other, more advanced operations.
	</section>
<!--This part of the page is defunct and will no longer be used, but the work I did on it has been kept for historical value.
	<section class="exampleSection">
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;script&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;document.addEventListener('DOMContentLoaded', function() {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function onChangeFunc() {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var self;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (this.className.split(' ').indexOf('yInput') >= 0) {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;self = this.previousElementSibling;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;self = this;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var x = parseInt(self.value);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var y;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (self.className.split(' ').indexOf('incDecInput') < 0) {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y = parseInt(self.nextElementSibling.value);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y = 0;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var operation = self.parentElement.getAttribute('operator');
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var validOperation = ['+','-','*','/','%','++','--'];
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (isNaN(x) || isNaN(y) || validOperation.indexOf(operation) < 0) {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alert('Nice try! I\'m proud of you~');
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.log(validOperation.indexOf(operation));
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (self.className.split(' ').indexOf('incDecInput') < 0) {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var z = eval(x.toString()+operation+y.toString());
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var z = eval(x.toString()+operation);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;self.parentElement.querySelector('.zCalculation').innerHTML = opStr;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;self.parentElement.querySelector('.zOutput').innerHTML = z;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var inputElems = document.body.getElementsByClassName('arithmeticInput');
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(var i = 0, l = inputElems.length; i < l; i++) {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inputElems[i].addEventListener('change', onChangeFunc);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;});
				<br>
				&lt;/script&gt;
				<br>
				&lt;p&gt;Below are a number of examples of arithmetic operators in action. You can input the numbers into the fields in order to change the calculated outcome; each first field determines the value of &lt;var&gt;x&lt;/var&gt;, while the second field, if present, determines the value of &lt;var&gt;y&lt;/var&gt;.&lt;/p&gt;
				<br>
				&lt;div operator="+"&gt;Addition: &lt;input class="arithmeticInput xInput" type="number" value="1"&gt; adding &lt;input class="arithmeticInput yInput" value="1" type="number"&gt; is &lt;span class="zOutput"&gt;2&lt;/span&gt;, as calculated by &lt;code&gt;var z = x + y;&lt;/code&gt;.&lt;/div&gt;
				<br>
				&lt;div operator="-"&gt;Subtraction: &lt;input class="arithmeticInput xInput" type="number" value="2"&gt; subtracting &lt;input class="arithmeticInput yInput" value="1" type="number"&gt; is &lt;span class="zOutput"&gt;1&lt;/span&gt;, as calculated by &lt;code&gt;var z = x - y;&lt;/code&gt;.&lt;/div&gt;
				<br>
				&lt;div operator="*"&gt;Multiplication: &lt;input class="arithmeticInput xInput" type="number" value="1"&gt; multiplying by &lt;input class="arithmeticInput yInput" value="2" type="number"&gt; is &lt;span class="zOutput"&gt;2&lt;/span&gt;, as calculated by &lt;code&gt;var z = x * y;&lt;/code&gt;.&lt;/div&gt;
				<br>
				&lt;div operator="/"&gt;Division: &lt;input class="arithmeticInput xInput" type="number" value="2"&gt; dividing by &lt;input class="arithmeticInput yInput" value="2" type="number"&gt; is &lt;span class="zOutput"&gt;1&lt;/span&gt;, as calculated by &lt;code&gt;var z = x / y;&lt;/code&gt;.&lt;/div&gt;
				<br>
				&lt;div operator="%"&gt;Modulus (divides and returns the remainder): &lt;input class="arithmeticInput xInput" type="number" value="3"&gt; divided by &lt;input class="arithmeticInput yInput" value="2" type="number"&gt; returns a modulus of &lt;span class="zOutput"&gt;1&lt;/span&gt;, as calculated by &lt;code&gt;var z = x % y;&lt;/code&gt;.&lt;/div&gt;
				<br>
				&lt;div operator="++"&gt;Increment: &lt;input class="arithmeticInput incDecInput xInput" type="number" value="1"&gt; incremented is &lt;span class="zOutput"&gt;2&lt;/span&gt;, as calculated by &lt;code&gt;var z = x++;&lt;/code&gt;.&lt;/div&gt;
				<br>
				&lt;div operator="--"&gt;Decrement: &lt;input class="arithmeticInput incDecInput xInput" type="number" value="2"&gt; decremented is &lt;span class="zOutput"&gt;1&lt;/span&gt;, as calculated by &lt;code&gt;var z = x--;&lt;/code&gt;.&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section class="renderSection">
		<h4>Will be rendered as:</h4>
		<figure>
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					function onChangeFunc() {
						var self;
						if (this.className.split(' ').indexOf('yInput') >= 0) {
							self = this.previousElementSibling;
						}
						else {
							self = this;
						}
						var x = parseInt(self.value);
						var y;
						if (self.className.split(' ').indexOf('incDecInput') < 0) {
							y = parseInt(self.nextElementSibling.value);
						}
						else {
							y = 0;
						}
						var operation = self.parentElement.getAttribute('operator');
						var validOperation = ['+','-','*','/','%','++','--'];
						if (isNaN(x) || isNaN(y) || validOperation.indexOf(operation) < 0) {
							alert('Nice try! I\'m proud of you~');
							console.log(validOperation.indexOf(operation));
							return;
						}
						if (self.className.split(' ').indexOf('incDecInput') < 0) {
							var z = eval(x.toString()+operation+y.toString());
						}
						else {
							var z = eval(x.toString()+operation);
							self.parentElement.querySelector('.zCalculation').innerHTML = opStr;
						}
						self.parentElement.querySelector('.zOutput').innerHTML = z;
					}

					var inputElems = document.body.getElementsByClassName('arithmeticInput');
					for(var i = 0, l = inputElems.length; i < l; i++) {
						inputElems[i].addEventListener('change', onChangeFunc);
					}
				});
			</script>
			<p>Below are a number of examples of arithmetic operators in action. You can input the numbers into the fields in order to change the calculated outcome; each first field determines the value of <var>x</var>, while the second field, if present, determines the value of <var>y</var>.</p>
			<div operator="+">Addition: <input class="arithmeticInput xInput" type="number" value="1"> adding <input class="arithmeticInput yInput" value="1" type="number"> is <span class="zOutput">2</span>, as calculated by <code>var z = x + y;</code>.</div>
			<div operator="-">Subtraction: <input class="arithmeticInput xInput" type="number" value="2"> subtracting <input class="arithmeticInput yInput" value="1" type="number"> is <span class="zOutput">1</span>, as calculated by <code>var z = x - y;</code>.</div>
			<div operator="*">Multiplication: <input class="arithmeticInput xInput" type="number" value="1"> multiplying by <input class="arithmeticInput yInput" value="2" type="number"> is <span class="zOutput">2</span>, as calculated by <code>var z = x * y;</code>.</div>
			<div operator="/">Division: <input class="arithmeticInput xInput" type="number" value="2"> dividing by <input class="arithmeticInput yInput" value="2" type="number"> is <span class="zOutput">1</span>, as calculated by <code>var z = x / y;</code>.</div>
			<div operator="%">Modulus (divides and returns the remainder): <input class="arithmeticInput xInput" type="number" value="3"> divided by <input class="arithmeticInput yInput" value="2" type="number"> returns a modulus of <span class="zOutput">1</span>, as calculated by <code>var z = x % y;</code>.</div>
			<div operator="++">Increment: <input class="arithmeticInput incDecInput xInput" type="number" value="1"> incremented is <span class="zOutput">2</span>, as calculated by <code>var z = x++;</code>.</div>
			<div operator="--">Decrement: <input class="arithmeticInput incDecInput xInput" type="number" value="2"> decremented is <span class="zOutput">1</span>, as calculated by <code>var z = x--;</code>.</div>
		</figure>
	</section>
-->
	<section>
		<h4>Arithmetic Operators:</h4>
		<p>Arithmetic operators are a kind of operator used to adjust numbers in a few simple ways, and one slightly more complex. For obvious reasons, they must be targeted at numeric data, typically number variables, in order to work properly. However, their targets need not be numbers directly, they can be equations or even entire functions as long as numeric data is returned as the outcome.</p>
		<dl>
			<dt><code>+</code></dt>
			<dd>&#10551; Adds one number's value to another's. An example is <code>z = x + y</code>.</dd>
			<dt><code>-</code></dt>
			<dd>&#10551; Subtracts one number's value to another's. An example is <code>z = x - y</code>.</dd>
			<dt><code>*</code></dt>
			<dd>&#10551; Multiplies one number's value by another's. An example is <code>z = x * y</code>.</dd>
			<dt><code>/</code></dt>
			<dd>&#10551; Divides one number's value by another's. An example is <code>z = x / y</code>.</dd>
			<dt><code>%</code></dt>
			<dd>&#10551; Divides one number's value by another's and returns the remainder as the result. An example is <code>z = x % y</code>.</dd>
			<dt><code>++</code></dt>
			<dd>&#10551; Increments a number by one. An example is <code>z = ++x</code> or <code>z = x++</code>.</dd>
			<dt><code>--</code></dt>
			<dd>&#10551; Decrements a number by one. An example is <code>z = --y</code> or <code>z = y--</code>.</dd>
		</dl>
	</section>
	<section>
		<h4>Assignment Operators:</h4>
		<p>Assignment operators are operators used to assign values to nearly anything which can have a value. Whatever is placed before the assignment operator will have its value set to the latter, whether the latter is just a value or a function which produces a usable value as its result.</p>
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
	<section>
		<h4>String Operators:</h4>
		<p>The two string operators offer ways of conjoining multiple strings into a single one. Due to them having the same format as arithmetic operators, care needs to be taken with what value types are used with them - they will operate on string, numeric, and other variable types but may not have desirable results.</p>
		<dl>
			<dt><code>+</code></dt>
			<dd>&#10551; When placed between two instances of string data, returns the two of them combined. For example, <code>stringZ = stringX + stringY;</code> will result in <code>stringZ</code>'s value being set to that of <code>stringX</code> combined with <code>stringY</code>'s.</dd>
			<dt><code></code></dt>
			<dd>&#10551; Similar to the above, but acting directly on the left-hand target. For example, <code>stringX += stringY</code> will result in <code>stringX</code>'s value being set to itself combined with <code>stringY</code>'s.</dd>
		</dl>
	</section>
	<section>
		<h4>Comparison Operators:</h4>
		<p>These are all boolean - whatever the results of the comparison they make between the left and right values, the outcome will always be either <code>true</code> or <code>false</code>.</p>
		<dl>
			<dt><code>==</code></dt>
			<dd>&#10551; Returns <code>true</code> if the two values are the same, otherwise, returns <code>false</code>.</dd>
			<dt><code>===</code></dt>
			<dd>&#10551; Returns <code>true</code> if the two values are the same and of the same type, otherwise, returns <code>false</code>.</dd>
			<dt><code>!=</code></dt>
			<dd>&#10551; Returns <code>true</code> if the two values are not the same, otherwise, returns <code>false</code>.</dd>
			<dt><code>!==</code></dt>
			<dd>&#10551; Returns <code>true</code> if the two values are not the same or not of the same type, otherwise, returns <code>false</code>.</dd>
			<dt><code>&gt;</code></dt>
			<dd>&#10551; Returns <code>true</code> if the left value is greater than the right, otherwise, returns <code>false</code>. If used on a string, it compares the UTF point indices of the first non-identical characters, with later characters being evaluated as greater.</dd>
			<dt><code>&lt;</code></dt>
			<dd>&#10551; Returns <code>true</code> if the left value is lesser than the right, otherwise, returns <code>false</code>. If used on a string, it compares the UTF point indices of the first non-identical characters, with earlier characters being evaluated as lesser.</dd>
			<dt><code>&gt;=</code></dt>
			<dd>&#10551; Similar to <code>&gt;</code>, but it will additionally return <code>true</code> if the values are identical.</dd>
			<dt><code>&lt;=</code></dt>
			<dd>&#10551; Similar to <code>&lt;</code>, but it will additionally return <code>true</code> if the values are identical.</dd>
		</dl>
	</section>
	<section>
		<h4>The Conditional (Ternary) Operator:</h4>
		<dl>
			<dt><code>?</code></dt>
			<dd>&#10551; A unique operator placed between any logic that will return a boolean value on the left, and a pair of possible values on the right - if the boolean is <code>true</code>, the first of the right values  will be used, and if the boolean is <code>false</code>, the second will be used. An example would be <code>ternary = (10 < 21) ? 'lower value':'higher value';</code>.</dd>
		</dl>
	</section>
	<section>
		<h4>Logical Operators:</h4>
		<p>The operator's operator, these are primarily useful for making comparisons between comparisons, to easily make a logical decision based on the outputs of multiple checks.</p>
		<dl>
			<dt><code>&amp;&amp;</code></dt>
			<dd>&#10551; Returns <code>true</code> when the values to the left and right are both <code>true</code>, otherwise, returns <code>false</code>.</dd>
			<dt><code>||</code></dt>
			<dd>&#10551; Returns <code>true</code> if either of the values to the left or right are <code>true</code>, otherwise, returns <code>false</code>.</dd>
			<dt><code>!</code></dt>
			<dd>&#10551; This operator only accepts values on the right. It returns <code>true</code> if its right side value is <code>false</code>, and <code>false</code> if its right side value is <code>true</code>.</dd>
		</dl>
	</section>
	<section>
		<h4>Javascript Bitwise Operators:</h4>
		<p>These operators specialize in handling 32 bit numbers, and function more like logic gates than standard operators. 32 bit numbers, internally, are sequences of 0s and 1s, which is important to the way these operators work.</p>
		<dl>
			<dt><code>&amp;</code></dt>
			<dd>&#10551; The AND operator compares the left and right values, returning a value consisting of 0s in places where either value contains a 0, and 1s in places where both values contain 1s.</dd>
			<dt><code>|</code></dt>
			<dd>&#10551; The OR operator compares the left and right values, returning a value consisting of 0s in places where both values contain 0s, and 1s in places where either value contains a 1.</dd>
			<dt><code>~</code></dt>
			<dd>&#10551; The NOT operator only accepts values on the right. It returns the value to its right, adjusted so that all 0s are now 1s and all 1s are now 0s.</dd>
			<dt><code>^</code></dt>
			<dd>&#10551; The XOR operator (exclusive OR) compares the left and right values, returning a value consisting of 0s in places where either both values contain 0s, or both values contain 1s, and 1s in places where one value contains a 1 and the other does not.</dd>
			<dt><code>&lt;&lt;</code></dt>
			<dd>&#10551; The left shift operator returns the 32 bit value on the left, modified by having each 0 and 1 moved a number of places to the left controlled by the right value, which is <em>not</em> 32 bit. Note that 1s pushed off the left side by this operation will simply be gone, and everything coming from the right will be 0s.</dd>
			<dt><code>&gt;&gt;</code></dt>
			<dd>&#10551; The right shift operator is identical to the left shift operator, except that it shifts right instead of left.</dd>
		</dl>
	</section>
	<section>
		<h4>The <code>typeof</code> Operator:</h4>
		<dl>
			<dt><code>typeof</code></dt>
			<dd>&#10551; This operator only accepts values on the right. It returns the type of the value to its right; possible types include boolean, function, number, object, string, undefined etc.</dd>
		</dl>
	</section>
	<section>
		<h4>The <code>delete</code> Operator:</h4>
		<dl>
			<dt><code>delete</code></dt>
			<dd>&#10551; This operator only accepts values on the right. It deletes a property from an object, removing its value; any query of this property, until it is defined again, will return <code>undefined</code>.</dd>
		</dl>
	</section>
	<section>
		<h4>The <code>in</code> Operator:</h4>
		<dl>
			<dt><code></code></dt>
			<dd>&#10551; This operator checks whether the object on the right (and everything in Javascript is, technically speaking, an object) has the property specified on the left, returning <code>true</code> if it does, and <code>false</code> if it does not. For example, <code>'length' in String</code> returns <code>true</code>, because <code>length</code> is a property of <code>String</code>.</dd>
		</dl>
	</section>
	<section>
		<h4>The <code>instanceof</code> Operator:</h4>
		<dl>
			<dt><code>instanceof</code></dt>
			<dd>&#10551; This operator checks whether the object on the left is an instance of the object on the right. Javascript objects are frequently classified in this way; as an example, if <code>alphabet</code> is defined as a string, then <code>alphabet instanceof Number</code> will return <code>false</code>, but <code>alphabet instanceof String</code> will return <code>true</code>.</dd>
		</dl>
	</section>
	<section>
		<h4>The <code>void</code> Operator:</h4>
		<dl>
			<dt><code>void</code></dt>
			<dd>&#10551; This operator is used as a wrapper to ensure that certain types of evaluated statements (placed as its argument), especially bookmarklets and HTML-placed event handlers, will return <code>undefined</code> after evaluation as opposed to anything else which the browser might misinterpret as an instruction.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
