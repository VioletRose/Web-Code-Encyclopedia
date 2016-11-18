<?php
	$PAGE_NAME = 'Global Properties';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The global properties are properties which are automatically predefined in the global 'scope', accessible from any script without their values having been set manually. They are technically properties of the window object, and can be accessed as such. All three global properties are varying kinds of error state - if a variable is set equal to one of these values, it's usually the result of an error or mistake in the code, and functions which rely on it will fail unexpectedly. These globals being preset allows scripts to compare variables against them, to ensure no such error has occurred and, if it has, to handle the error gracefully.</p>
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
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById('runExampleButton').addEventListener('click', function() {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById('infinitySpan').innerHTML = Infinity;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById('nanSpan').innerHTML = NaN;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById('undefinedSpan').innerHTML = undefined;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;});
				<br>
				&lt;/script&gt;
				<br>
				&lt;button id="runExampleButton"&gt;Run the script!&lt;/button&gt;
				<br>
				&lt;p&gt;The value of the global property &lt;code&gt;Infinity&lt;/code&gt; is: &lt;code&gt;&lt;span id="infinitySpan"&gt;&lt;/span&gt;&lt;/code&gt;.&lt;/p&gt;
				<br>
				&lt;p&gt;The value of the global property &lt;code&gt;NaN&lt;/code&gt; is: &lt;code&gt;&lt;span id="nanSpan"&gt;&lt;/span&gt;&lt;/code&gt;.&lt;/p&gt;
				<br>
				&lt;p&gt;The value of the global property &lt;code&gt;undefined&lt;/code&gt; is: &lt;code&gt;&lt;span id="undefinedSpan"&gt;&lt;/span&gt;&lt;/code&gt;.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section class="renderSection">
		<h4>Will be rendered as:</h4>
		<figure>
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					document.getElementById('runExampleButton').addEventListener('click', function() {
						document.getElementById('infinitySpan').innerHTML = Infinity;
						document.getElementById('nanSpan').innerHTML = NaN;
						document.getElementById('undefinedSpan').innerHTML = undefined;
					});
				});
			</script>
			<button id="runExampleButton">Run the script!</button>
			<p>The value of the global property <code>Infinity</code> is: <code><span id="infinitySpan"></span></code></p>
			<p>The value of the global property <code>NaN</code> is: <code><span id="nanSpan"></span></code></p>
			<p>The value of the global property <code>undefined</code> is: <code><span id="undefinedSpan"></span></code></p>
		</figure>
	</section>
-->
	<section>
		<h4>Global Properties:</h4>
		<dl>
			<dt><code>Infinity</code></dt>
			<dd>&#10551; The global property whose value is set as <code>Infinity</code>, representing a number too large for Javascript's floating point number system to use. Unlike the other two global properties, a variable whose property ends up set as <code>Infinity</code> will still retain one part of the original value before it became broken, specifically whether the value was a positive or negative number.</dd>
			<dt><code>NaN</code></dt>
			<dd>&#10551; The global property whose value is set as <code>NaN</code>, short for "Not a Number". If an impossible mathematical operation is performed, or the wrong type of data (usually a string) is used for something expecting a number, its value may end up as <code>NaN</code>; furthermore, these variables can be compared to <code>NaN</code> to determine if they're in a broken state.</dd>
			<dt><code>undefined</code></dt>
			<dd>&#10551; The global property whose value is set as <code>undefined</code>. Any variable that exists without ever having its value set has a value of <code>undefined</code>, which is another state that tends to be the result or cause of errors and mistakes.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
