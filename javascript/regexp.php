<?php
	$PAGE_NAME = 'RegExp';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>RegExp objects handles the use of regular expressions, also known as patterns. Regular expressions are very compact and efficient search conditions, used to check whether or not string data matches their query. They consist of a series of specially formatted queries, and are nearly unreadable to humans, requiring detailed knowledge of how they function to use or understand. The tradeoff is that they are very small and easy to process compared to typing comparison strings out in plain text, which can be important for performance if searching through a very large amount of data. However, this page does not document the details of regular expressions themselves, but the RegExp object which handles them.</p>
	</section>
	<section>
		<h4>RegExp Type Properties:</h4>
		<dl>
			<dt><code>constructor</code></dt>
			<dd>This property stores the code that created the regular expression's prototype. Unless this regular epxression, somewhere up its heredity, was created by the <code>new</code> operator, this will return <code>function RegExp() { [native code] }</code>, reflecting a core part of Javascript's engine.</dd>
			<dt><code>global</code></dt>
			<dd>Returns <code>true</code> if the pattern is using the <code>g</code> modifier, otherwise, returns <code>false</code>.</dd>
			<dt><code>ignoreCase</code></dt>
			<dd>Returns <code>true</code> if the pattern is using the <code>i</code> modifier, otherwise returns <code>false</code>.</dd>
			<dt><code>lastIndex</code></dt>
			<dd>Stores an integer representing the character index (location) of the last match found by the <code>exec</code> or <code>test</code> methods. Note that both methods reset this to <code>0</code> if no match is found.</dd>
			<dt><code>multiline</code></dt>
			<dd>Returns <code>true</code> if the pattern is using the <code>m</code> modifier, otherwise, returns <code>false</code>.</dd>
			<dt><code>source</code></dt>
			<dd>Returns the text of the regular expression. Note that this is only the main pattern, excluding modifiers.</dd>
		</dl>
	</section>
	<section>
		<h4>RegExp Type Methods:</h4>
		<dl>
			<dt><code>exec()</code></dt>
			<dd>Accepts a string in its argument, and returns the first character or sequence of characters it finds that match the regular expression, otherwise, returns <code>null</code>.</dd>
			<dt><code>test()</code></dt>
			<dd>Accepts a string in its argument, and returns <code>true</code> if it finds a match for the regular expression, otherwise, returns <code>false</code>.</dd>
			<dt><code>toString()</code></dt>
			<dd>Returns the regular expression as a string.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
