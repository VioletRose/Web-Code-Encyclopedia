<?php
	$PAGE_NAME = 'Window';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The Window object represents an open browser window, and its properties and methods are aimed at storing information about the browser window's current condition, as well as controlling it in a number of ways.</p>
			<!--What exactly is the significance of tabs in this system?-->
	</section>
	<section>
		<h4>Window Properties:</h4>
		<p></p>
		<dl>
			<dt><code>closed</code></dt>
			<dd>&#10551; A boolean returning <code>true</code> if the window has been closed, otherwise <code>false</code>.</dd>
				<!--How is it capable of storing this? Keeping older Window objects as variables or something?-->
			<dt><code>document</code></dt>
			<dd>&#10551; The Document object for the window.</dd>
			<dt><code>frameElement</code></dt>
			<dd>&#10551; The <code>&lt;iframe&gt;</code> element containing the current window, if applicable.</dd>
			<dt><code>frames</code></dt>
			<dd>&#10551; An array-like list of all the <code>&lt;iframe&gt;</code> elements in the window.</dd>
			<dt><code>history</code></dt>
			<dd>&#10551; The History object associated with the window.</dd>
			<dt><code>innerHeight</code></dt>
			<dd>&#10551; A number representing the inner height of the window in pixels, not including toolbars and scrollbars.</dd>
			<dt><code>innerWidth</code></dt>
			<dd>&#10551; A number representing the inner width of the window in pixels, not including toolbars and scrollbars.</dd>
			<dt><code>length</code></dt>
			<dd>&#10551; A number representing the number of <code>&lt;iframe&gt;</code> elements in the window.</dd>
			<dt><code>localStorage</code></dt>
			<dd>&#10551; The local storage object associated with the window.</dd>
				<!--Is this actually true?-->
			<dt><code>location</code></dt>
			<dd>&#10551; The Location object for the window.</dd>
			<dt><code>name</code></dt>
			<dd>&#10551; The name of the window; note that is normally unset and returns <code>view</code>, but setting it can be useful for some cross-window scripts.</dd>
				<!--Is that actually true or is that just bullshit?-->
			<dt><code>navigator</code></dt>
			<dd>&#10551; The Navigator object for the window.</dd>
			<dt><code>opener</code></dt>
			<dd>&#10551; A reference to the window which created this window, if applicable.</dd>
			<dt><code>outerHeight</code></dt>
			<dd>&#10551; A number representing the outer height of the window in pixels, including toolbars and scrollbars.</dd>
			<dt><code>outerWidth</code></dt>
			<dd>&#10551; A number representing the outer width of the window in pixels, including toolbars and scrollbars.</dd>
			<dt><code>pageXOffset</code></dt>
			<dd>&#10551; The number of pixels the window has currently been horizontally scrolled from its left edge.</dd>
			<dt><code>pageYOffset</code></dt>
			<dd>&#10551; The number of pixels the window has currently been vertically scrolled from its top edge.</dd>
			<dt><code>parent</code></dt>
			<dd>&#10551; The parent window of the current window, if applicable.</dd>
			<dt><code>screen</code></dt>
			<dd>&#10551; The Screen object for the window.</dd>
			<dt><code>screenLeft</code></dt>
			<dd>&#10551; The horizontal coordinate of the window's left edge relative to the screen's left edge.</dd>
			<dt><code>screenTop</code></dt>
			<dd>&#10551; The vertical coordinate of the window's top edge relative to the screen's top edge.</dd>
				<!--Are these two correct?-->
			<dt><code>screenX</code></dt>
			<dd>&#10551; The horizontal coordinate of the window's left edge relative to the screen's left edge.</dd>
			<dt><code>screenY</code></dt>
			<dd>&#10551; The vertical coordinate of the window's top edge relative to the screen's top edge.</dd>
			<dt><code>sessionStorage</code></dt>
			<dd>&#10551; The local storage object for the window dedicated to session-only storage.</dd>
			<dt><code>scrollX</code></dt>
			<dd>&#10551; See <code>pageXOffset</code>.</dd>
			<dt><code>scrollY</code></dt>
			<dd>&#10551; See <code>pageYOffset</code>.</dd>
			<dt><code>self</code></dt>
			<dd>&#10551; The current window.</dd>
			<dt><code>status</code></dt>
			<dd>&#10551; The text contents of the window's status bar.</dd>
			<dt><code>top</code></dt>
			<dd>&#10551; The topmost browser window.</dd>
				<!--Topmost in heirarchy, parentage, the user's view? Huh?-->
		</dl>
	</section>
	<section>
		<h4>Window Methods:</h4>
		<p></p>
		<dl>
			<dt><code>alert()</code></dt>
			<dd>&#10551; Accepts a string in its argument, and pops up an alert on the user's screen containing that message. Since this takes focus from the current window and needs to be clicked away, this method should be used sparingly, if at all.</dd>
			<dt><code>atob()</code></dt>
			<dd>&#10551; Accepts a string encoded by the <code>btoa</code> method and returns its decoded value.</dd>
			<dt><code>blur()</code></dt>
			<dd>&#10551; Removes active focus from the current window.</dd>
			<dt><code>btoa()</code></dt>
			<dd>&#10551; Accepts a string, and returns its value encoded in base-64.</dd>
				<!--What does this actually mean, and what is it for?-->
			<dt><code>clearInterval()</code></dt>
			<dd>&#10551; Accepts a global variable containing an interval, and stops the execution of that interval if it was running.</dd>
			<dt><code>clearTimeout()</code></dt>
			<dd>&#10551; Accepts a global variable containing a timeout, and stops the execution of that timeout if it was running.</dd>
			<dt><code>close()</code></dt>
			<dd>&#10551; Closes the current window.</dd>
				<!--If this was generally allowed, we'd see a lot more troll sites using this method. What are the caveats here?-->
			<dt><code>confirm()</code></dt>
			<dd>&#10551; Accepts a string in its argument, and pops up a dialog box on the user's screen containing that message and buttons for OK and cancel. If the user clicks OK, returns <code>true</code>.</dd>
			<dt><code>focus()</code></dt>
			<dd>&#10551; Gives active focus to the current window.</dd>
			<dt><code>getComputedStyle()</code></dt>
			<dd>&#10551; Accepts an element (or pseudo-element) in its argument, and returns a CSS declaration block containing the properties the browser is assigning to that element.</dd>
			<dt><code>getSelection()</code></dt>
			<dd>&#10551; Returns a Selection object containing the text range currently selected by the user.</dd>
				<!--Hold on here, what's a Selection object? Also, does this method actually work?-->
			<dt><code>matchMedia()</code></dt>
			<dd>&#10551; Accepts a CSS media query string in its argument, and returns a MediaQueryList object containing the results of that query string.</dd>
				<!--What's a MediaQueryList object, and how does it work exactly?-->
			<dt><code>moveBy()</code></dt>
			<dd>&#10551; Accepts two numbers in its argument, which will be used as X and Y coordinate offsets to move the window that amount of distance.</dd>
			<dt><code>moveTo()</code></dt>
			<dd>&#10551; Accepts two numbers in its argument, which will be used as X and Y target coordinates to move the window to that location.</dd>
				<!--Where are these coordinates measured from?-->
			<dt><code>open()</code></dt>
			<dd>&#10551; </dd>
				<!--Jesus what is this method-->
			<dt><code>print()</code></dt>
			<dd>&#10551; Opens a Print dialog box, allowing the user to select printing options and either print or cancel.</dd>
			<dt><code>prompt()</code></dt>
			<dd>&#10551; Accepts up to two strings in its argument and displays a dialog box asking for user input, with a text entry field and OK and Cancel buttons. The first string is the message displayed to the user, and the second, if present, serves as a default entry for the text entry box. This method ultimately returns the user's input if the OK button is pressed, or <code>null</code> if they cancel.</dd>
			<dt><code>resizeBy()</code></dt>
			<dd>&#10551; Accepts two numbers in its argument, which will be used as X and Y pixel measurements to resize the window by.</dd>
				<!--Which direction does the window resize in?-->
			<dt><code>resizeTo()</code></dt>
			<dd>&#10551; Accepts two numbers in its argument, which will be used as X and Y pixel measurements to resize the window to.</dd>
			<dt><code>scrollBy()</code></dt>
			<dd>&#10551; Accepts two numbers in its argument, which will be used as X and Y pixel measurements to scroll the window to.</dd>
			<dt><code>scrollTo()</code></dt>
			<dd>&#10551; Accepts two numbers in its argument, which will be used as X and Y pixel coordinates to scroll the window to.</dd>
			<dt><code>setInterval()</code></dt>
			<dd>&#10551; Accepts a function, a number in milliseconds (must be greater than 10), and any number of optional parameters which will be passed to the function as arguments. Runs the specified function repeatedly every time the interval's number of milliseconds has passed.</dd>
			<dt><code>setTimeout()</code></dt>
			<dd>&#10551; Accepts a function, a number in milliseconds (must be greater than 10), and any number of optional parameters which will be passed to the function as arguments. Runs the specified function once after the timeout's number of milliseconds has passed.</dd>
			<dt><code>stop()</code></dt>
			<dd>&#10551; Stops the window from loading.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
