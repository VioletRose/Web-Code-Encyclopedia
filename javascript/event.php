<?php
	$PAGE_NAME = 'Event';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Event objects are dedicated to handling events, that is, things that occur in the web browser as a result of things like player scrolling, mouse clicks, and much more. Understanding events is fairly fundamental to making Javascript execute when you want it to, and in response to the various things that can happen. The first section of this page is dedicated to </p>
	</section>
	<section>
		<details>
			<summary>Event Type Constants:</summary>
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
			<summary>Event Type Properties:</summary>
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
			<summary>Event Type Methods:</summary>
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
		<h4>Event Subtypes</h4>
		<p>Events of these types have both these properties/methods and standard event properties/methods.</p>
		<details>
			<summary>AnimationEvent Type Properties:</summary>
			<dl>
				<dt><code>animationName</code></dt>
				<dd>Returns the name of the animation.</dd>
				<dt><code>elapsedTime</code></dt>
				<dd>Returns the number of seconds the animation has been playing for.</dd>
			</dl>
		</details>
		<details>
			<summary>FocusEvent Subtype Properties:</summary>
			<dl>
				<dt><code>relatedTarget</code></dt>
				<dd>Returns the second element associated with <code>focus</code>, <code>focusin</code>, <code>blur</code>, and <code>focusout</code> events; for the former two, it's the element that was focused previously, for the latter two, it's the element that has focus now.</dd>
			</dl>
		</details>
		<details>
			<summary>HashChangeEvent Subtype Properties:</summary>
			<dl>
				<dt><code>newURL</code></dt>
				<dd>Returns the new URL after the event was triggered.</dd>
				<dt><code>oldURL</code></dt>
				<dd>Returns the old URL before the event was triggered.</dd>
			</dl>
		</details>
		<details>
			<summary>KeyboardEvent Subtype Properties:</summary>
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
			<summary>MouseEvent Subtype Properties:</summary>
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
			<summary>PageTransitionEvent Subtype Properties:</summary>
			<dl>
				<dt><code>persisted</code></dt>
				<dd>Returns <code>true</code> if the page was loaded from the browser cache, or <code>false</code> if it was not.</dd>
			</dl>
		</details>
		<details>
			<summary>TouchEvent Subtype Properties:</summary>
			<dl>
				<dt><code>altKey</code></dt>
				<dd>Returns <code>true</code> if the Alt key was held when this event occured, otherwise, returns <code>false</code>.</dd>
				<dt><code>changedTouches</code></dt>
				<dd>Returns a TouchList object containing entries for all touches currently in contact with the touch surface and that had any changes since the last touch event.</dd>
				<dt><code>ctrlKey</code></dt>
				<dd>Returns <code>true</code> if the Ctrl key was held when this event occured, otherwise, returns <code>false</code>.</dd>
				<dt><code>metaKey</code></dt>
				<dd>Returns <code>true</code> if the meta key was held when this event occured, otherwise, returns <code>false</code>. The meta key is not present on many keyboards, and is typically represented by the word 'meta', a &#9770;, or a &#8984;.</dd>
				<dt><code>shiftKey</code></dt>
				<dd>Returns <code>true</code> if the Shift key was held when this event occured, otherwise, returns <code>false</code>.</dd>
				<dt><code>targetTouches</code></dt>
				<dd>Returns a TouchList object containing entries for all touches currently in contact with the touch surface and that were also started on the same element as the current event.</dd>
				<dt><code>touches</code></dt>
				<dd>Returns a TouchList object containing entries for all touches currently in contact with the touch surface.</dd>
			</dl>
		</details>
		<details>
			<summary>TransitionEvent Subtype Properties:</summary>
			<dl>
				<dt><code>propertyName</code></dt>
				<dd>Returns the name of the CSS property associated with the transition effect.</dd>
				<dt><code>elapsedTime</code></dt>
				<dd>Returns the number of seconds the transition effect has been playing for.</dd>
			</dl>
		</details>
		<details>
			<summary>WheelEvent Subtype Properties:</summary>
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
		<h4>Touch-Related Objects</h4>
		<details>
			<summary>TouchList Type Properties</summary>
			<dl>
				<dt><code>length</code></dt>
				<dd>Returns the number of entries on the list.</dd>
			</dl>
		</details>
		<details>
			<summary>TouchList Type Methods</summary>
			<dl>
				<dt><code>item()</code></dt>
				<dd>Accepts an index number in its argument, and returns a Touch object containing the data for the touch at that point in the list.</dd>
			</dl>
		</details>
		<details>
			<summary>Touch Type Properties</summary>
			<dl>
				<dt><code>clientX</code></dt>
				<dd>Returns the horizontal pixel coordinate of the touch point when the event occurred, relative to the left edge of the window.</dd>
				<dt><code>clientY</code></dt>
				<dd>Returns the vertical pixel coordinate of the touch point when the event occurred, relative to the top edge of the window.</dd>
				<dt><code>identifier</code></dt>
				<dd>Returns a unique identifier for this touch that cannot change between events, allowing the same touch to be reliably identified regardless of its current position.</dd>
				<dt><code>pageX</code></dt>
				<dd>Returns the horizontal pixel coordinate of the touch point when the event occurred, relative to the left edge of the document.</dd>
				<dt><code>pageY</code></dt>
				<dd>Returns the vertical pixel coordinate of the touch point when the event occurred, relative to the top edge of the document.</dd>
				<dt><code>screenX</code></dt>
				<dd>Returns the horizontal pixel coordinate of the touch point when the event occurred, relative to the left edge of the screen.</dd>
				<dt><code>screenY</code></dt>
				<dd>Returns the horizontal pixel coordinate of the touch point when the event occurred, relative to the left edge of the screen.</dd>
				<dt><code>target</code></dt>
				<dd>Returns the element the touch point was first created on, even if the touch point has since moved away from it or left the document entirely.</dd>
			</dl>
		</details>
	</section>	
	<section>
		<h4>Events</h4>
		<details>
			<summary>Animation Events:</summary>
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
			<summary>Clipboard Events:</summary>
			<dl>
				<dt><code>copy</code></dt>
				<dd>The user has copied the content of the element to their clipboard.</dd>
				<dt><code>cut</code></dt>
				<dd>The user has cut the content of the element to their clipboard.</dd>
				<dt><code>paste</code></dt>
				<dd>The user has pasted the content of their clipboard to the element.</dd>
			</dl>
		</details>
		<details>
			<summary>Drag Events:</summary>
			<dl>
				<dt><code>drag</code></dt>
				<dd>The user is currently dragging the element.</dd>
				<dt><code>dragend</code></dt>
				<dd>The user has stopped dragging the element.</dd>
				<dt><code>dragenter</code></dt>
				<dd>The user has dragged the element onto a drop target.</dd>
				<dt><code>dragleave</code></dt>
				<dd>The user has dragged the element off of a drop target.</dd>
				<dt><code>dragover</code></dt>
				<dd>The user is currently dragging the element over a drop target.</dd>
				<dt><code>dragstart</code></dt>
				<dd>The user has begun to drag the element.</dd>
				<dt><code>drop</code></dt>
				<dd>The user has dropped the dragged element onto a drop target.</dd>
			</dl>
		</details>
		<details>
			<summary>Form Events:</summary>
			<dl>
				<dt><code>blur</code></dt>
				<dd>The element is no longer focused.</dd>
				<dt><code>change</code></dt>
				<dd>The content of a form element (<code>&lt;input&gt;</code>, <code>&lt;keygen&gt;</code>, <code>&lt;select&gt;</code>, and <code>&lt;textarea&gt;</code>), the selection, or the checked state has changed.</dd>
				<dt><code>focus</code></dt>
				<dd>The element is now focused.</dd>
				<dt><code>focusin</code></dt>
				<dd>The element is about to get focused.</dd>
				<dt><code>focusout</code></dt>
				<dd>The element is about to lose focus.</dd>
				<dt><code>input</code></dt>
				<dd>The form element has received user input.</dd>
				<dt><code>invalid</code></dt>
				<dd>The user input in the form element is invalid according to its attributes.</dd>
				<dt><code>reset</code></dt>
				<dd>The form has been reset.</dd>
				<dt><code>search</code></dt>
				<dd>The user has written something in a search field.</dd>
				<dt><code>select</code></dt>
				<dd>The user has selected some text in an <code>&lt;input&gt;</code> or <code>&lt;textarea&gt;</code> element.</dd>
				<dt><code>submit</code></dt>
				<dd>The form has been submitted.</dd>
			</dl>
		</details>
		<details>
			<summary>Frame/Object Events:</summary>
			<dl>
				<dt><code>abort</code></dt>
				<dd>The loading process was aborted.</dd>
				<dt><code>beforeunload</code></dt>
				<dd>The document is about to be unloaded.</dd>
				<dt><code>error</code></dt>
				<dd>An error occurred while loading a resource.</dd>
				<dt><code>hashchange</code></dt>
				<dd>A change has occurred in the anchor part of the URL (in the user's web browser).</dd>
				<dt><code>load</code></dt>
				<dd>The object has loaded.</dd>
				<dt><code>pageshow</code></dt>
				<dd>The user has navigated to the webpage.</dd>
				<dt><code>pagehide</code></dt>
				<dd>The user has navigated away from the webpage.</dd>
				<dt><code>resize</code></dt>
				<dd>The viewport has been resized.</dd>
				<dt><code>scroll</code></dt>
				<dd>The viewport has been scrolled.</dd>
				<dt><code>unload</code></dt>
				<dd>The document has been unloaded.</dd>
			</dl>
		</details>
		<details>
			<summary>Keyboard Events:</summary>
			<dl>
				<dt><code>keydown</code></dt>
				<dd>The user pressed down a key.</dd>
				<dt><code>keypress</code></dt>
				<dd>The user pressed down a key then released it; however, this does not include ALT, CTRL, SHIFT, or ESC.</dd>
				<dt><code>keyup</code></dt>
				<dd>The user released a key that was held down.</dd>
			</dl>
		</details>
		<details>
			<summary>Media Events:</summary>
			<dl>
				<dt><code>abort</code></dt>
				<dd>The loading of the media has been aborted.</dd>
				<dt><code>canplay</code></dt>
				<dd>The media has buffered/loaded enough to start playing.</dd>
				<dt><code>canplaythrough</code></dt>
				<dd>The media can be played through without any further waits for buffering.</dd>
				<dt><code>durationchange</code></dt>
				<dd>The duration of the media has changed.</dd>
				<dt><code>emptied</code></dt>
				<dd>The media has become suddenly unavailable</dd>
				<dt><code>ended</code></dt>
				<dd>The media has reached its end.</dd>
				<dt><code>error</code></dt>
				<dd>An error occurred as the media was loading.</dd>
				<dt><code>loadeddata</code></dt>
				<dd>The media data has been loaded.</dd>
				<dt><code>loadedmetadata</code></dt>
				<dd>The media's metadata has been loaded.</dd>
				<dt><code>loadstart</code></dt>
				<dd>The loading phase has started and the browser is attempting to find the media file.</dd>
				<dt><code>pause</code></dt>
				<dd>The media was paused, either automatically or by the user.</dd>
				<dt><code>play</code></dt>
				<dd>The media has started playing or is not paused.</dd>
				<dt><code>playing</code></dt>
				<dd>The media has begun playing again after buffering or being unpaused.</dd>
				<dt><code>progress</code></dt>
				<dd>The browser has found the media and begun receiving it.</dd>
				<dt><code>ratechange</code></dt>
				<dd>The media's play speed has been changed.</dd>
				<dt><code>seeked</code></dt>
				<dd>The user has finished skipping to a different place in the media.</dd>
				<dt><code>seeking</code></dt>
				<dd>The user has started skipping to a different place in the media.</dd>
				<dt><code>stalled</code></dt>
				<dd>The browser is trying to get media data, but is unable to.</dd>
				<dt><code>suspend</code></dt>
				<dd>The browser has intentionally halted the loading process while getting media data.</dd>
				<dt><code>timeupdate</code></dt>
				<dd>The playing position within the media has changed (such as by the user skipping to a different point).</dd>
				<dt><code>volumechange</code></dt>
				<dd>The media's volume has been changed or muted.</dd>
				<dt><code>waiting</code></dt>
				<dd>The media is paused non-indefinitely, such as by waiting for buffering.</dd>
			</dl>
		</details>
		<details>
			<summary>Misc Events:</summary>
			<dl>
				<dt><code>message</code></dt>
				<dd>A message was received through or from an object. This can be via Event Source, WebSocket, Web Worker, a child frame, or a parent window of the above.</dd>
				<dt><code>online</code></dt>
				<dd>The browser has started to work online.</dd>
				<dt><code>offline</code></dt>
				<dd>The browser has started to work offline.</dd>
				<dt><code>popstate</code></dt>
				<dd>The window's history has changed.</dd>
				<dt><code>show</code></dt>
				<dd>A <code>&lt;menu&gt;</code> element has been shown as a context menu. Note: this event is currently Firefox-exclusive, as no other browser uses the <code>&lt;menu&gt;</code> element yet.</dd>
				<dt><code>storage</code></dt>
				<dd>A Web Storage area has been updated.</dd>
				<dt><code>toggle</code></dt>
				<dd>A <code>&lt;details&gt;</code> element has been opened or closed.</dd>
				<dt><code>wheel</code></dt>
				<dd>The user's mouse wheel has rolled up or down while over the element.</dd>
			</dl>
		</details>
		<details>
			<summary>Mouse Events:</summary>
			<dl>
				<dt><code>click</code></dt>
				<dd>The user clicked the element.</dd>
				<dt><code>contextmenu</code></dt>
				<dd>The user right-clicked the element, opening a context menu.</dd>
				<dt><code>dblclick</code></dt>
				<dd>The user double-clicked the element. Note that for obvious reasons, it is impossible for the <code>dblclick</code> event to occur without a <code>click</code> event too.</dd>
				<dt><code>mousedown</code></dt>
				<dd>The user pressed a mouse button down with the cursor over the element.</dd>
				<dt><code>mouseenter</code></dt>
				<dd>The user moved the cursor onto the element.</dd>
				<dt><code>mouseleave</code></dt>
				<dd>The user moved the cursor off of the element.</dd>
				<dt><code>mousemove</code></dt>
				<dd>The user moved the cursor while over the element.</dd>
				<dt><code>mouseover</code></dt>
				<dd>The user moved the cursor onto the element <em>or</em> one of its children.</dd>
				<dt><code>mouseout</code></dt>
				<dd>The user moved the cursor off of the element or one of its children.</dd>
				<dt><code>mouseup</code></dt>
				<dd>The user released a mouse button that was held down with the cursor over the element.</dd>
			</dl>
		</details>
		<details>
			<summary>Print Events:</summary>
			<dl>
				<dt><code>afterprint</code></dt>
				<dd>Either the page has started printing, or the print dialogue box has been closed.</dd>
				<dt><code>beforeprint</code></dt>
				<dd>The page is about to be printed.</dd>
			</dl>
		</details>
		<details>
			<summary>Server-Sent Events:</summary>
			<dl>
				<dt><code>error</code></dt>
				<dd>An error has occurred with the event source.</dd>
				<dt><code>message</code></dt>
				<dd>A message was received through the event source.</dd>
				<dt><code>open</code></dt>
				<dd>A connection with the event source was opened.</dd>
			</dl>
		</details>
		<details>
			<summary>Touch Events:</summary>
			<dl>
				<dt><code>touchcancel</code></dt>
				<dd>The touch was interrupted.</dd>
				<dt><code>touchend</code></dt>
				<dd>The user's finger was removed from the touch screen.</dd>
				<dt><code>touchmove</code></dt>
				<dd>The user's finger was dragged across the screen.</dd>
				<dt><code>touchstart</code></dt>
				<dd>The user's finger has begun touching the touch screen.</dd>
			</dl>
		</details>
		<details>
			<summary>Transition Events:</summary>
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
