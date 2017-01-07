<?php
	$PAGE_NAME = 'Element';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The Element object contains relevant properties and methods for dealing with not only elements on the page, but also the individual nodes that comprise their structure. Each element is technically a node, as are the their text contents and each attribute they have, and this must always be kept in mind when working with them.</p>
	</section>
	<section>
		<h4>Element Properties:</h4>
		<dl>
			<dt><code>accessKey</code></dt>
			<dd>&#10551; The <code>accesskey</code> attribute of the element.</dd>
			<dt><code>attributes</code></dt>
			<dd>&#10551; A Node List of the element's attributes.</dd>
				<!--What's a NamedNodeMap?-->
			<dt><code>childElementCount</code></dt>
			<dd>&#10551; The number of child elements the elmeent has.</dd>
			<dt><code>childNodes</code></dt>
			<dd>&#10551; A Node List of the element's child nodes, including the text and comment nodes of those elements.</dd>
			<dt><code>children</code></dt>
			<dd>&#10551; A Node List of the element's child nodes, without the text or comment nodes of those elements.</dd>
			<dt><code>classList</code></dt>
			<dd>&#10551; A DOM Token List of the element's classes, i.e. the space-separated entries in its &lt;class&gt; attribute.</dd>
			<dt><code>className</code></dt>
			<dd>&#10551; The value of the element's <code>&lt;class&;gt</code> attribute.</dd>
			<dt><code>clientHeight</code></dt>
			<dd>&#10551; The height of the element, including padding, as a number representing pixels.</dd>
			<dt><code>clientLeft</code></dt>
			<dd>&#10551; The width of the element's left border, as a number representing pixels.</dd>
			<dt><code>clientTop</code></dt>
			<dd>&#10551; The width of the element's top border, as a number representing pixels.</dd>
			<dt><code>clientWidth</code></dt>
			<dd>&#10551; The width of the element, including padding, as a number representing pixels.</dd>
			<dt><code>contentEditable</code></dt>
			<dd>&#10551; A boolean representing whether the text content of the element is user-editable or not.</dd>
			<dt><code>dir</code></dt>
			<dd>&#10551; The text direction of the element,</dd>
			<dt><code>firstChild</code></dt>
			<dd>&#10551; The first child node of the element.</dd>
			<dt><code>firstElementChild</code></dt>
			<dd>&#10551; The first child element of the element.</dd>
			<dt><code>id</code></dt>
			<dd>&#10551; The value of the element's <code>id</code> attribute.</dd>
			<dt><code>innerHTML</code></dt>
			<dd>&#10551; The full contents, text and HTML, of the element - everything placed between its opening and closing tags.</dd>
			<dt><code>isContentEditable</code></dt>
			<dd>&#10551; Returns <code>true</code> if <code>contentEditable</code> is <code>true</code>, otherwise, returns <code>false</code>.</dd>
			<dt><code>lang</code></dt>
			<dd>&#10551; The language code of the element, as determined by the value of its <code>lang</code> attribute, or failing that, the <code>lang</code> attribute of the page's <code>&lt;html&gt;</code> tag.</dd>
				<!--Is this actually correct? Note: I need help coming up with a fast way to test this kind of thing in the console.-->
			<dt><code>lastChild</code></dt>
			<dd>&#10551; The last child node of the element.</dd>
			<dt><code>lastElementChild</code></dt>
			<dd>&#10551; The last child element of the element.</dd>
			<dt><code>namespaceURI</code></dt>
			<dd>&#10551; The URI of the element's namespace, meaning the base URL of the page minus things like anchors.</dd>
			<dt><code>nextSibling</code></dt>
			<dd>&#10551; The next node that is not a parent or child of the element.</dd>
			<dt><code>nextElementSibling</code></dt>
			<dd>&#10551; The next element that is not a parent or child of the element.</dd>
			<dt><code>nodeName</code></dt>
			<dd>&#10551; The name of the node - for elements, this is the type of element they are.</dd>
			<dt><code>nodeType</code></dt>
			<dd>&#10551; A number representing the type of node. <code>1</code> for elements, <code>2</code> for attributes, <code>3</code> for text, and <code>8</code> for comments.</dd>
			<dt><code>nodeValue</code></dt>
			<dd>&#10551; The node's value - note that elements just return <code>null</code> as their value, this is intended for text and attributes.</dd>
			<dt><code>offsetHeight</code></dt>
			<dd>&#10551; The height of the element, including padding, border, and scrollbar, as a number representing pixels.</dd>
			<dt><code>offsetWidth</code></dt>
			<dd>&#10551; The width of the element, including padding, border, and scrollbar, as a number representing pixels.</dd>
			<dt><code>offsetLeft</code></dt>
			<dd>&#10551; The left position of the element relative to its first non-statically positioned parent's left edge, as a number representing pixels.</dd>
			<dt><code>offsetParent</code></dt>
			<dd>&#10551; The element's first parent that isn't statically positioned.</dd>
			<dt><code>offsetTop</code></dt>
			<dd>&#10551; The top position of the element relative to its first non-statically positioned parent's top edge, as a number representing pixels.</dd>
			<dt><code>ownerDocument</code></dt>
			<dd>&#10551; The root element of the element, meaning the document itself.</dd>
			<dt><code>parentNode</code></dt>
			<dd>&#10551; The parent node of the element.</dd>
			<dt><code>parentElement</code></dt>
			<dd>&#10551; The parent element of the element.</dd>
			<dt><code>previousSibling</code></dt>
			<dd>&#10551; The previous node that is not a parent or child of the element.</dd>
			<dt><code>previousElementSibling</code></dt>
			<dd>&#10551; The previous element that is not a parent or child of the element.</dd>
			<dt><code>scrollHeight</code></dt>
			<dd>&#10551; The entire height of the element, including padding, as a number representing pixels.</dd>
				<!--How are these different from client sizes?-->
			<dt><code>scrollLeft</code></dt>
			<dd>&#10551; The number of pixels by which the element is scrolled horizontally.</dd>
				<!--The element's internal scrollbar?-->
			<dt><code>scrollTop</code></dt>
			<dd>&#10551; The number of pixels by which the element is scrolled vertically.</dd>
			<dt><code>scrollWidth</code></dt>
			<dd>&#10551; The entire width of the element, including padding, as a number representing pixels.</dd>
			<dt><code>style</code></dt>
			<dd>&#10551; The value of the element's <code>style</code> attribute.</dd>
			<dt><code>tabIndex</code></dt>
			<dd>&#10551; The value of the element's <code>tabindex</code> attribute.</dd>
			<dt><code>tagName</code></dt>
			<dd>&#10551; The type of element, in uppercase.</dd>
			<dt><code>textContent</code></dt>
			<dd>&#10551; The text content of the element and, very importantly, all of its descendents as well.</dd>
			<dt><code>title</code></dt>
			<dd>&#10551; The title attribute of the element.</dd>
		</dl>
	</section>
	<section>
		<h4>Element Methods:</h4>
		<p>It should be noted that in the cases of most methods that manipulate nodes on the page, it can often be necessary or store or create elements and nodes into variables for future use.</p>
		<dl>
			<dt><code>addEventListener()</code></dt>
			<dd>&#10551; Accepts an <a href="/javascript/event.php">event</a> (without the <code>on</code> prefix) and a function in its arguments. Attaches an event listener to the element. If the specified event occurs, the function will run.</dd>
			<dt><code>appendChild()</code></dt>
			<dd>&#10551; Accepts a node in its argument, and appends that node to the element as its last child.</dd>
			<dt><code>blur()</code></dt>
			<dd>&#10551; Removes focus from the element.</dd>
			<dt><code>click()</code></dt>
			<dd>&#10551; Simulates a mouse click on the element. For most purposes, the result will be identical to if the user manually clicked on the element.</dd>
				<!--What are the exceptions?-->
			<dt><code>cloneNode()</code></dt>
			<dd>&#10551; Accepts <code>true</code> or <code>false</code> in its argument, and if <code>true</code>, returns a copy of the node, its attributes, and all of its descendents. If <code>false</code>, it returns a copy of only the node and its attributes, excluding its descendents.</dd>
				<!--Is this correct?-->
			<dt><code>compareDocumentPosition()</code></dt>
			<dd>&#10551; Accepts a node in its argument, compares the position of that second node to the current one, then returns an integer representing the result; <code>1</code> means the two nodes aren't even part of the same document, <code>2</code> means the first node is positioned after the second node, <code>4</code> means the second node is positioned after the first node, <code>8</code> means the first node is positioned inside the second node, <code>16</code> means the second node is positioned inside the first node, and <code>32</code> means either there is no relationship found, as per <code>1</code>, or both nodes are attribute nodes of the same element.</dd>
				<!--How can 32 ever be returned instead of 1, if it's this ambiguous?-->
			<dt><code>contains()</code></dt>
			<dd>&#10551; Accepts a node in its argument, and checks whether or not the current node contains that second node. If it does, returns <code>true</code>; otherwise, returns <code>false</code>.</dd>
			<dt><code>focus()</code></dt>
			<dd>&#10551; Focuses the element.</dd>
			<dt><code>getAttribute()</code></dt>
			<dd>&#10551; Accepts a string containing an attribute name in its argument, and returns the value of that attribute on the current element.</dd>
			<dt><code>getAttributeNode()</code></dt>
			<dd>&#10551; Accepts a string containing an attribute name in its argument, and returns the appropriate attribute node from the current element.</dd>
			<dt><code>getElementsByClassName()</code></dt>
			<dd>&#10551; Accepts a string containing the name of a class in its argument, and returns a NodeList of all elements in the document with that as one of their classes.</dd>
			<dt><code>getElementsByTagName()</code></dt>
			<dd>&#10551; Accepts a string containing the name of an HTML tag, and returns a NodeList of all elements of that type in the document.</dd>
			<dt><code>hasAttribute()</code></dt>
			<dd>&#10551; Accepts a string containing an attribute name in its argument, and returns <code>true</code> if the element has that attribute defined; otherwise, returns <code>false</code>.</dd>
			<dt><code>hasChildNodes()</code></dt>
			<dd>&#10551; Returns <code>true</code> if the element has any child nodes; otherwise, returns <code>false</code>.</dd>
			<dt><code>insertBefore()</code></dt>
			<dd>&#10551; May accept two nodes in its argument, one required node which is the new node to insert, and one optional child node of the current node. If the second argument is present, the new node will be inserted into the current node as a child node, just before the specified child node in order. If it is not used, the new node will be inserted as the last child node in the order.</dd>
			<dt><code>isDefaultNamespace()</code></dt>
			<dd>&#10551; Accepts a URI in its argument and returns <code>true</code> if that is the default namespace; otherwise, returns <code>false</code>.</dd>
				<!--What the heck does this even mean?-->
			<dt><code>isEqualNode()</code></dt>
			<dd>&#10551; Accepts a node in its argument, and compares it to the current node, returning <code>true</code> if all of the following conditions are met: NodeType, nodeName, NodeValue, localName, nameSpaceURI, and prefix are identical, they have the same child nodes, including all their descendents, and they have the same defined attributes and attribute values; otherwise, returns <code>false</code></dd>
			<dt><code>isSameNode()</code></dt>
			<dd>&#10551; Accepts a node in its argument, and checks it against the current node, returning <code>true</code> if they are the same node; otherwise, returns <code>false</code>. This method would generally be used to get nodes matching two different conditions and make sure they're not the same node due to meeting both conditions.</dd>
			<dt><code>normalize()</code></dt>
			<dd>&#10551; Joins adjoining text nodes together and removes empty text nodes from the element.</dd>
			<dt><code>querySelector()</code></dt>
			<dd>&#10551; Accepts a CSS selector in its argument, and returns the first of the element's child nodes that matches that selector.</dd>
			<dt><code>querySelectorAll()</code></dt>
			<dd>&#10551; Accepts a CSS selector in its argument, and returns a NodeList of all of the current element's child elements matching that selector.</dd>
			<dt><code>removeAttribute()</code></dt>
			<dd>&#10551; Accepts a string containing an attribute name in its argument, and removes the matching attribute from the element.</dd>
			<dt><code>removeAttributeNode()</code></dt>
			<dd>&#10551; Accepts a string containing an attribute name in its argument, removes the matching attribute node from the element, and returns the attribute that was removed.</dd>
			<dt><code>removeChild()</code></dt>
			<dd>&#10551; Accepts a child node of the current element in its argument, removes that child node, and returns it; this allows it to be stored in a variable and re-inserted later.</dd>
			<dt><code>replaceChild()</code></dt>
			<dd>&#10551; Accepts two nodes in its argument, a replacement node, and a child node of the current element to be replaced. Removes the child node from the element, and inserts the replacement in its position.</dd>
			<dt><code>removeEventListener()</code></dt>
			<dd>&#10551; Accepts the same event and function pair that was previously used by an <code>addEventListener</code> method in its argument, and removes the event listener from the element. Note that the function must be a named function, i.e. one defined elsewhere, or the pair will not be recognized as a match.</dd>
			<dt><code>scrollIntoView()</code></dt>
			<dd>&#10551; Accepts an element in its argument, and scrolls the browser window horizontally and/or vertically until the specified element is in view.</dd>
				<!--How does this alignTo parameter even work?-->
			<dt><code>setAttribute()</code></dt>
			<dd>&#10551; Accepts two strings containing an attribute name and the desired value of the attribute respectively, and defines that attribute to that value for the current element.</dd>
			<dt><code>setAttributeNode()</code></dt>
			<dd>&#10551; Accepts an attribute node in its argument, and adds that attribute node to the current element.</dd>
			<dt><code>toString()</code></dt>
			<dd>&#10551; Returns a copy of the current element in the form of a string.</dd>
				<!--The heck is this actually doing?-->
		</dl>
	</section>
	<section>
		<h4>Nodelist Properties:</h4>
		<p>A <code>Nodelist</code> is a specific object type similar to an array, specifically dedicated to indexing a list of nodes.</p>
		<dl>
			<dt><code>length</code></dt>
			<dd>&#10551; Returns the number of entries the node list contains, starting from 0.</dd>
		</dl>
	</section>
	<section>
		<h4>Nodelist Methods:</h4>
		<dl>
			<dt><code>item</code></dt>
			<dd>&#10551; Accepts an index number in its argument, and returns the element at that index.</dd>
		</dl>
	</section>
	<section>
		<h4>DOMTokenList Properties:</h4>
		<p></p>
			<!--What.. actually is this? Like, what is the stated purpose of this object?-->
		<dl>
			<dt><code>length</code></dt>
			<dd>&#10551; An integer storing how many entries the list contains.</dd>
		</dl>
	</section>
	<section>
		<h4>DOMTokenList Methods:</h4>
		<dl>
			<dt><code>item()</code></dt>
			<dd>&#10551; Accepts an index number in its argument, and returns the item stored at that index in the list.</dd>
			<dt><code>contains()</code></dt>
			<dd>&#10551; Accepts a string in its argument, and returns <code>true</code> if any part of the list contains that string, otherwise, returns <code>false</code>.</dd>
			<dt><code>add()</code></dt>
			<dd>&#10551; Accepts a token (most often a string, but it depends on what this is a list of) in its argument, and adds that token to the list as a new entry.</dd>
			<dt><code>remove()</code></dt>
			<dd>&#10551; Accepts a token in its argument, and if that token is present within the list, its entry will be removed.</dd>
			<dt><code>supports()</code></dt>
			<dd>&#10551; Accepts a string in its argument, and if that string is detected by the browser to have any implemented meaning in a token list, it returns <code>true</code>; otherwise, returns <code>false</code>.</dd>
			<dt><code>toggle()</code></dt>
			<dd>&#10551; Accepts a token in its argument, and if that token is present within the list, returns <code>false</code> and removes it; if that token is not present within the list, returns <code>true</code> and adds it.</dd>
			<dt><code>entries()</code></dt>
			<dd>&#10551; Returns an iterator (a small function designed to customize the iterative behavior of things like <code>for</code> loops) which directs iteration through all key/value pairs (index numbers and entry values) on the list.</dd>
			<dt><code>forEach()</code></dt>
			<dd>&#10551; Accepts a function in its argument, and executes that function once for each item stored in the list.</dd>
			<dt><code>keys()</code></dt>
			<dd>&#10551; Returns an iterator which directs iteration through all keys of the key/value pairs on the list.</dd>
			<dt><code>values()</code></dt>
			<dd>&#10551; Returns an iterator which directs iteration through all values of the key/value pairs on the list.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
