<?php
	$PAGE_NAME = 'Boolean';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Booleans are the simplest type of variable, which can only have two values, <code>false</code> and <code>true</code>. When storing data amounting to a simple binary distinction such as yes/no or on/off, boolean variables are the most efficient thing to use.</p>
	</section>
	<section>
		<h4>Boolean Object Methods:</h4>
		<dl>
			<dt><code>Boolean()</code></dt>
			<dd>The Boolean object may be run as a function, and accepts a conditional check in its argument. It will return <code>false</code> or <code>true</code>, depending on the result of the check.</dd>
		</dl>
	</section>
	<section>
		<h4>Boolean Type Properties:</h4>
		<p></p>
		<dl>
			<dt><code>constructor</code></dt>
			<dd>This property stores the code that created the boolean's prototype. Unless this boolean, somewhere up its heredity, was created by the <code>new</code> operator, this will return <code>function Boolean() { [native code] }</code>, reflecting a core part of Javascript's engine.</dd>
			<dt><code>prototype</code></dt>
			<dd>A unique way to add new properties or methods to an object, this is not a standard property, but borrows syntax from them. It can be used to add properties to objects produced by "factories" (functions designed to create new objects with certain specifications); as an example, <code><var>factoryname</var>.prototype.<var>propertyname</var> = <var>propertyvalue</var></code> will append both the new property and its value to every new object produced by <code><var>factoryname</var></code>.</dd>
		</dl>
	</section>
	<section>
		<h4>Boolean Type Methods:</h4>
		<p></p>
		<dl>
			<dt><code>toString()</code></dt>
			<dd>Returns the boolean's value as a string.</dd>
			<dt><code>valueOf()</code></dt>
			<dd>Returns the primitive value of the boolean.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
