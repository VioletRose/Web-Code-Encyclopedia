<?php
	$PAGE_NAME = 'jQuery Event';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p></p>
	</section>
	<section>
		<h4>jQuery Event Methods:</h4>
		<dl>
			<dt><code>blur()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>change()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>click()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>dblclick</code></dt>
			<dd>&#10551; </dd>
			<dt><code>focus()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>focusin()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>focusout()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>hover()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>keydown()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>keypress()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>keyup()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>mousedown()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>mouseenter()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>mouseleave()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>mousemove()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>mouseout()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>mouseover()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>mouseup()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>off()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>on()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>one()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>$.proxy()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>ready()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>resize()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>scroll()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>select()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>submit()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>trigger()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>triggerHandler()</code></dt>
			<dd>&#10551; </dd>
		</dl>
	</section>
	<section>
		<h4>jQuery Event Parameter Properties:</h4>
		<p>The properties and methods I refer to as "event parameter", and the <code><var>event</var></code> prefix associated with them, do not refer to the jQuery Event object itself, but a specific object containing event parameters that is interpreted from the browser when jQuery Event methods are used. This object's name is determined by the argument declared in the event method, though <code>event</code> is recommended and used here as a placeholder.</p>
		<dl>
			<dt><code>event.currentTarget</code></dt>
			<dd>&#10551; The current DOM element in the event bubbling phase.</dd>
			<dt><code>event.data</code></dt>
			<dd>&#10551; </dd>
			<dt><code>event.delegateTarget</code></dt>
			<dd>&#10551; </dd>
			<dt><code>event.namespace</code></dt>
			<dd>&#10551; </dd>
			<dt><code>event.pageX</code></dt>
			<dd>&#10551; </dd>
			<dt><code>event.pageY</code></dt>
			<dd>&#10551; </dd>
			<dt><code>event.relatedTarget</code></dt>
			<dd>&#10551; </dd>
			<dt><code>event.result</code></dt>
			<dd>&#10551; </dd>
			<dt><code>event.target</code></dt>
			<dd>&#10551; </dd>
			<dt><code>event.timeStamp</code></dt>
			<dd>&#10551; </dd>
			<dt><code>event.type</code></dt>
			<dd>&#10551; </dd>
			<dt><code>event.which</code></dt>
			<dd>&#10551; </dd>
		</dl>
	</section>
	<section>
		<h4>jQuery Event Parameter Methods:</h4>
		<dl>
			<dt><code><var>event</var>.isDefaultPrevented()</code></dt>
			<dd>&#10551; </dd>
			<dt><code><var>event</var>.isImmediatePropagationStopped()</code></dt>
			<dd>&#10551; </dd>
			<dt><code><var>event</var>.isPropagationStopped()</code></dt>
			<dd>&#10551; </dd>
			<dt><code><var>event</var>.preventDefault()</code></dt>
			<dd>&#10551; </dd>
			<dt><code><var>event</var>.stopImmediatePropagation()</code></dt>
			<dd>&#10551; </dd>
			<dt><code><var>event</var>.stopPropagation()</code></dt>
			<dd>&#10551; </dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
