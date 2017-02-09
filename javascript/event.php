<?php
	$PAGE_NAME = 'Event';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The Event object and its associated objects are dedicated to handling events, that is, things that occur in the web browser as a result of things like player scrolling, mouse clicks, and much more. Understanding events is fairly fundamental to making Javascript execute when you want it to, and in response to the various things that can happen.</p>
	</section>
	<section>
		<h4>Event Object</h4>
		<details>
			<summary><h4>Event Constants:</h4></summary>
			<dl>
				<dt><code>0</code></dt>
				<dd>NONE; No event is occurring.</dd>
				<dt><code>1</code></dt>
				<dd>CAPTURING_PHASE; The event has just been captured by the browser.</dd>
				<dt><code>2</code></dt>
				<dd>AT_TARGET; The event is being considered in the context of its immediate target, such as the element it occurred over.</dd>
				<dt><code>3</code></dt>
				<dd>BUBBLING_PHASE; The event is being considered in the context of other elements associated with the initial target, such as parents.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Event Properties:</h4></summary>
			<p>Each event stores information about its current and beginning states in the form of properties.</p>
			<dl>
				<dt><code>bubbles</code></dt>
				<dd>Returns <code>true</code> if the event is a bubbling event (one that can be transmitted between related elements), or <code>false</code> if it isn't.</dd>
				<dt><code>cancelable</code></dt>
				<dd>Returns <code>true</code> if the event can have its default action (such as a click on a button) prevented, or <code>false</code> if it cannot.</dd>
				<dt><code>currentTarget</code></dt>
				<dd>Returns the element which has the event listener that captured the event.</dd>
				<dt><code>defaultPrevented</code></dt>
				<dd>Returns <code>true</code> if the <code>preventDefault()</code> method was called for the event, otherwise, returns <code>false</code>.</dd>
				<dt><code>eventPhase</code></dt>
				<dd>Returns one of the event constants listed above, representing what phase of the event is currently occurring.</dd>
				<dt><code>isTrusted</code></dt>
				<dd>Returns <code>true</code> if the event is considered trusted, and <code>false</code> if it is not. In most browsers, events are trusted when initiated by user input, and not when initiated by a script. In Internet Explorer, all events are trusted except when created by the <code>createEvent</code> method.</dd>
				<dt><code>target</code></dt>
				<dd>Returns the element that triggered the event.</dd>
				<dt><code>timeStamp</code></dt>
				<dd>Returns the number of milliseconds since 'zero time' (midnight on 01/01/1970) when the event occurred.</dd>
				<dt><code>type</code></dt>
				<dd>Returns the type of event (any of the events listed on this page, without the 'on' prefix).</dd>
				<dt><code>view</code></dt>
				<dd>Returns the window object where the event occurred.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Event Methods:</h4></summary>
			<p>Event methods can be used to shape the behavior of events, disabling or force-enabling default behavior.</p>
			<dl>
				<dt><code>preventDefault()</code></dt>
				<dd>Prevents the normal default action associated with the event on this target, if it's possible to do so.</dd>
				<dt><code>stopImmediatePropagation()</code></dt>
				<dd>Only allows the first associated event listener to respond to this event.</dd>
				<dt><code>stopPropagation()</code></dt>
				<dd>Prevents bubbling from occurring, so that only the event listener(s) most closely associated with the target respond to this event.</dd>
			</dl>
		</details>
	</section>
	<section>
		<h4>Event Sub-objects</h4>
		<details>
			<summary><h4>AnimationEvent Properties:</h4></summary>
			<dl>
				<dt><code>animationName</code></dt>
				<dd>Returns the name of the animation.</dd>
				<dt><code>elapsedTime</code></dt>
				<dd>Returns the number of seconds the animation has been playing for.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>FocusEvent Properties:</h4></summary>
			<dl>
				<dt><code>relatedTarget</code></dt>
				<dd>Returns the second element associated with <code>focus</code>, <code>focusin</code>, <code>blur</code>, and <code>focusout</code> events; for the former two, it's the element that was focused previously, for the latter two, it's the element that has focus now.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>HashChangeEvent Properties:</h4></summary>
			<dl>
				<dt><code>newURL</code></dt>
				<dd>Returns the new URL after the event was triggered.</dd>
				<dt><code>oldURL</code></dt>
				<dd>Returns the old URL before the event was triggered.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>KeyboardEvent Properties:</h4></summary>
			<dl>
				<dt><code>altKey</code></dt>
				<dd>Returns <code>true</code> if the Alt key was held when this event occured, otherwise, returns <code>false</code>.</dd>
				<dt><code>ctrlKey</code></dt>
				<dd>Returns <code>true</code> if the Ctrl key was held when this event occured, otherwise, returns <code>false</code>.</dd>
				<dt><code>charCode</code></dt>
				<dd>Returns the Unicode character code of the key that triggered a <code>keypress</code> event.</dd>
				<dt><code>key</code></dt>
				<dd>Returns the name of the key that was pressed when the event occurred.</dd>
				<dt><code>keyCode</code></dt>
				<dd>Returns the Unicode key code of the key that triggered a <code>keypress</code>, <code>keydown</code>, or <code>keyup</code> event.</dd>
				<dt><code>location</code></dt>
				<dd>Returns a number representing the specific key group the pressed key belongs to, for <code>keydown</code> and <code>keyup</code> events: <code>0</code> for standard keys, <code>1</code> for the left version of a key that has left and right versions, <code>2</code> for the right version of those keys, and <code>3</code> for NumPad keys.</dd>
				<dt><code>metaKey</code></dt>
				<dd>Returns <code>true</code> if the meta key was held when this event occured, otherwise, returns <code>false</code>. The meta key is not present on many keyboards, and is typically represented by the word 'meta', a &#9770;, or a &#8984;.</dd>
				<dt><code>shiftKey</code></dt>
				<dd>Returns <code>true</code> if the Shift key was held when this event occured, otherwise, returns <code>false</code>.</dd>
				<dt><code>which</code></dt>
				<dd>As <code>keyCode</code>, but returns the Unicode character code instead of the key code.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>MouseEvent Properties:</h4></summary>
			<dl>
				<dt><code>altKey</code></dt>
				<dd>Returns <code>true</code> if the Alt key was held when this event occured, otherwise, returns <code>false</code>.</dd>
				<dt><code>button</code></dt>
				<dd>Returns a number representing which mouse button was most recently pressed when the event occurred: <code>0</code> for left, <code>2</code> for right, and <code>1</code> for middle.</dd>
				<dt><code>buttons</code></dt>
				<dd>Returns a number representing which mouse buttons were pressed when the event occurred; if multiple buttons were pressed, it adds the representative numbers together for the return value. Because each composite value must be unique, the numbers are different from those used by <code>button</code>; <code>1</code> for left, <code>2</code> for right, <code>4</code> for middle, <code>8</code> for mouse 4 (usually Back), and <code>16</code> for mouse 5 (usually Forward).</dd>
				<dt><code>clientX</code></dt>
				<dd>Returns the horizontal pixel coordinate of the cursor when the event occurred, relative to the left edge of the window.</dd>
				<dt><code>clientY</code></dt>
				<dd>Returns the vertical pixel coordinate of the cursor when the event occurred, relative to the top edge of the window.</dd>
				<dt><code>ctrlKey</code></dt>
				<dd>Returns <code>true</code> if the Ctrl key was held when this event occured, otherwise, returns <code>false</code>.</dd>
				<dt><code>detail</code></dt>
				<dd>Returns a number indicating how many times the left mouse button was clicked within the event area, over a short period of time.</dd>
				<dt><code>metaKey</code></dt>
				<dd>Returns <code>true</code> if the meta key was held when this event occured, otherwise, returns <code>false</code>. The meta key is not present on many keyboards, and is typically represented by the word 'meta', a &#9770;, or a &#8984;.</dd>
				<dt><code>pageX</code></dt>
				<dd>Returns the horizontal pixel coordinate of the cursor when the event occurred, relative to the left edge of the document.</dd>
				<dt><code>pageY</code></dt>
				<dd>Returns the vertical pixel coordinate of the cursor when the event occurred, relative to the top edge of the document.</dd>
				<dt><code>relatedTarget</code></dt>
				<dd>Returns the second element associated with <code>mouseover</code> and <code>mouseout</code> events: the one the cursor was over previously, and the one it's entering now, respectively.</dd>
				<dt><code>screenX</code></dt>
				<dd>Returns the horizontal pixel coordinate of the cursor when the event occurred, relative to the left edge of the screen.</dd>
				<dt><code>screenY</code></dt>
				<dd>Returns the horizontal pixel coordinate of the cursor when the event occurred, relative to the left edge of the screen.</dd>
				<dt><code>shiftKey</code></dt>
				<dd>Returns <code>true</code> if the Shift key was held when this event occured, otherwise, returns <code>false</code>.</dd>
				<dt><code>which</code></dt>
				<dd>Similar to <code>button</code>, except that all button values are incremented by 1 and <code>0</code> now represents no button being pressed.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>PageTransitionEvent Properties:</h4></summary>
			<dl>
				<dt><code>persisted</code></dt>
				<dd>Returns <code>true</code> if the page was loaded from the browser cache, or <code>false</code> if it was not.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>TransitionEvent Properties:</h4></summary>
			<dl>
				<dt><code>propertyName</code></dt>
				<dd>Returns the name of the CSS property associated with the transition effect.</dd>
				<dt><code>elapsedTime</code></dt>
				<dd>Returns the number of seconds the transition effect has been playing for.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>WheelEvent Properties:</h4></summary>
			<dl>
				<dt><code>deltaX</code></dt>
				<dd>Returns the horizontal amount the mouse wheel scrolled.</dd>
				<dt><code>deltaY</code></dt>
				<dd>Returns the vertical amount the mouse wheel scrolled.</dd>
				<dt><code>deltaZ</code></dt>
				<dd>Returns the depth amount the mouse wheen scrolled on the Z axis.</dd>
				<dt><code>deltaMode</code></dt>
				<dd>Returns a number representing the measurement type of the other delta properties: <code>0</code> for pixels, <code>1</code> for lines, and <code>2</code> for pages.</dd>
			</dl>
		</details>
	</section>
	<section>
		<h4>Events</h4>
		<details>
			<summary><h4>Animation Events:</h4></summary>
			<dl>
				<dt><code>animationend</code></dt>
				<dd>A CSS animation has completed.</dd>
				<dt><code>animationiteration</code></dt>
				<dd>A CSS animation is repeated.</dd>
				<dt><code>animationstart</code></dt>
				<dd>A CSS animation has begun.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Clipboard Events:</h4></summary>
			<dl>
				<dt><code>oncopy</code></dt>
				<dd>The user has copied the content of the element to their clipboard.</dd>
				<dt><code>oncut</code></dt>
				<dd>The user has cut the content of the element to their clipboard.</dd>
				<dt><code>onpaste</code></dt>
				<dd>The user has pasted the content of their clipboard to the element.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Drag Events:</h4></summary>
			<dl>
				<dt><code>ondrag</code></dt>
				<dd>The user is currently dragging the element.</dd>
				<dt><code>ondragend</code></dt>
				<dd>The user has stopped dragging the element.</dd>
				<dt><code>ondragenter</code></dt>
				<dd>The user has dragged the element onto a drop target.</dd>
				<dt><code>ondragleave</code></dt>
				<dd>The user has dragged the element off of a drop target.</dd>
				<dt><code>ondragover</code></dt>
				<dd>The user is currently dragging the element over a drop target.</dd>
				<dt><code>ondragstart</code></dt>
				<dd>The user has begun to drag the element.</dd>
				<dt><code>ondrop</code></dt>
				<dd>The user has dropped the dragged element onto a drop target.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Form Events:</h4></summary>
			<dl>
				<dt><code>onblur</code></dt>
				<dd>The element is no longer focused.</dd>
				<dt><code>onchange</code></dt>
				<dd>The content of a form element (<code>&lt;input&gt;</code>, <code>&lt;keygen&gt;</code>, <code>&lt;select&gt;</code>, and <code>&lt;textarea&gt;</code>), the selection, or the checked state has changed.</dd>
				<dt><code>onfocus</code></dt>
				<dd>The element is now focused.</dd>
				<dt><code>onfocusin</code></dt>
				<dd>The element is about to get focused.</dd>
				<dt><code>onfocusout</code></dt>
				<dd>The element is about to lose focus.</dd>
				<dt><code>oninput</code></dt>
				<dd>The form element has received user input.</dd>
				<dt><code>oninvalid</code></dt>
				<dd>The user input in the form element is invalid according to its attributes.</dd>
				<dt><code>onreset</code></dt>
				<dd>The form has been reset.</dd>
				<dt><code>onsearch</code></dt>
				<dd>The user has written something in a search field.</dd>
				<dt><code>onselect</code></dt>
				<dd>The user has selected some text in an <code>&lt;input&gt;</code> or <code>&lt;textarea&gt;</code> element.</dd>
				<dt><code>onsubmit</code></dt>
				<dd>The form has been submitted.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Frame/Object Events:</h4></summary>
			<dl>
				<dt><code>onabort</code></dt>
				<dd>The loading process was aborted.</dd>
				<dt><code>onbeforeunload</code></dt>
				<dd>The document is about to be unloaded.</dd>
				<dt><code>onerror</code></dt>
				<dd>An error occurred while loading a resource.</dd>
				<dt><code>onhashchange</code></dt>
				<dd>A change has occurred in the anchor part of the URL (in the user's web browser).</dd>
				<dt><code>onload</code></dt>
				<dd>The object has loaded.</dd>
				<dt><code>onpageshow</code></dt>
				<dd>The user has navigated to the webpage.</dd>
				<dt><code>onpagehide</code></dt>
				<dd>The user has navigated away from the webpage.</dd>
				<dt><code>onresize</code></dt>
				<dd>The viewport has been resized.</dd>
				<dt><code>onscroll</code></dt>
				<dd>The viewport has been scrolled.</dd>
				<dt><code>onunload</code></dt>
				<dd>The document has been unloaded.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Keyboard Events:</h4></summary>
			<dl>
				<dt><code>onkeydown</code></dt>
				<dd>The user pressed down a key.</dd>
				<dt><code>onkeypress</code></dt>
				<dd>The user pressed down a key then released it; however, this does not include ALT, CTRL, SHIFT, or ESC.</dd>
				<dt><code>onkeyup</code></dt>
				<dd>The user released a key that was held down.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Media Events:</h4></summary>
			<dl>
				<dt><code>onabort</code></dt>
				<dd>The loading of the media has been aborted.</dd>
				<dt><code>oncanplay</code></dt>
				<dd>The media has buffered/loaded enough to start playing.</dd>
				<dt><code>oncanplaythrough</code></dt>
				<dd>The media can be played through without any further waits for buffering.</dd>
				<dt><code>ondurationchange</code></dt>
				<dd>The duration of the media has changed.</dd>
				<dt><code>onemptied</code></dt>
				<dd>The media has become suddenly unavailable</dd>
				<dt><code>onended</code></dt>
				<dd>The media has reached its end.</dd>
				<dt><code>onerror</code></dt>
				<dd>An error occurred as the media was loading.</dd>
				<dt><code>onloadeddata</code></dt>
				<dd>The media data has been loaded.</dd>
				<dt><code>onloadedmetadata</code></dt>
				<dd>The media's metadata has been loaded.</dd>
				<dt><code>onloadstart</code></dt>
				<dd>The loading phase has started and the browser is attempting to find the media file.</dd>
				<dt><code>onpause</code></dt>
				<dd>The media was paused, either automatically or by the user.</dd>
				<dt><code>onplay</code></dt>
				<dd>The media has started playing or is not paused.</dd>
				<dt><code>onplaying</code></dt>
				<dd>The media has begun playing again after buffering or being unpaused.</dd>
				<dt><code>onprogress</code></dt>
				<dd>The browser has found the media and begun receiving it.</dd>
				<dt><code>onratechange</code></dt>
				<dd>The media's play speed has been changed.</dd>
				<dt><code>onseeked</code></dt>
				<dd>The user has finished skipping to a different place in the media.</dd>
				<dt><code>onseeking</code></dt>
				<dd>The user has started skipping to a different place in the media.</dd>
				<dt><code>onstalled</code></dt>
				<dd>The browser is trying to get media data, but is unable to.</dd>
				<dt><code>onsuspend</code></dt>
				<dd>The browser has intentionally halted the loading process while getting media data.</dd>
				<dt><code>ontimeupdate</code></dt>
				<dd>The playing position within the media has changed (such as by the user skipping to a different point).</dd>
				<dt><code>onvolumechange</code></dt>
				<dd>The media's volume has been changed or muted.</dd>
				<dt><code>onwaiting</code></dt>
				<dd>The media is paused non-indefinitely, such as by waiting for buffering.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Misc Events:</h4></summary>
			<dl>
				<dt><code>onmessage</code></dt>
				<dd>A message was received through or from an object. This can be via Event Source, WebSocket, Web Worker, a child frame, or a parent window of the above.</dd>
				<dt><code>ononline</code></dt>
				<dd>The browser has started to work online.</dd>
				<dt><code>onoffline</code></dt>
				<dd>The browser has started to work offline.</dd>
				<dt><code>onpopstate</code></dt>
				<dd>The window's history has changed.</dd>
				<dt><code>onshow</code></dt>
				<dd>A <code>&lt;menu&gt;</code> element has been shown as a context menu. Note: this event is currently Firefox-exclusive, as no other browser uses the <code>&lt;menu&gt;</code> element yet.</dd>
				<dt><code>onstorage</code></dt>
				<dd>A Web Storage area has been updated.</dd>
				<dt><code>ontoggle</code></dt>
				<dd>A <code>&lt;details&gt;</code> element has been opened or closed.</dd>
				<dt><code>onwheel</code></dt>
				<dd>The user's mouse wheel has rolled up or down while over the element.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Mouse Events:</h4></summary>
			<dl>
				<dt><code>onclick</code></dt>
				<dd>The user clicked the element.</dd>
				<dt><code>oncontextmenu</code></dt>
				<dd>The user right-clicked the element, opening a context menu.</dd>
				<dt><code>ondblclick</code></dt>
				<dd>The user double-clicked the element. Note that for obvious reasons, it is impossible for the <code>dblclick</code> event to occur without a <code>click</code> event too.</dd>
				<dt><code>onmousedown</code></dt>
				<dd>The user pressed a mouse button down with the cursor over the element.</dd>
				<dt><code>onmouseenter</code></dt>
				<dd>The user moved the cursor onto the element.</dd>
				<dt><code>onmouseleave</code></dt>
				<dd>The user moved the cursor off of the element.</dd>
				<dt><code>onmousemove</code></dt>
				<dd>The user moved the cursor while over the element.</dd>
				<dt><code>onmouseover</code></dt>
				<dd>The user moved the cursor onto the element <em>or</em> one of its children.</dd>
				<dt><code>onmouseout</code></dt>
				<dd>The user moved the cursor off of the element or one of its children.</dd>
				<dt><code>onmouseup</code></dt>
				<dd>The user released a mouse button that was held down with the cursor over the element.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Print Events:</h4></summary>
			<dl>
				<dt><code>onafterprint</code></dt>
				<dd>Either the page has started printing, or the print dialogue box has been closed.</dd>
				<dt><code>onbeforeprint</code></dt>
				<dd>The page is about to be printed.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Server-Sent Events:</h4></summary>
			<dl>
				<dt><code>onerror</code></dt>
				<dd>An error has occurred with the event source.</dd>
				<dt><code>onmessage</code></dt>
				<dd>A message was received through the event source.</dd>
				<dt><code>onopen</code></dt>
				<dd>A connection with the event source was opened.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Touch Events:</h4></summary>
			<dl>
				<dt><code>ontouchcancel</code></dt>
				<dd>The touch was interrupted.</dd>
				<dt><code>ontouchend</code></dt>
				<dd>The user's finger was removed from the touch screen.</dd>
				<dt><code>ontouchmove</code></dt>
				<dd>The user's finger was dragged across the screen.</dd>
				<dt><code>ontouchstart</code></dt>
				<dd>The user's finger has begun touching the touch screen.</dd>
			</dl>
		</details>
		<details>
			<summary><h4>Transition Events:</h4></summary>
			<dl>
				<dt><code>transitionend</code></dt>
				<dd>A CSS transition has completed.</dd>
			</dl>
		</details>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
