<?php
	$PAGE_NAME = 'Global Functions';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>Global functions are functions which are automatically predefined in the global 'scope', accessible from any script without their code having been written manually. Notably, they require the entirety of the data upon which they are expected to act to be passed to them as an argument.</p>
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
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var evalString1 = document.getElementById('evalCode1').value;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var evalString2 = document.getElementById('evalCode2').value;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var maybeFinite = document.getElementById('finiteSelector').value;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var maybeNaN = document.getElementById('nanSelector').value;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var toNumber = document.getElementById('toNumberSelector').value;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var floatParse = document.getElementById('floatParseSelector').value;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var intParse = document.getElementById('intParseSelector').value;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var toString = document.getElementById('toStringSelector').value;
				<br>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eval(evalString1+evalString2);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById('finiteDisplay').innerHTML = isFinite(maybeFinite);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById('nanDisplay').innerHTML = isNaN(maybeNaN);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById('toNumberDisplay').innerHTML = Number(toNumber);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById('floatParseDisplay').innerHTML = parseFloat(floatParse);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById('intParseDisplay').innerHTML = parseInt(intParse);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById('toStringDisplay').innerHTML = String(toString);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;});
				<br>
				&lt;/script&gt;
				<br>
				&lt;button id="runExampleButton"&gt;Run the script!&lt;/button&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;code id="evalCode1"&gt;document.getElementById('evalDisplay')&lt;/code&gt; will not actually do anything separated from the second half of the statement, &lt;code id="evalCode2"&gt;.innerHTML = success&lt;/code&gt;. But using the &lt;code&gt;eval&lt;/code&gt; function to splice the two together will create usable code, as you can see here after running the script: &lt;code id="evalDisplay"&gt;&lt;/code&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;select id="finiteSelector"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="Infinity"&gt;Infinity&lt;/option&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="2"&gt;2&lt;/option&gt;
				<br>
				&lt;/select&gt;
				<br>
				is finite?: &lt;span id="finiteDisplay"&gt;&lt;/span&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;select id="nanSelector"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="NaN"&gt;NaN&lt;/option&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="16"&gt;16&lt;/option&gt;
				<br>
				&lt;/select&gt;
				<br>
				is NaN?: &lt;span id="nanDisplay"&gt;&lt;/span&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;input id="toNumberSelector" type="text" value="true"&gt;, displayed as a number, is: &lt;span id="toNumberDisplay"&gt;&lt;/span&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;input id="floatParseSelector" type="text" value="10.33"&gt;, converted to a floating point number, is: &lt;span id="floatParseDisplay"&gt;&lt;/span&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;input id="intParseSelector" type="text" value="10.33"&gt;, converted to an integer, is: &lt;span id="intParseDisplay"&gt;&lt;/span&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;input id="toStringSelector" type="text" value="5"&gt;, displayed as a string, is: &lt;span id="toStringDisplay"&gt;&lt;/span&gt;
			</code>
		</figure>
	</section>
	<section class="renderSection">
		<h4>Will be rendered as:</h4>
		<figure>
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					document.getElementById('runExampleButton').addEventListener('click', function() {
						var evalString1 = document.getElementById('evalCode1').value;
						var evalString2 = document.getElementById('evalCode2').value;
						var maybeFinite = document.getElementById('finiteSelector').value;
						var maybeNaN = document.getElementById('nanSelector').value;
						var toNumber = document.getElementById('toNumberSelector').value;
						var floatParse = document.getElementById('floatParseSelector').value;
						var intParse = document.getElementById('intParseSelector').value;
						var toString = document.getElementById('toStringSelector').value;
						
						eval(evalString1+evalString2);
						document.getElementById('finiteDisplay').innerHTML = isFinite(maybeFinite);
						document.getElementById('nanDisplay').innerHTML = isNaN(maybeNaN);
						document.getElementById('toNumberDisplay').innerHTML = Number(toNumber);
						document.getElementById('floatParseDisplay').innerHTML = parseFloat(floatParse);
						document.getElementById('intParseDisplay').innerHTML = parseInt(intParse);
						document.getElementById('toStringDisplay').innerHTML = String(toString);
					});
				});
			</script>
			<button id="runExampleButton">Run the script!</button>
			<br>
			<code id="evalCode1">document.getElementById('evalDisplay')</code> will not actually do anything separated from the second half of the statement, <code id="evalCode2">.innerHTML = success</code>. But using the <code>eval</code> function to splice the two together will create usable code, as you can see here after running the script: <code id="evalDisplay"></code>
			<br>
			<select id="finiteSelector">
				<option value="Infinity">Infinity</option>
				<option value="2">2</option>
			</select>
			is finite?: <span id="finiteDisplay"></span>
			<br>
			<select id="nanSelector">
				<option value="NaN">NaN</option>
				<option value="16">16</option>
			</select>
			is NaN?: <span id="nanDisplay"></span>
			<br>
			<input id="toNumberSelector" type="text" value="true">, displayed as a number, is: <span id="toNumberDisplay"></span>
			<br>
			<input id="floatParseSelector" type="text" value="10.33">, converted to a floating point number, is: <span id="floatParseDisplay"></span>
			<br>
			<input id="intParseSelector" type="text" value="10.33">, converted to an integer, is: <span id="intParseDisplay"></span>
			<br>
			<input id="toStringSelector" type="text" value="5">, displayed as a string, is: <span id="toStringDisplay"></span>
		</figure>
	</section>
-->
	<section>
		<h4>Global Functions:</h4>
		<dl>
			<dt><code>decodeURI</code></dt>
			<dd>&#10551; Accepts a URI previously encoded by <code>encodeURI</code> and returns it in decoded form.</dd>
			<dt><code>decodeURIComponent</code></dt>
			<dd>&#10551; Accepts a URI component or set of components previously encoded by <code>encodeURL</code> and returns it in decoded form.</dd>
			<dt><code>encodeURI</code></dt>
			<dd>&#10551; Accepts a URL and encodes it for use as a URI, such as a search string, escaping special characters which are not allowed in URIs, returning the encoded output; exceptions include: , / ? : @ & = + $ #</dd>
			<dt><code>encodeURIComponent</code></dt>
			<dd>&#10551; Accepts a URL and encodes it and all of its separate components for use as a URI, escaping all special characters <code>encodeURI</code> does as well as the normal exceptions and returning the encoded output.</dd>
			<dt><code>eval</code></dt>
			<dd>&#10551; Accepts a string (which may be constructed from multiple string variables) as its argument, and runs it as Javascript code. In this way, a script can be used to write a script with modular parts; however, one must be very careful about any use of this function where user input is concerned, because users can be tricked into using your page to run arbitrary code. This can even include accessing a malicious website and executing content from it using your own site's security credentials.</dd>
			<dt><code>isFinite</code></dt>
			<dd>&#10551; Accepts a number as its argument, in practice a numeric variable or output, and returns <code>true</code> for valid, finite floating point numbers, and <code>false</code> for numbers outside floating point limits and for non-numeric inputs.</dd>
			<dt><code>isNaN</code></dt>
			<dd>&#10551; Accepts anything as its argument, and returns <code>true</code> if the input is non-numeric, or <code>false</code> if it is a number.</dd>
			<dt><code>Number</code></dt>
			<dd>&#10551; Accepts non-string data as its argument, and attempts to convert it to a number semi-intelligently; for example, <code>true</code> will become <code>1</code>, while <code>false</code> will become 0. However, anything it cannot successfully convert to a number, such as a string, even including <code>'true'</code>, will return <code>NaN</code>.</dd>
			<dt><code>parseFloat</code></dt>
			<dd>&#10551; Accepts strings as its argument, and parses them for numeric content by taking the first character in the string and determining whether or not it is a number. If it is, it continues parsing until it reaches the end of the number and returns the result as a floating point number, discarding the remaining text. If the first character is not a number, it returns <code>NaN</code>.</dd>
			<dt><code>parseInt</code></dt>
			<dd>&#10551; Identical to <code>parseFloat</code>, except that it returns its value as an integer rather than a floating point number, meaning decimal places will be discarded.</dd>
			<dt><code>String</code></dt>
			<dd>&#10551; Accepts anything as its argument, and attempts to convert it to a string semi-intelligently. It does not have a failure state as <code>Number</code> does, since anything can be converted to a string in one way or another, but the results may not be easily readable if the input doesn't lend itself well to string conversion.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
