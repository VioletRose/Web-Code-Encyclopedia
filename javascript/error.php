<?php
	$PAGE_NAME = 'Error';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The Error object, as the name might suggest, handles any errors that take place during the execution of scripts.</p>
	</section>
	<section>
		<h4>Error properties:</h4>
		<p>All errors produced during the execution of Javascript code are made into instances of the Error object, and given these two properties. Notably, errors require a <code>catch</code> <a href="/javascript/statements.php">statement</a> be used before they can be interfaced with.</p>
		<dl>
			<dt><code>name</code></dt>
			<dd>
				&#10551; This property stores an error name as a string, which is a very general way of distinguishing between types of errors. Six values are supported in all modern browsers.
				<details>
					<summary>Supported Values:</summary>
					<dl>
						<dt><code>EvalError</code></dt>
						<dd>&#10551; Indicates that an error has occured in the <code>eval()</code> function. Newer versions of Javascript use <code>SyntaxError</code> instead.</dd>
						<dt><code>RangeError</code></dt>
						<dd>&#10551; Indicates that a number out of range error has occurred.</dd>
						<dt><code>ReferenceError</code></dt>
						<dd>&#10551; Indicates that an illegal reference has occurred.</dd>
						<dt><code>SyntaxError</code></dt>
						<dd>&#10551; Indicates that a syntax error has occurred.</dd>
						<dt><code>TypeError</code></dt>
						<dd>&#10551; Indicates that a type error has occurred.</dd>
						<dt><code>URIError</code></dt>
						<dd>&#10551; Indicates that an error has occurred in the <code>encodeURI</code> method.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>message</code></dt>
			<dd>&#10551; This property stores an error message as a string, which is a bit more specific about what caused the error to occur, often specifying a function, method, or variable which failed to work properly.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
