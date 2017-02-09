<?php
	$PAGE_NAME = 'Attribute';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The Attribute object contains a few specialized ways of working with attribute nodes.</p>
	</section>
	<section>
		<h4><code>Attr</code> Properties:</h4>
		<dl>
			<dt><code>name</code></dt>
			<dd>The name of the attribute.</dd>
			<dt><code>value</code></dt>
			<dd>The value of the attribute.</dd>
			<dt><code>specified</code></dt>
			<dd>A boolean storing <code>true</code> if the attribute has been specified, or <code>false</code> if it has not.</dd>
		</dl>
	</section>
	<section>
		<h4><code>NamedNodeMap</code> Properties:</h4>
		<p><code>NamedNodeMap<code> objects are arrays containing an attribute object in each entry, each having <code>name</code> and <code>value</code> properties storing their key-value pairs.</p>
		<dl>
			<dt><code>length</code></dt>
			<dd>Returns the number of entries the node map contains, starting from 0.</dd>
		</dl>
	</section>
	<section>
		<h4><code>NamedNodeMap</code> Methods:</h4>
		<dl>
			<dt><code>getNamedItem()</code></dt>
			<dd>Accepts a string containing the name of an attribute in its argument, and returns the attribute node with that name.</dd>
			<dt><code>item()</code></dt>
			<dd>Accepts an index number in its argument, and returns the attribute node at that index location.</dd>
			<dt><code>removeNamedItem()</code></dt>
			<dd>Accepts a string containing the name of an attribute in its argument, and removes the attribute node with that name from the map.</dd>
			<dt><code>setNamedItem()</code></dt>
			<dd>Accepts an attribute node in its argument and adds that attribute node to the map. If the map already contains an attribute node of that type, the original will be replaced, and the method will return the replaced node.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
