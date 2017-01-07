<?php
	$PAGE_NAME = 'Document';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The Document object is how Javascript accesses the HTML document currently loaded into the web browser. Properties and methods of the Document object are concerned with the page itself directly. Incidentally, the Document object is technically part of the Window object as well</p>
	</section>
	<section>
		<h4>Document Properties:</h4>
		<dl>
			<dt><code>activeElement</code></dt>
			<dd>&#10551; Read-only; stores the currently focused element in the document.</dd>
			<dt><code>anchors</code></dt>
			<dd>&#10551; Stores a list of all <code>&lt;a&gt;</code> elements in the document.</dd>
			<dt><code>baseURI</code></dt>
			<dd>&#10551; Read-only; stores the base (absolute) URI of the document.</dd>
			<dt><code>body</code></dt>
			<dd>&#10551; Stores the body element of the document. Note that this property can be set by specifying new content for the body, but that doing so overwrites all existing content.</dd>
			<dt><code>cookie</code></dt>
			<dd>&#10551; Stores a list of all name and value pairs of cookies in the current document.</dd>
				<!--Ask Sunnie how setting this list actually behaves, overwrite or addition to?-->
			<dt><code>doctype</code></dt>
			<dd>&#10551; Stores the <code>&lt;!DOCTYPE&gt;</code> declaration of the document.</dd>
			<dt><code>documentElement</code></dt>
			<dd>&#10551; Read-only; stores the <code>&lt;html&gt;</code> element of the document.</dd>
			<dt><code>documentMode</code></dt>
			<dd>&#10551; Internet Explorer only; stores the mode used to display the document, IE modes being effectively compatibility modes that allow loading a document as if the browser was an older version.</dd>
			<dt><code>documentURI</code></dt>
			<dd>&#10551; </dd>
				<!--What is the difference between this and baseURI?-->
			<dt><code>domain</code></dt>
			<dd>&#10551; Stores the domain name of the server that loaded the document.</dd>
			<dt><code>embeds</code></dt>
			<dd>&#10551; Stores a list of all <code>&lt;embed&gt;</code> elements in the document.</dd>
			<dt><code>forms</code></dt>
			<dd>&#10551; Stores a list of all <code>&lt;form&gt;</code> eleemnts in the document.</dd>
			<dt><code>head</code></dt>
			<dd>&#10551; Stores the <code>&lt;head&gt; element of the document.</dd>
			<dt><code>images</code></dt>
			<dd>&#10551; Stores a list of all <code>&lt;img&gt;</code> elements in the document.</dd>
			<dt><code>implementation</code></dt>
			<dd>&#10551; </dd>
				<!--What the heck is this?-->
			<dt><code>inputEncoding</code></dt>
			<dd>&#10551; Read-only; stores the character encoding used by the document.</dd>
			<dt><code>lastModified</code></dt>
			<dd>&#10551; Read-only; stores the last modified date of the document.</dd>
			<dt><code>links</code></dt>
			<dd>&#10551; Stores a list of all <code>&lt;a&gt;</code> and <code>&lt;area&gt;</code> elements with an <code>href</code> attribute in the document.</dd>
			<dt><code>readyState</code></dt>
			<dd>
				&#10551; Read-only; stores the current loading status of the document.
				<details>
					<summary>Possible values:</summary>
					<dl>
						<dt><code>uninitialized</code></dt>
						<dd>&#10551; The document has not started loading yet.</dd>
						<dt><code>loading</code></dt>
						<dd>&#10551; The document is currently loading.</dd>
						<dt><code>loaded</code></dt>
						<dd>&#10551; The document is currently loaded, but hasn't been fully interpreted yet.</dd>
						<dt><code>interactive</code></dt>
						<dd>&#10551; The document is sufficiently loaded for the user to begin interacting with it.</dd>
						<dt><code>complete</code></dt>
						<dd>&#10551; The document is fully loaded.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>referrer</code></dt>
			<dd>&#10551; Stores the URL of the document that loaded the current document, such as through a hyperlink.</dd>
			<dt><code>scripts</code></dt>
			<dd>&#10551; Stores a list of all <code>&lt;script&gt;</code> elements in the document.</dd>
			<dt><code>title</code></dt>
			<dd>&#10551; Stores the <code>&lt;title&gt;</code> element of the document.</dd>
			<dt><code>URL</code></dt>
			<dd>&#10551; </dd>
				<!--What is the difference between this and baseURI?-->
		</dl>
	</section>
	<section>
		<h4>Document Methods:</h4>
		<dl>
			<dt><code>addEventListener()</code></dt>
			<dd>&#10551; Accepts an <a href="/javascript/event.php">event</a> (without the <code>on</code> prefix) and a function in its arguments. Attaches an event listener to the document or any object within it. If the specified event occurs, the function will run.</dd>
			<dt><code>adoptNode()</code></dt>
			<dd>&#10551; </dd>
				<!--What is this?-->
			<dt><code>close()</code></dt>
			<dd>&#10551; </dd>
				<!--What is this?-->
			<dt><code>createAttribute()</code></dt>
			<dd>&#10551; Accepts a string in its argument, and creates a new attribute node of that type. Note that without assigning this method to a variable or some other way of accessing it in the future, the new attribute node will be unusable.</dd>
			<dt><code>createComment()</code></dt>
			<dd>&#10551; Accepts a string in its argument, and creates a new comment node containing that string. Note that without assigning this method to a variable or some other way of accessing it in the future, the new comment node will be unusable.</dd>
			<dt><code>createDocumentFragment()</code></dt>
			<dd>&#10551; </dd>
				<!--What is this?-->
			<dt><code>createElement()</code></dt>
			<dd>&#10551; Accepts a string in its argument, and creates a new element node of that type. Note that without assigning this method to a variable or some other way of accessing it in the future, the new element node will be unusable.</dd>
			<dt><code>createTextNode()</code></dt>
			<dd>&#10551; Accepts a string in its argument, and creates a new text node (the inner text many HTML tags contain) containing that string, which can then be assigned to a created element. Note that without assigning this method to a variable or some other way of accessing it in the future, the new text node will be unusable.</dd>
			<dt><code>getElementByID</code></dt>
			<dd>&#10551; Accepts a string in its argument, and returns the element in the document with that id. There shouldn't be, but if there are multiple elements with that ID, this method will return the first one.</dd>
			<dt><code>getElementsByClassName</code></dt>
			<dd>&#10551; Accepts a string in its argument, and returns a list of every element in the document with that class.</dd>
			<dt><code>getElementsByName</code></dt>
			<dd>&#10551; Accepts a string in its argument, and returns a list of every element in the document with that name.</dd>
			<dt><code>getElementsByTagName</code></dt>
			<dd>&#10551; Accepts a string in its argument, and returns</dd>
			<dt><code>hasFocus()</code></dt>
			<dd>&#10551; Returns a boolean value signifying whether or not the document or any of its sub-objects the method is used on have focus.</dd>
			<dt><code>importNode()</code></dt>
			<dd>&#10551; </dd>
				<!--What is this?-->
			<dt><code>normalize()</code></dt>
			<dd>&#10551; Removes empty text nodes from the document, and conjoins adjacent text nodes.</dd>
			<dt><code>open()</code></dt>
			<dd>&#10551; </dd>
				<!--What is this?-->
			<dt><code>querySelector()</code></dt>
			<dd>&#10551; Accepts a string containing a CSS selector in its argument, and returns the first element in the document that matches that selector.</dd>
			<dt><code>querySelectorAll()</code></dt>
			<dd>&#10551; Accepts a string containing a CSS selector in its argument, and returns a list of every element in the document that matches that selector.</dd>
			<dt><code>removeEventListener()</code></dt>
			<dd>&#10551; Accepts the same event and function pair that was previously used by an <code>addEventListener</code> method in its argument, and removes the event listener from the document or any object within it. Note that the function must be a named function, i.e. one defined elsewhere, or the pair will not be recognized as a match.</dd>
			<dt><code>write()</code></dt>
			<dd>&#10551; Accepts a string containing either text or HTML code in its argument, and writes that to the document. Note that if this is used after the document is fully loaded, it will overwrite all the existing contents of the document.</dd>
			<dt><code>writeIn()</code></dt>
			<dd>&#10551; As <code>write()</code>, but adds a new line character to the end of everything it writes.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
