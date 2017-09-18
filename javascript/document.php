<?php
	$PAGE_NAME = 'Document';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>The Document object is how Javascript accesses the HTML document currently loaded into the web browser. Properties and methods of the Document object are concerned with the page itself directly. Incidentally, the Document object is technically part of the Window object as well</p>
	</section>
	<section>
		<h4>Document Object Properties:</h4>
		<dl>
			<dt><code>activeElement</code></dt>
			<dd>Read-only; stores the currently focused element in the document.</dd>
			<dt><code>anchors</code></dt>
			<dd>Stores a list of all <code>&lt;a&gt;</code> elements in the document.</dd>
			<dt><code>baseURI</code></dt>
			<dd>Read-only; stores the base (absolute) URI of the document; the starting point for any relative links.</dd>
			<dt><code>body</code></dt>
			<dd>Stores the body element of the document. Note that this property can be set by specifying new content for the body, but that doing so overwrites all existing content.</dd>
			<dt><code>cookie</code></dt>
			<dd>
				Not actually a property, but functioning as one. Assigning a string value to this faux-property, in the format of a name=value pair or multiple such pairs separated by semicolons and spaces, creates a new browser cookie, and checking it returns the most recent cookie or set of cookies created in this fashion.
				<details>
					<summary>Accepted <var>key</var>=<var>value</var> pairs:
					<dt><code><var>key</var>=<var>value</var></code></dt>
					<dd>The actual data stored in the cookie. Both the key and the value may be anything. An example would</dd>
					<dt><code>expires=<var>date</var></code></dt>
					<dd>The date of expiration for the cookie. The value must be a GMT formatted date string. If not specified, the cookie will expire when the browser closes.</dd>
					<dt><code>path=<var>path</var></code></dt>
					<dd>The directory path the cookie belongs to, in other words, the page on the domain the cookie belongs to. Paths must be absolute within the domain. If not specified, the cookie belongs to the current page.</dd>
					<dt><code>domain=<var>domainname</var></code></dt>
					<dd>The domain of the website the cookie belongs to. If not specified, it will be the domain of the current webpage.</dd>
					<dt><code>secure</code></dt>
					<dd>Rather than having a key and value, if present, this simply informs the browser to use https to send the cookie to the server.</dd>
				</details>
			</dd>
			<dt><code>doctype</code></dt>
			<dd>Stores the <code>&lt;!DOCTYPE&gt;</code> declaration of the document.</dd>
			<dt><code>documentElement</code></dt>
			<dd>Read-only; stores the <code>&lt;html&gt;</code> element of the document.</dd>
			<dt><code>documentMode</code></dt>
			<dd>Internet Explorer only; stores the mode used to display the document, IE modes being effectively compatibility modes that allow loading a document as if the browser was an older version.</dd>
			<dt><code>documentURI</code></dt>
			<dd>Stores the URI of the document file itself.</dd>
			<dt><code>domain</code></dt>
			<dd>Stores the domain name of the server that loaded the document.</dd>
			<dt><code>embeds</code></dt>
			<dd>Stores a list of all <code>&lt;embed&gt;</code> elements in the document.</dd>
			<dt><code>forms</code></dt>
			<dd>Stores a list of all <code>&lt;form&gt;</code> eleemnts in the document.</dd>
			<dt><code>head</code></dt>
			<dd>Stores the <code>&lt;head&gt;</code> element of the document.</dd>
			<dt><code>images</code></dt>
			<dd>Stores a list of all <code>&lt;img&gt;</code> elements in the document.</dd>
			<dt><code>implementation</code></dt>
			<dd>Stores a DOMImplementation object; for more information, see below.</dd>
			<dt><code>inputEncoding</code></dt>
			<dd>Read-only; stores the character encoding used by the document.</dd>
			<dt><code>lastModified</code></dt>
			<dd>Read-only; stores the last modified date of the document.</dd>
			<dt><code>links</code></dt>
			<dd>Stores a list of all <code>&lt;a&gt;</code> and <code>&lt;area&gt;</code> elements with an <code>href</code> attribute in the document.</dd>
			<dt><code>readyState</code></dt>
			<dd>
				Read-only; stores the current loading status of the document.
				<details>
					<summary>Possible values:</summary>
					<dl>
						<dt><code>uninitialized</code></dt>
						<dd>The document has not started loading yet.</dd>
						<dt><code>loading</code></dt>
						<dd>The document is currently loading.</dd>
						<dt><code>loaded</code></dt>
						<dd>The document is currently loaded, but hasn't been fully interpreted yet.</dd>
						<dt><code>interactive</code></dt>
						<dd>The document is sufficiently loaded for the user to begin interacting with it.</dd>
						<dt><code>complete</code></dt>
						<dd>The document is fully loaded.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>referrer</code></dt>
			<dd>Stores the URL of the document that loaded the current document, such as through a hyperlink.</dd>
			<dt><code>scripts</code></dt>
			<dd>Stores a list of all <code>&lt;script&gt;</code> elements in the document.</dd>
			<dt><code>title</code></dt>
			<dd>Stores the <code>&lt;title&gt;</code> element of the document.</dd>
			<dt><code>URL</code></dt>
			<dd>Stores the full URL of the document.</dd>
		</dl>
	</section>
	<section>
		<h4>Document Object Methods:</h4>
		<dl>
			<dt><code>addEventListener()</code></dt>
			<dd>Accepts an <a href="/javascript/event.php">event</a> (without the <code>on</code> prefix) and a function in its arguments. Attaches an event listener to the document or any object within it. If the specified event occurs, the function will run.</dd>
			<dt><code>adoptNode()</code></dt>
			<dd>Accepts a node from another document (such as one in an <code>&lt;iframe&gt;</code> element) in its argument, and makes that node and all of its child nodes part of the current document, removing it from the other document. However, it still needs to be assigned a place in the current document before it will appear there.</dd>
			<dt><code>close()</code></dt>
			<dd>Closes the output stream previously opened by <code>open()</code>, committing its contents to the document.</dd>
			<dt><code>createAttribute()</code></dt>
			<dd>Accepts a string in its argument, and creates a new attribute node of that type. Note that without assigning this method to a variable or some other way of accessing it in the future, the new attribute node will be unusable.</dd>
			<dt><code>createComment()</code></dt>
			<dd>Accepts a string in its argument, and creates a new comment node containing that string. Note that without assigning this method to a variable or some other way of accessing it in the future, the new comment node will be unusable.</dd>
			<dt><code>createDocumentFragment()</code></dt>
			<dd>Creates a new document fragment, effectively a virtual node that doesn't appear in the actual document, but otherwise has all the functionality of a normal node, including having other nodes appended to it. This is mostly useful for creating a kind of sandbox node where adjustments can be made without their effects being visible on the final page until it's ready to be copied over.</dd>
			<dt><code>createElement()</code></dt>
			<dd>Accepts a string in its argument, and creates a new element node of that type. Note that without assigning this method to a variable or some other way of accessing it in the future, the new element node will be unusable.</dd>
			<dt><code>createTextNode()</code></dt>
			<dd>Accepts a string in its argument, and creates a new text node (the inner text many HTML tags contain) containing that string, which can then be assigned to a created element. Note that without assigning this method to a variable or some other way of accessing it in the future, the new text node will be unusable.</dd>
			<dt><code>getElementByID</code></dt>
			<dd>Accepts a string in its argument, and returns the element in the document with that id. There shouldn't be, but if there are multiple elements with that ID, this method will return the first one.</dd>
			<dt><code>getElementsByClassName</code></dt>
			<dd>Accepts a string in its argument, and returns a list of every element in the document with that class.</dd>
			<dt><code>getElementsByName</code></dt>
			<dd>Accepts a string in its argument, and returns a list of every element in the document with that name.</dd>
			<dt><code>getElementsByTagName</code></dt>
			<dd>Accepts a string in its argument, and returns</dd>
			<dt><code>hasFocus()</code></dt>
			<dd>Returns a boolean value signifying whether or not the document or any of its sub-objects the method is used on have focus.</dd>
			<dt><code>importNode()</code></dt>
			<dd>Accepts a node from another document in its argument, and copies that node to the current document. If <code>deep</code> is used as a second argument, all of the node's child nodes are copied too, otherwise only the specified node is imported.</dd>
			<dt><code>normalize()</code></dt>
			<dd>Removes empty text nodes from the document, and conjoins adjacent text nodes.</dd>
			<dt><code>open()</code></dt>
			<dd>Can accept up to two arguments, and opens an "output stream" to collect use of the <code>write()</code> method, storing any relevant output until the <code>close()</code> method is used. Its first argument can be a MIME type for the new document, and defaults to <code>"text/html"</code> (only Firefox supports any values other than <code>"text/html"</code> and <code>"text/plain"</code>, while the second argument must be <code>replace</code>, and, if present, the new document written when <code>close()</code> is used will take the current page's place in the window's history, otherwise it will be after the current page in the window's history. Note that this doesn't necessarily have to overwrite the existing document if the document object in another window is targeted instead. This method is useful if <code>write()</code> is going to be used multiple times, because otherwise, that method automatically opens and closes an output stream with each use, overwriting the document each time.</dd>
			<dt><code>querySelector()</code></dt>
			<dd>Accepts a string containing a CSS selector in its argument, and returns the first element in the document that matches that selector.</dd>
			<dt><code>querySelectorAll()</code></dt>
			<dd>Accepts a string containing a CSS selector in its argument, and returns a list of every element in the document that matches that selector.</dd>
			<dt><code>removeEventListener()</code></dt>
			<dd>Accepts the same event and function pair that was previously used by an <code>addEventListener</code> method in its argument, and removes the event listener from the document or any object within it. Note that the function must be a named function, i.e. one defined elsewhere, or the pair will not be recognized as a match.</dd>
			<dt><code>write()</code></dt>
			<dd>Accepts a string containing either text or HTML code in its argument, and writes that to the document. Note that if this is used after the document is fully loaded, it will overwrite all the existing contents of the document.</dd>
			<dt><code>writeIn()</code></dt>
			<dd>As <code>write()</code>, but adds a new line character to the end of everything it writes.</dd>
		</dl>
	</section>
	<section>
		<h4>DOMImplementation Type Methods:</h4>
		<p>A DOMImplementation object underlies all document objects, and as such, contains methods for creating new documents.</p>
		<dl>
			<dt><code>createDocument()</code></dt>
			<dd>Accepts three arguments, a namespace URI, the name of the document's root node (for HTML documents, this must be <code>'html'</code>, and optionally, a <code>documentType</code> object of the sort created by <code>createDocumentType()</code>. Creates and returns a new XML document.</dd>
			<dt><code>createDocumentType()</code></dt>
			<dd>Accepts three arguments, the qualified name of the document type, the PUBLIC identifier of the document type, and the SYSTEM identifier of the document type. Creates and returns a documentType object.</dd>
			<dt><code>createHTMLDocument()</code></dt>
			<dd>Can accept a string in its argument, and creates a new HTML document, for which the string will be used as a title.</dd>
			<dt><code>hasFeature()</code></dt>
			<dd>Accepts two strings in its argument, containing a feature name and a version it was implemented, respectively. Largely unused and dummied out of modern browsers, this method is only still implemented for compatibility reasons; it returns <code>true</code> no matter what.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
