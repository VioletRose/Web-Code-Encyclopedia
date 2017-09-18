<?php
	$PAGE_NAME = 'Statements';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>In Javascript, a 'statement' is a line of code that executes instructions. The most typical format for a statement is something that specifies the object to be acted upon, then something else that specifies an effect to be taken; as an example, in <code>document.getElementByID('exampleDiv').innerHTML = 'Hello world!';</code> first we target the <code>document</code> object, then use the <code>getElementByID</code> method to search for a specific element ID, and now that that is targeted, select its innerHTML property and adjust its value with the <code>=</code> operator and the new value. However, the bulk of this page is dedicated not to statements, but to an integral part of their functionality, statement identifiers.</p>
	</section>
	<section>
		<h4>Statement Identifiers:</h4>
		<p>Statement identifiers are specialized scripting tools that control how statements operate, having the ability to run them again and again, check against conditions, or exit them early if necessary. Because of this, higher level Javascript depends heavily on proper use of them to achieve complex effects, while others are highly useful in even very simple scripts.</p>
		<dl>
			<dt><code>break</code></dt>
			<dd>Breaks out of a loop or a switch, ending it early regardless of its normal conditions.</dd>
			<dt><code>continue</code></dt>
			<dd>Ends a single repetition of a loop early, but allows it to continue repeating if its normal conditions are not yet met.</dd>
			<dt><code>debugger</code></dt>
			<dd>If the user has an in-browser debugger open when the script is run, upon reaching this statement, Javascript execution pauses and the debugger takes over, often allowing features such as continuing one statement at a time. If there is no debugger open, it does nothing.</dd>
			<dt><code>do | while</code></dt>
			<dd>The statement enclosed by <code>do</code> will run once, then keep repeating for as long as the <code>while</code> condition below it continues to be <code>true</code>. For example, if you place <code>while (<var>complete</var> != true)</code> below a <code>do</code> statement, it will run once even if <code>complete</code> is <code>true</code>, then keep repeating an indefinite number of times as long as <code>complete</code> is not <code>true</code>.</dd>
			<dt><code>for</code></dt>
			<dd>Intended to be used to repeat the enclosed statement for a conditional number of times, this type of loop is highly useful for such purposes as iterating through lists. An example would be <code>for (var i = 0; i < <var>array</var>.length; i++) {<var>statement</var>}</code>; in the <code>for</code> loop's argument we define a counter, a condition the loop should check to see whether it will continue repeating, and finally increment the counter by one after each loop completes, as well as, of course, the actual statement or function to be looped.</dd>
			<dt><code>for | in</code></dt>
			<dd>Similar to <code>for</code>, but specifically intended to loop through the properties of an object. An example would be <code>for (x in <var>object</var>) {<var>statement</var></code>. Because the <code>for</code> loop has the <code>in</code> in it, it will iterate through each property of the specified object, assigning the property's name to <code>x</code>, then repeating with the next property until it has run once for each property the object has.</dd>
			<dt><code>function</code></dt>
			<dd>Defines a function, a named script that, once written, can be called elsewhere in the script, generally used for efficiency in cases where it might otherwise be necessary to write the same code multiple times upon different condition checks. An example would be <code>function <var>functionName</var>() {<var>functionCode</var>;}</code>.</dd>
			<dt><code>if | else | else if</code></dt>
			<dd>These allow separate parts of code to execute within a function, depending on whether or not conditions are met. <code>if</code> and <code>else if</code> accept condition checks in their arguments, and if those return <code>true</code>, they execute the contained code. The order of use is <code>if</code>, then <code>else if</code> (if there are three or more checks to be made), and finally <code>else</code>, which doesn't do any checks but simply runs if none of the <code>if</code> statements took effect, as a fallback. An example would be <code>if (<var>conditionTrue</var>) {<var>statement</var>} else if (<var>otherconditionTrue</var>) {<var>anotherStatement</var>} else {<var>fallbackStatement</var>}</code>.</dd>
			<dt><code>return</code></dt>
			<dd>Stops the current function from executing. If a value or method of obtaining a value is specified, it returns the value, otherwise it returns <code>undefined</code>. An example would be <code>return Math.random();</code>.</dd>
			<dt><code>switch</code></dt>
			<dd>Requires a value in its argument, and begins running the enclosed statement from a point where <code>case</code> is used to find a match for that value. For example, if you put a variable named <code>year</code> into the argument, and the value of it is <code>1959</code>, the switch's code block will begin running from the point it encounters <code>case 1959:</code>.</dd>
			<dt><code>throw</code></dt>
			<dd>Generates an error with an associated error message. Unless enclosed within a <code>try</code> statement, this will cause the script to stop running.</dd>
			<dt><code>try | catch | finally</code></dt>
			<dd>A <code>try</code> statement is meant to enclose a statement with <code>throw</code> statements or untested code in it. Any errors produced by the code within will be stored but will not end the script as they normally would. Use of <code>try</code> requires either <code>catch</code> or <code>finally</code> after it in the script. A <code>catch</code> statement accepts a variable name to 'catch' thrown error messages into, as well as having its own enclosed statement which can be used to deal with error handling/reporting; however, the enclosed statement will not run if no errors were thrown. <code>finally</code> executes its enclosed statement regardless of whether or not errors were generated. The reason for these requirements is that Javascript standards insist that errors, if they occur, be properly 'handled' by one of these two statements, and if they are not, the script is assumed to be in a dangerously broken state and is shut down to prevent undesirable behavior.</dd>
			<dt><code>var</code></dt>
			<dd>Declares that the object to its right is a variable to be stored, which the current function and any sub-functions may access. Variable names must begin with $, _, or an alphabetical letter, and are case sensitive. An example would be <code>var <var>variable</var> = <var>value</var>;</code>.</dd>
			<dt><code>while</code></dt>
			<dd>A different form of the <code>do | while</code> logic, instead of running once regardless of the condition's status, in this case <code>while</code> itself encloses the statement that is meant to run for as long as the condition remains true.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
