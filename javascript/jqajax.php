<?php
	$PAGE_NAME = 'jQuery AJAX';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>The jQuery library has a number of methods to ease the use of AJAX requests, including making a few common types of request with minimal necessary arguments and setting up default options for future requests. As with AJAX itself, it's worth knowing that while GET is the default type of request due to it being faster and simpler, POST is superior in all other respects including security, and should always be used for user input.</p>
	</section>
	<section>
		<h4>jQuery Object AJAX Methods:</h4>
		<dl>
			<dt><code>ajax()</code></dt>
			<dd>
				Performs an AJAX request with the specified parameters, which are put into the argument in the form of <code>{<var>name</var>:<var>value</var>, <var>name</var>:<var>value</var>}</code> (and so on). There are a large number of possible parameters; described below are parameter names and guidelines for their values.
				<details>
					<summary>Parameters:</summary>
					<dl>
						<dt><code>async</code></dt>
						<dd>A boolean value, <code>true</code> for an asynchronous request (one where the script can keep running while the request completes), or <code>false</code> for a synchronous one; defaults to <code>true</code>.</dd>
						<dt><code>beforeSend</code></dt>
						<dd>A function to be run before the request is sent. It may have one argument of any name, which will be used as an alias for the <code>XMLHttpRequest</code> associated with the AJAX request.</dd>
						<dt><code>cache</code></dt>
						<dd>A boolean value, <code>true</code> for enabling browser caching on the requested page(s), or <code>false</code> for disabling it; defaults to <code>true</code>.</dd>
						<dt><code>complete</code></dt>
						<dd>A function to be run when the request is completed, successfully or unsuccessfully. It may have up to two arguments of any name, which will be used as aliases for the <code>XMLHttpRequest</code> associated with the AJAX request and status of the request (which may be <code>"success"</code>, <code>"notmodified"</code>, <code>"error"</code>, <code>"timeout"</code>, or <code>"parsererror"</code>), respectively.</dd>
						<dt><code>contentType</code></dt>
						<dd>The content type used for the data being transferred by the <code>data</code> parameter; defaults to <code>"application/x-www-form-urlencoded"</code>.</dd>
						<dt><code>context</code></dt>
						<dd>The <code>this</code> value to be used by any callback functions associated with the request.</dd>
						<dt><code>data</code></dt>
						<dd>Data to be sent to the server along with the request.</dd>
						<dt><code>dataFilter</code></dt>
						<dd>A function to handle the raw data delivered by the <code>XMLHttpRequest</code>, unfiltered by jQuery beforehand. It may have up to two arguments of any name, which will be used as aliases for the data and the data type, respectively.</dd>
						<dt><code>dataType</code></dt>
						<dd>The data type expected from the server response. Note that if the wrong data type is provided, the request will still succeed, but whatever you were attempting to do with it may fail as it attempts to use the wrong type of file.</dd>
						<dt><code>error</code></dt>
						<dd>A function to be run if the request fails. It may have up to three arguments of any name, which will be used as aliases for the <code>XMLHttpRequest</code> associated with the AJAX request, status of the request (which may be <code>"success"</code>, <code>"notmodified"</code>, <code>"error"</code>, <code>"timeout"</code>, or <code>"parsererror"</code>), and the JavaScript exception thrown by the error (if any), respectively.</dd>
						<dt><code>global</code></dt>
						<dd>A boolean value, <code>true</code> to allow the request to trigger global AJAX events, <code>false</code> to disallow them; defaults to <code>true</code>.</dd>
						<dt><code>ifModified</code></dt>
						<dd>A boolean value, <code>true</code> to only consider the request successful if the response has changed since the last request, <code>false</code> to disregard whether or not the request is unchanged; defaults to <code>false</code>.</dd>
						<dt><code>jsonp</code></dt>
						<dd>A string overriding the callback function for a jsonp request.</dd>
						<dt><code>jsonpCallback</code></dt>
						<dd>A name for the callback function for a jsonp request.</dd>
						<dt><code>password</code></dt>
						<dd>A password to be used for a HTTP access authentication request.</dd>
						<dt><code>processData</code></dt>
						<dd>A boolean value, <code>true</code> to transform data sent via <code>data</code> into a query string before transfer (specifically, a query string appended to the URL used by the AJAX request), <code>false</code> to refrain from doing so; defaults to <code>true</code>.</dd>
						<dt><code>scriptCharset</code></dt>
						<dd>The desired charset for the request.</dd>
						<dt><code>success</code></dt>
						<dd>A function to be run if the request completes successfully. It may have up to three arguments of any name, which will be used as aliases for the result of the request (the retrieved data), status of the request (which may be <code>"success"</code>, <code>"notmodified"</code>, <code>"error"</code>, <code>"timeout"</code>, or <code>"parsererror"</code>), and the <code>XMLHttpRequest</code> associated with the AJAX request, respectively.</dd>
						<dt><code>timeout</code></dt>
						<dd>The local (browser-side) timeout for the request, in milliseconds. If set to <code>0</code> or left unset, the timeout is unlimited.</dd>
						<dt><code>traditional</code></dt>
						<dd>A boolean value, <code>true</code> to use the older style of serialization, where objects within objects would not be fully serialized, <code>false</code> to use the current style of serialization where everything is serialized to the lowest level (known as recursive serialization); defaults to <code>false</code>.</dd>
						<dt><code>type</code></dt>
						<dd>The type of the request, which may be <code>GET</code> or <code>POST</code>. Defaults to <code>GET</code>.</dd>
						<dt><code>url</code></dt>
						<dd>The URL string to send the request to; defaults to the URL of the current page.</dd>
						<dt><code>username</code></dt>
						<dd>A username to be used for a HTTP access authentication request.</dd>
						<dt><code>xhr</code></dt>
						<dd>A function for creating the XMLHttpRequest object associated with the request. It must return a usable XMLHttpRequest object.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>ajaxPrefilter()</code></dt>
			<dd>Accepts a function in its argument, and can accept a string containing one or more (space-separated) data types as its first argument, preceding the function. Runs a function to specify options for future AJAX requests that will not need to be specified by each request in the script. If provided with data types, options prefiltering will only be done for AJAX requests targeted at those data types. The function may have up to three arguments of any name, which will be used as aliases for the current options set, the options originally provided to the <code>ajax()</code> method without prefiltering or custom settings being applied yet, and the <code>jqXHR</code> object associated with the request (the jQuery library's custom superset of the normal <code>XMLHttpRequest</code> containing additional properties), respectively.</dd>
			<dt><code>ajaxSetup()</code></dt>
			<dd>Accepts all of the same parameters <code>ajax()</code> does, in the same format, and makes the settings provided the default for future AJAX requests on this page. Note that this only applies to AJAX requests performed through jQuery.</dd>
			<dt><code>ajaxTransport()</code></dt>
			<dd>Accepts a data type and a function in its argument, and registers that function to be used in the creation of transport objects for handling future <code>ajax()</code> requests for the specified data type. The function must return an object with the necessary properties to work as a transport, and may have up to three arguments of any name, which will be used as aliases for the options used in the AJAX request, the options originally provided to the <code>ajax()</code> method without prefiltering or custom settings being applied yet, and the <code>jqXHR</code> object associated with the request (the jQuery library's custom superset of the normal <code>XMLHttpRequest</code> containing additional properties), respectively.</dd>
			<dt><code>get()</code></dt>
			<dd>Accepts a URL in its argument, and can also accept additional data to be sent to the server, a function to be run after the request is completed, and a data type expected of the response. Sends a HTTP GET AJAX request to the server and loads data from the specified URL. The function may have up to three arguments of any name, which will be used as aliases for the data loaded by the request, the status of the request (which may be <code>"success"</code>, <code>"notmodified"</code>, <code>"error"</code>, <code>"timeout"</code>, or <code>"parsererror"</code>), and the XMLHttpRequest object associated with the AJAX request, respectively.</dd>
			<dt><code>getJSON()</code></dt>
			<dd>Accepts a URL in its argument, and can also accept additional data to be sent to the server, as well as a function to be run after the request is completed. Sends an AJAX request to the server and loads JSON data from the specified URL. The function may have up to three arguments of any name, which will be used as aliases for the JSON data loaded by the request, the status of the request (which may be <code>"success"</code>, <code>"notmodified"</code>, <code>"error"</code>, <code>"timeout"</code>, or <code>"parsererror"</code>), and the XMLHttpRequest object associated with the AJAX request, respectively.</dd>
			<dt><code>getScript()</code></dt>
			<dd>Accepts a URL in its argument, and can accept a function to be run after the request is completed. Sends an AJAX request to the server and loads a JavaScript script from the specified  URL, and runs it if the request is successful. The function may have up to two arguments of any name, which will be used as aliases for the data returned by the request and the status of the request (which may be <code>"success"</code>, <code>"notmodified"</code>, <code>"error"</code>, <code>"timeout"</code>, or <code>"parsererror"</code>), respectively.</dd>
			<dt><code>param()</code></dt>
			<dd>Accepts an array or object in its argument, and can accept a boolean value; this method returns a serialized form of an object or array, i.e. a string containing all of its entries or properties separated by <code>&amp;</code> symbols. If provided with a <code>true</code> value as its second argument, it will use the older style of serialization, where objects within objects would not be fully serialized.</dd>
			<dt><code>post()</code></dt>
			<dd>As <code>get()</code>, except it's a HTTP POST request instead of HTTP GET.</dd>
		</dl>
	</section>
	<section>
		<h4>Document AJAX Methods:</h4>
		<p>These methods must be called with a document object selected.</p>
		<dl>
			<dt><code>ajaxComplete()</code></dt>
			<dd>Accepts a function in its argument, and runs the function when an AJAX request is completed, whether successfully or not. The function may have up to three arguments of any name, which will be used as aliases for the event object which triggered the function, the <code>XMLHttpRequest</code> associated with the AJAX request, and an object containing the parameters used in the AJAX request as properties, respectively.</dd>
			<dt><code>ajaxError()</code></dt>
			<dd>Accepts a function in its argument, and runs the function when an AJAX request fails. The function may have up to four arguments of any name, which will be used as aliases for the event object which triggered the function, the <code>XMLHttpRequest</code> associated with the AJAX request, the options used in the AJAX request, and the JavaScript exception thrown by the error (if any), respectively.</dd>
			<dt><code>ajaxSend()</code></dt>
			<dd>Accepts a function in its argument, and runs the function when an AJAX request is about to be sent. The function may have up to three arguments of any name, which will be used as aliases for the event object which triggered the function, the <code>XMLHttpRequest</code> associated with the AJAX request, and the options used in the AJAX request, respectively.</dd>
			<dt><code>ajaxStart()</code></dt>
			<dd>Accepts a function in its argument, and runs the function when an AJAX request is about to start.</dd>
			<dt><code>ajaxStop()</code></dt>
			<dd>Accepts a function in its argument, and runs the function when all pending AJAX requests have completed and no more are in the queue.</dd>
			<dt><code>ajaxSuccess()</code></dt>
			<dd>Accepts a function in its argument, and runs the function when an AJAX request is completed successfully. The function may have up to three arguments of any name, which will be used as aliases for the event object which triggered the function, the <code>XMLHttpRequest</code> associated with the AJAX request, and the options used in the AJAX request, respectively.</dd>
		</dl>
	</section>
	<section>
		<h4>AJAX Methods:</h4>
		<p>These methods may be called upon any element, though they may not be applicable in many cases.</p>
		<dl>
			<dt><code>load()</code></dt>
			<dd>Accepts a URL as its first argument, and can also accept additional data to be sent to the server, as well as a function to be run after the request is completed. Sends an AJAX request to the server, loads data from the specified URL, and replaces the contents of the currently selected element(s) with the loaded data. This will be a HTTP GET request by default, unless the data argument is provided with an object, in which case it will be a HTTP POST request. The function may have up to three arguments of any name, which will be used as aliases for the data loaded by the request, the status of the request (which may be <code>"success"</code>, <code>"notmodified"</code>, <code>"error"</code>, <code>"timeout"</code>, or <code>"parsererror"</code>), and the XMLHttpRequest object associated with the AJAX request, respectively.</dd>
			<dt><code>serialize</code></dt>
			<dd>Takes the values of the <code>name</code> and <code>value</code> attributes from selected form sub-element(s) and/or associated elements of a selected <code>&lt;form&gt;</code>, and returns a string containing those values in a URL-encoded format, with non-ASCII characters escaped.</dd>
			<dt><code>serializeArray()</code></dt>
			<dd>Takes the values of the <code>name</code> and <code>value</code> attributes from selected form sub-element(s) and/or associated elements of a selected <code>&lt;form&gt;</code>, and returns an array wherein each selected element is an object of which <code>name</code> and <code>value</code> are both properties.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
