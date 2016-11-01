<?php
	$PAGE_NAME = 'Arithmetic Operators';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>Arithmetic operators are a kind of operator used to adjust numbers in a few simple ways, and one slightly more complex. For obvious reasons, they must be targeted at numeric data, typically number variables, in order to work properly.</p>
	</section>
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
	<section>
		<h4>Syntax:</h4>
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
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
