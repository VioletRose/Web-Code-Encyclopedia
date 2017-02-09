<?php
	$PAGE_NAME = 'jQuery Event';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>jQuery has many methods for more easy, reliable control over page events and their results. Note that a large amount of the information on this page relates to the normal JavaScript <a href="/javascript/event.php">events</a>, and as such a working knowledge of them is required to utilize this aspect of jQuery.</p>
	</section>
	<section>
		<h4>jQuery Event Methods:</h4>
		<dl>
			<dt><code>blur()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>blur</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>blur</code> event is artificially triggered.</dd>
			<dt><code>change()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>change</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>change</code> event is artificially triggered.</dd>
			<dt><code>click()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>click</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>click</code> event is artificially triggered.</dd>
			<dt><code>dblclick</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>dblclick</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>dblclick</code> event is artificially triggered. Note that even artificially triggered <code>dblclick</code> events will produce a <code>click</code> event as well.</dd>
			<dt><code>focus()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>focus</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>focus</code> event is artificially triggered.</dd>
			<dt><code>focusin()</code></dt>
			<dd>Accepts a function in its argument, and if the <code>focusin</code> event occurs on the statement's selected element(s) or any of their child elements, that function will run.</dd>
			<dt><code>focusout()</code></dt>
			<dd>Accepts a function in its argument, and if the <code>focusout</code> event occurs on the statement's selected element(s) or any of their child elements, that function will run.</dd>
			<dt><code>hover()</code></dt>
			<dd>Accepts two functions in its argument, one required, the other optional; the required/first function is triggered by the <code>mouseenter</code> and <code>mouseleave</code> events, while if the second/optional function is provided, it handles the <code>mouseleave</code> event instead.</dd>
			<dt><code>keydown()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>keydown</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>keydown</code> event is artificially triggered.</dd>
			<dt><code>keypress()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>keypress</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>keypress</code> event is artificially triggered.</dd>
			<dt><code>keyup()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>keyup</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>keyup</code> event is artificially triggered.</dd>
			<dt><code>mousedown()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>mousedown</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>mousedown</code> event is artificially triggered.</dd>
			<dt><code>mouseenter()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>mouseenter</code> event occurs on the statement's selected element(s) or any of their child elements, that function will run; if no function is provided, the <code>mouseenter</code> event is artificially triggered.</dd>
			<dt><code>mouseleave()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>mouseleave</code> event occurs on the statement's selected element(s) or any of their child elements, that function will run; if no function is provided, the <code>mouseleave</code> event is artificially triggered.</dd>
			<dt><code>mousemove()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>mousemove</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>mousemove</code> event is artificially triggered. Note that the <code>mousemove</code> event triggers for every pixel of movement, making this a very resource-intensive element for the browser to track.</dd>
			<dt><code>mouseout()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>mouseout</code> event occurs on the statement's selected element(s) or any of their child elements, that function will run; if no function is provided, the <code>mouseout</code> event is artificially triggered.</dd>
			<dt><code>mouseover()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>mouseover</code> event occurs on the statement's selected element(s) or any of their child elements, that function will run; if no function is provided, the <code>mouseover</code> event is artificially triggered.</dd>
			<dt><code>mouseup()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>mouseup</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>mouseup</code> event is artificially triggered.</dd>
			<dt><code>off()</code></dt>
			<dd>
				&#10551; Removes event handlers previously attached using the <code>on()</code> method. Accepts several arguments, each separated by a comma and a space.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code>"<var>event</var>"</code></dt>
						<dd>Required; the event(s) the original handler was watching for. Multiple events may be specified, separated by spaces.</dd>
						<dt><code>"<var>selector</var>"</code></dt>
						<dd>Optional; a selector which matches the one(s) originally used by the <code>on()</code> method as a child selector.</dd>
							<!--Can I just use one of these, or more than one?-->
						<dt><code><var>function</var>(<var>event</var>)</code></dt>
						<dd>Optional; </dd>
							<!--I am very confused by the example for this one.-->
						<dt><code>{<var>event</var>: <var>function</var>(), <var>event</var>: <var>function</var>()}</code></dt>
						<dd>Optional variant argument format; the event map originally used by the <code>on()</code> method to attach the event handler.</dd>
							<!--Is this actually multiple event handlers, or just one big multifunctional one?-->
					</dl>
				</details>
			</dd>
			<dt><code>on()</code></dt>
			<dd>
				&#10551; Attaches an event handler to the statement's selected element(s) and their child elements, to be run when the specified event(s) occur. Accepts several arguments, each separated by a comma and a space.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code>"<var>event</var>"</code></dt>
						<dd>Required; the event(s) the handler will be watching for. Multiple events may be specified, separated by spaces.</dd>
						<dt>"<code><var>selector</var></code>"</dt>
						<dd>Optional; known as a child selector, this indicates that the event handler should only be attached to selector-matching child elements of the statement's selected element(s), and not to the selected element(s) directly.</dd>
						<dt><code>{<var>property</var>: <var>data</var>}</code></dt>
						<dd>Optional; specifies additional data to be passed to the function, in the form of a property which will be added to the function's <code>event.data</code> object.</dd>
							<!--This either. I need to know both if I did it right, as well as caveats/drawbacks to this approach.-->
						<dt><code><var>function</var>()</code></dt>
						<dd>Required; the function to be run when the specified event(s) occur.</dd>
						<dt><code>{<var>event</var>: <var>function</var>(), <var>event</var>: <var>function</var>()}</code></dt>
						<dd>Optional variant argument format; known as an event map, this format can specify multiple, comma-separated event:function pairs in one call of the method, allowing the handler to call different functions for different events.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>one()</code></dt>
			<dd></dd>
			<dt><code>$.proxy()</code></dt>
			<dd></dd>
			<dt><code>ready()</code></dt>
			<dd></dd>
			<dt><code>resize()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>resize</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>resize</code> event is artificially triggered.</dd>
			<dt><code>scroll()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>scroll</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>scroll</code> event is artificially triggered.</dd>
			<dt><code>select()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>select</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>select</code> event is artificially triggered.</dd>
			<dt><code>submit()</code></dt>
			<dd>Accepts an optional function in its argument, and if the <code>submit</code> event occurs on the statement's selected element(s), that function will run; if no function is provided, the <code>submit</code> event is artificially triggered.</dd>
			<dt><code>trigger()</code></dt>
			<dd></dd>
			<dt><code>triggerHandler()</code></dt>
			<dd></dd>
		</dl>
	</section>
	<section>
		<h4>jQuery Event Parameter Properties:</h4>
		<p>The properties and methods I refer to as "event parameter", and the <code><var>event</var></code> prefix associated with them, do not refer to the jQuery Event object itself, but a specific object containing event parameters that is interpreted from the browser when jQuery Event methods are used. This object's name is determined by the argument declared in the event method, though <code>event</code> is recommended and used here as a placeholder.</p>
		<dl>
			<dt><code><var>event</var>.currentTarget</code></dt>
			<dd>The current DOM element in the event bubbling phase.</dd>
			<dt><code><var>event</var>.data</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.delegateTarget</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.namespace</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.pageX</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.pageY</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.relatedTarget</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.result</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.target</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.timeStamp</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.type</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.which</code></dt>
			<dd></dd>
		</dl>
	</section>
	<section>
		<h4>jQuery Event Parameter Methods:</h4>
		<dl>
			<dt><code><var>event</var>.isDefaultPrevented()</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.isImmediatePropagationStopped()</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.isPropagationStopped()</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.preventDefault()</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.stopImmediatePropagation()</code></dt>
			<dd></dd>
			<dt><code><var>event</var>.stopPropagation()</code></dt>
			<dd></dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
