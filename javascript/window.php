<?php
	$PAGE_NAME = 'Window';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The Window object represents an open browser window, and its properties and methods are aimed at storing information about the browser window's current condition, as well as controlling it in a number of ways. Note that tabs have no effect on this object - any page upon which Javascript is running will assume Window is the window they are in.</p>
	</section>
	<section>
		<h4>Window Properties:</h4>
		<p></p>
		<dl>
			<dt><code>closed</code></dt>
			<dd>A boolean returning <code>true</code> if the window has been closed, otherwise <code>false</code>. This is only really applicable for windows opened with <code>window.open()</code>.</dd>
			<dt><code>document</code></dt>
			<dd>The Document object for the window.</dd>
			<dt><code>frameElement</code></dt>
			<dd>The <code>&lt;iframe&gt;</code> element containing the current window, if applicable.</dd>
			<dt><code>frames</code></dt>
			<dd>An array-like list of all the <code>&lt;iframe&gt;</code> elements in the window.</dd>
			<dt><code>history</code></dt>
			<dd>The History object associated with the window.</dd>
			<dt><code>innerHeight</code></dt>
			<dd>A number representing the inner height of the window in pixels, not including toolbars and scrollbars.</dd>
			<dt><code>innerWidth</code></dt>
			<dd>A number representing the inner width of the window in pixels, not including toolbars and scrollbars.</dd>
			<dt><code>length</code></dt>
			<dd>A number representing the number of <code>&lt;iframe&gt;</code> elements in the window.</dd>
			<dt><code>localStorage</code></dt>
			<dd>The local storage object associated with the window.</dd>
			<dt><code>location</code></dt>
			<dd>The Location object for the window.</dd>
			<dt><code>name</code></dt>
			<dd>The name of the window; note that is normally unset and returns an empty string, but setting it can be useful for some cross-window scripts.</dd>
			<dt><code>navigator</code></dt>
			<dd>The Navigator object for the window.</dd>
			<dt><code>opener</code></dt>
			<dd>A reference to the window which created this window, if applicable.</dd>
			<dt><code>outerHeight</code></dt>
			<dd>A number representing the outer height of the window in pixels, including toolbars and scrollbars.</dd>
			<dt><code>outerWidth</code></dt>
			<dd>A number representing the outer width of the window in pixels, including toolbars and scrollbars.</dd>
			<dt><code>pageXOffset</code></dt>
			<dd>The number of pixels the window has currently been horizontally scrolled from its left edge.</dd>
			<dt><code>pageYOffset</code></dt>
			<dd>The number of pixels the window has currently been vertically scrolled from its top edge.</dd>
			<dt><code>parent</code></dt>
			<dd>The parent window of the current window, if applicable.</dd>
			<dt><code>screen</code></dt>
			<dd>The Screen object for the window.</dd>
			<dt><code>screenLeft</code></dt>
			<dd>The horizontal coordinate of the window's left edge relative to the screen's left edge.</dd>
			<dt><code>screenTop</code></dt>
			<dd>The vertical coordinate of the window's top edge relative to the screen's top edge.</dd>
			<dt><code>screenX</code></dt>
			<dd>The horizontal coordinate of the window's left edge relative to the screen's left edge.</dd>
			<dt><code>screenY</code></dt>
			<dd>The vertical coordinate of the window's top edge relative to the screen's top edge.</dd>
			<dt><code>sessionStorage</code></dt>
			<dd>The local storage object for the window dedicated to session-only storage.</dd>
			<dt><code>scrollX</code></dt>
			<dd>See <code>pageXOffset</code>.</dd>
			<dt><code>scrollY</code></dt>
			<dd>See <code>pageYOffset</code>.</dd>
			<dt><code>self</code></dt>
			<dd>The current window.</dd>
			<dt><code>status</code></dt>
			<dd>The text contents of the window's status bar.</dd>
			<dt><code>top</code></dt>
			<dd>The topmost, or original parent window, applicable when dealing with <code>&lt;iframe&gt;</code> elements, which each technically count as their own windows.</dd>
		</dl>
	</section>
	<section>
		<h4>Window Methods:</h4>
		<p></p>
		<dl>
			<dt><code>alert()</code></dt>
			<dd>Accepts a string in its argument, and pops up an alert on the user's screen containing that message. Since this takes focus from the current window and needs to be clicked away, this method should be used sparingly, if at all.</dd>
			<dt><code>atob()</code></dt>
			<dd>Accepts a string encoded in base-64, a type of encoding mostly useful for turning binary data into web-safe strings, and returns its decoded value.</dd>
			<dt><code>blur()</code></dt>
			<dd>Removes active focus from the current window.</dd>
			<dt><code>btoa()</code></dt>
			<dd>Accepts a string, and returns its value encoded in base-64.</dd>
			<dt><code>clearInterval()</code></dt>
			<dd>Accepts a global variable containing an interval, and stops the execution of that interval if it was running.</dd>
			<dt><code>clearTimeout()</code></dt>
			<dd>Accepts a global variable containing a timeout, and stops the execution of that timeout if it was running.</dd>
			<dt><code>close()</code></dt>
			<dd>Closes the current window or tab. This does not work in <code>&lt;iframe&gt;</code> elements, and modern browsers will sometimes ask permission from the user first.</dd>
			<dt><code>confirm()</code></dt>
			<dd>Accepts a string in its argument, and pops up a dialog box on the user's screen containing that message and buttons for OK and cancel. If the user clicks OK, returns <code>true</code>.</dd>
			<dt><code>focus()</code></dt>
			<dd>Gives active focus to the current window.</dd>
			<dt><code>getComputedStyle()</code></dt>
			<dd>Accepts an element (or pseudo-element) in its argument, and returns a CSS declaration block containing the properties the browser is assigning to that element.</dd>
			<dt><code>getSelection()</code></dt>
			<dd>Returns a Selection object containing the text range currently selected by the user.</dd>
			<dt><code>matchMedia()</code></dt>
			<dd>Accepts a CSS media query string in its argument, and returns a MediaQueryList object containing the results of that query string.</dd>
			<dt><code>moveBy()</code></dt>
			<dd>Accepts two numbers in its argument, which will be used as X and Y coordinate offsets to move the window that amount of distance.</dd>
			<dt><code>moveTo()</code></dt>
			<dd>Accepts two numbers in its argument, which will be used as X and Y target coordinates (relative to the full monitor size) to move the window to that location. Note that this will place the top left of the viewport at that location, which may result in the browser's title bar being above the top of the screen.</dd>
			<dt><code>open()</code></dt>
			<dd>
				&#10551; Opens a new window (some browsers may automatically open it in a new tab instead), and supports a larger than normal number of arguments.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code>"<var>URL</var>"</code></dt>
						<dd>Optional; the URL to be opened in the new window. If not provided, the new window will default to about:blank.</dd>
						<dt><code>name="<var>target</var>"</code></dt>
						<dd>Optional; the destination of the new window. <code>_blank</code> is a new window (or new tab with certain browser configurations, and is the default behavior. Other supported targets, mostly intended for dealing with <code>&lt;iframe&gt;</code> elements, nested or singular, are <code>_parent</code> to replace the parent frame, <code>_self</code> to replace the current frame, <code>_top</code> to replace the top level frame, or the assigned name of a specific window to replace that window.</dd>
						<dt><var>specs</var></dt>
						<dd>
							&#10551; Any of the following may be used to change aspects of the new window. If more than one is used, each must be separated by commas and no spaces.
							<details>
								<summary>Specs:</summary>
								<dl>
									<dt><code>height="<var>pixels</var>"</code></dt>
									<dd>The height of the new window, in pixels; cannot be less than <code>100</code>.</dd>
									<dt><code>left="<var>pixels</var>"</code></dt>
									<dd>The left position of the window, relative to the left edge of the screen; negative values are not allowed, i.e. it can be no further left than the leftmost side of the screen.</dd>
									<dt><code>menubar="<var>yes</var>|<var>no</var>|<var>0</var>|<var>1</var>"</code></dt>
									<dd>Whether or not the menu bar is displayed.</dd>
									<dt><code>scrollbars"<var>yes</var>|<var>no</var>|<var>0</var>|<var>1</var>"</code></dt>
									<dd>Whether or not scroll bars are displayed; only usable in IE, Firefox, and Opera.</dd>
									<dt><code>status="<var>yes</var>|<var>no</var>|<var>0</var>|<var>1</var>"</code></dt>
									<dd>Whether or not a status bar is added.</dd>
									<dt><code>titlebar="<var>yes</var>|<var>no</var>|<var>0</var>|<var>1</var>"</code></dt>
									<dd>Whether or not the title bar is displayed; this will not function unless this method is being called by an HTML application (other than a web browser) or a trusted dialog box.</dd>
									<dt><code>toolbar="<var>yes</var>|<var>no</var>|<var>0</var>|<var>1</var>"</code></dt>
									<dd>Whether or not the browser toolbar is displayed; only usable in IE and Firefox.</dd>
									<dt><code>top="<var>pixels</var>"</code></dt>
									<dd>The top position of the window, relative to the top of the screen; negative values are not allowed.</dd>
									<dt><code>width="<var>pixels</var>"</code></dt>
									<dd>The width of the new window, in pixels; cannot be less than <code>100</code>.</dd>
								</dl>
							</details>
						</dd>
						<dt><code>replace="<var>true</var>|<var>false</var>"</code></dt>
						<dd>Whether or not the new window (if opened into an existing frame) will replace the current document in that frame's history list, or create a new entry for the new document.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>print()</code></dt>
			<dd>Opens a Print dialog box, allowing the user to select printing options and either print or cancel.</dd>
			<dt><code>prompt()</code></dt>
			<dd>Accepts up to two strings in its argument and displays a dialog box asking for user input, with a text entry field and OK and Cancel buttons. The first string is the message displayed to the user, and the second, if present, serves as a default entry for the text entry box. This method ultimately returns the user's input if the OK button is pressed, or <code>null</code> if they cancel.</dd>
			<dt><code>resizeBy()</code></dt>
			<dd>Accepts two numbers in its argument, which will be used as X and Y pixel measurements to resize the window by; this size change takes effect on the right and bottom sides.</dd>
			<dt><code>resizeTo()</code></dt>
			<dd>Accepts two numbers in its argument, which will be used as X and Y pixel measurements to resize the window to.</dd>
			<dt><code>scrollBy()</code></dt>
			<dd>Accepts two numbers in its argument, which will be used as X and Y pixel measurements to scroll the window to.</dd>
			<dt><code>scrollTo()</code></dt>
			<dd>Accepts two numbers in its argument, which will be used as X and Y pixel coordinates to scroll the window to.</dd>
			<dt><code>setInterval()</code></dt>
			<dd>Accepts a function, a number in milliseconds (must be greater than 10), and any number of optional parameters which will be passed to the function as arguments. Runs the specified function repeatedly every time the interval's number of milliseconds has passed.</dd>
			<dt><code>setTimeout()</code></dt>
			<dd>Accepts a function, a number in milliseconds (must be greater than 10), and any number of optional parameters which will be passed to the function as arguments. Runs the specified function once after the timeout's number of milliseconds has passed.</dd>
			<dt><code>stop()</code></dt>
			<dd>Stops the window from loading.</dd>
		</dl>
	</section>
	<section>
		<h4>Selection Properties:</h4>
		<dl>
			<dt><code>anchorNode</code></dt>
			<dd>The DOM node in which the selection begins.</dd>
			<dt><code>anchorOffset</code></dt>
			<dd>A number representing how offset the start of the selection is from the beginning of the <code>anchorNode</code>. For text and comment nodes, each increment is one character, while for other node types, each increment is a child node.</dd>
			<dt><code>focusNode</code></dt>
			<dd>The DOM node in which the selection ends.</dd>
			<dt><code>focusOffset</code></dt>
			<dd>A number representing how offset the end of the selection is from the beginning of the <code>focusNode</code>. For text nodes, each increment is one character, while for element nodes, each increment is a child node.</dd>
			<dt><code>isCollapsed</code></dt>
			<dd>A boolean set to <code>true</code> if the selection's start and end points are in the same position, or <code>false</code> otherwise.</dd>
			<dt><code>rangeCount</code></dt>
			<dd>The number of ranges in the selection.</dd>
		</dl>
	</section>
	<section>
		<h4>Selection Methods:</h4>
		<p></p>
		<dl>
			<dt><code>getRangeAt()</code></dt>
			<dd>Accepts an index number in its argument, and returns the range within the selection at that index.</dd>
			<dt><code>collapse()</code></dt>
			<dd>Accepts a node and an offset in its argument, and reduces the selection to only that specific offset within that node.</dd>
			<dt><code>extend()</code></dt>
			<dd>Accepts a node and offset in its argument, and expands the selection forward or backward to encompass that offset within that node.</dd>
			<dt><code>collapseToStart()</code></dt>
			<dd>Reduces the selection to the starting point of the first range in the selection.</dd>
			<dt><code>collapseToEnd()</code></dt>
			<dd>Reduces the selection to the ending point of the last range in the selection.</dd>
			<dt><code>selectAllChildren()</code></dt>
			<dd>Accepts a node in its argument, and sets the selection to encompass all of that node's child nodes, replacing the previous selection.</dd>
			<dt><code>addRange()</code></dt>
			<dd>Accepts a Range object in its argument, and adds that range to the selection.</dd>
			<dt><code>removeRange()</code></dt>
			<dd>Accepts a Range object in its argument, and removes that range from the selection.</dd>
			<dt><code>removeAllRanges()</code></dt>
			<dd>Removes all ranges from the selection.</dd>
			<dt><code>deleteFromDocument()</code></dt>
			<dd>Removes all text currently within the selection from the document.</dd>
			<dt><code>toString()</code></dt>
			<dd>Returns the text currently within the selection as a single string.</dd>
			<dt><code>containsNode()</code></dt>
			<dd>Accepts a node and a boolean in its arguments, and checks whether or not that node is included in the selection; if the boolean is <code>true</code>, this method will return <code>true</code> even if that node is only partially selected, while if it is <code>false</code>, it will only return <code>true</code> if the entire node is selected. Otherwise, returns <code>false</code>.</dd>
		</dl>
	</section>
	<section>
		<h4>Range Properties:</h4>
		<dl>
			<dt><code>collapsed</code></dt>
			<dd>A boolean set to <code>true</code> if the selection's start and end points are in the same position, or <code>false</code> otherwise.</dd>
			<dt><code>commonAncestorContainer</code></dt>
			<dd>The first ancestor node which contains both the <code>startContainer</code> and <code>endContainer</code>.</dd>
			<dt><code>endContainer</code></dt>
			<dd>The node in which the range ends.</dd>
			<dt><code>endOffset</code></dt>
			<dd>A number representing how offset the end of the range is from the beginning of the <code>endContainer</code>. For text and comment nodes, each increment is one character, while for other node types, each increment is a child node.</dd>
			<dt><code>startContainer</code></dt>
			<dd>The node in which the range begins.</dd>
			<dt><code>startOffset</code></dt>
			<dd>A number representing how offset the beginning of the range is from the beginning of the <code>startContainer</code>. For text and comment nodes, each increment is one character, while for other node types, each increment is a child node.</dd>
		</dl>
	</section>
	<section>
		<h4>Range Methods:</h4>
		<dl>
			<dt><code>setStart()</code></dt>
			<dd>Accepts a node and an offset number in its arguments, which will replace the current values of <code>startContainer</code> and <code>startOffset</code>, respectively.</dd>
			<dt><code>setEnd()</code></dt>
			<dd>Accepts a node and an offset number in its arguments, which will replace the current values of <code>endContainer</code> and <code>endOffset</code>, respectively.</dd>
			<dt><code>setStartBefore()</code></dt>
			<dd>Accepts a node in its argument, and moves the beginning of the range to just before the target node.</dd>
			<dt><code>setStartAfter()</code></dt>
			<dd>Accepts a node in its argument, and moves the beginning of the range to just after the target node.</dd>
			<dt><code>setEndBefore()</code></dt>
			<dd>Accepts a node in its argument, and moves the end of the range to just before the target node.</dd>
			<dt><code>setEndAfter()</code></dt>
			<dd>Accepts a node in its argument, and moves the end of the range to just after the target node.</dd>
			<dt><code>selectNode()</code></dt>
			<dd>Accepts a node in its argument, and sets the range to encompass only the target node and its contents.</dd>
			<dt><code>selectNodeContents()</code></dt>
			<dd>Accepts a node in its argument, and sets the range to encompass only the target node's contents.</dd>
			<dt><code>collapse()</code></dt>
			<dd>Accepts an optional boolean value in its argument, and if the provided value is <code>true</code>, reduces the range to include only its starting position; if <code>false</code> or not provided, reduces the range to include only its end position.</dd>
			<dt><code>cloneContents()</code></dt>
			<dd>Returns a DocumentFragment containing copies of all the nodes within the range.</dd>
			<dt><code>deleteContents()</code></dt>
			<dd>Removes the nodes within the range from the document.</dd>
			<dt><code>extractContents()</code></dt>
			<dd>Removes the nodes within the range from the document and returns a DocumentFragment containing copies of all nodes within the range.</dd>
			<dt><code>insertNode()</code></dt>
			<dd>Accepts a node in its argument, and inserts that node into the document at the start of the range.</dd>
			<dt><code>surroundContents()</code></dt>
			<dd>Accepts a node in its argument, and moves the contents of the range to a point just after that node in the document. However, this method will fail if the range includes the beginning or end of a non-text node, but not its corresponding end or beginning.</dd>
			<dt><code>compareBoundaryPoints()</code></dt>
			<dd>Accepts a constant (to control the comparison behavior) and another range in its argument, and compares the current range against the targeted range to determine which appears first in the document; possible constant values are <code>Range.END_TO_END</code>, <code>Range.END_TO_START</code>, <code>Range.START_TO_END</code>, and <code>Range.START_TO_START</code>, controlling whether the two ranges are compared from their start or end points. The method returns <code>-1<code> if the other range's targeted point is before the current range's targeted point, <code>0</code> if they are equal or identical, and <code>1</code> </dd>
			<dt><code>cloneRange()</code></dt>
			<dd>Returns a copy of the Range object with the same values.</dd>
			<dt><code>toString()</code></dt>
			<dd>Returns the text contents of the range as a string.</dd>
		</dl>
	</section>
	<section>
		<h4>MediaQueryList Properties:</h4>
		<dl>
			<dt><code>matches</code></dt>
			<dd>A boolean set to <code>true</code> if the document matches the media query list, or <code>false</code> if it does not.</dd>
			<dt><code>media</code></dt>
			<dd>A string containing the media query list.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
