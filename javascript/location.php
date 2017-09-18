<?php
	$PAGE_NAME = 'Location';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>The Location object contains the current URL of the window, or rather, several permutations of its various components, as well as the possibility of sending the browser to a different URL.</p>
	</section>
	<section>
		<h4>Location Object Properties:</h4>
		<dl>
			<dt><code>hash</code></dt>
			<dd>A string containing the hash/anchor portion of the URL, anything present after a # sign. The # itself is not part of this value, but is added/removed by the browser depending on whether or not this part of the URL is present.</dd>
			<dt><code>host</code></dt>
			<dd>A string containing the hostname portion of the URL in addition to the port, if one is specified or it's not a default.</dd>
			<dt><code>hostname</code></dt>
			<dd>A string containing the hostname portion of the URL.</dd>
			<dt><code>href</code></dt>
			<dd>A string containing the entire URL.</dd>
			<dt><code>origin</code></dt>
			<dd>A string containing the protocol, hostname, and port number of the URL, if applicable.</dd>
			<dt><code>pathname</code></dt>
			<dd>A string containing the path name of the URL.</dd>
			<dt><code>port</code></dt>
			<dd>A string containing the port number of the URL, if applicable.</dd>
			<dt><code>protocol</code></dt>
			<dd>A string containing the protocol of the URL.</dd>
			<dt><code>search</code></dt>
			<dd>A string containing the query string portion of the URL if applicable, anything after a ? mark. The ? itself <em>is</em> part of this value.</dd>
		</dl>
	</section>
	<section>
		<h4>Location Object Methods:</h4>
		<dl>
			<dt><code>assign()</code></dt>
			<dd>Accepts a string containing a full URL in its argument, and navigates the browser to that URL in the same frame.</dd>
			<dt><code>reload()</code></dt>
			<dd>Accepts an optional boolean in its argument, and reloads the page from the cache if the boolean is <code>false</code> or not used, or reloads from the server if the boolean is <code>true</code>.</dd>
			<dt><code>replace()</code></dt>
			<dd>Accepts a string containing a full URL in its argument, and navigates the browser to that URL in the same frame; however, unlike <code>assign()</code>, the new page replaces the current one and the user cannot use the back button to return.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
