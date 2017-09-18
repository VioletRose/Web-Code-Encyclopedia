<?php
	$PAGE_NAME = 'Navigator';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>The Navigator object represents the user's web browser. Its properties and method are used for gleaning information about the browser, its version, and its settings, usually in order to properly implement browser-specific behavior or workarounds.</p>
	</section>
	<section>
		<h4>Navigator Object Properties:</h4>
		<p>Note that as a result of problems with browser support early in the life cycle of the internet, some properties that would otherwise be useful for determining which browser is in use have been standardized across all browsers in an attempt to render the browser detection practice known as "user agent sniffing" obsolete.</p>
		<dl>
			<dt><code>appCodeName</code></dt>
			<dd>A string containing the code name of the browser; misleadingly, all modern browsers will return <code>Mozilla</code>, regardless of developer.</dd>
			<dt><code>appName</code></dt>
			<dd>A string containing the name of the browser; misleadingly, this is not actually a valid way to detect the browser, as while IE 10 and earlier return <code>Microsoft Internet Explorer</code>, and Opera returns <code>Opera</code>, modern browsers all return <code>Netscape</code>,</dd>
			<dt><code>appVersion</code></dt>
			<dd>A string containing the browser's internal version information.</dd>
			<dt><code>cookieEnabled</code></dt>
			<dd>A boolean set to <code>true</code> if the current domain is allowed to set browser cookies, and <code>false</code> if it is not.</dd>
			<dt><code>geolocation</code></dt>
			<dd>A Geolocation object containing the user's latitude and longitude; note that geolocation using this method will not work unless the user grants permission.</dd>
			<dt><code>language</code></dt>
			<dd>A language code indicating the locale of the browser.</dd>
			<dt><code>onLine</code></dt>
			<dd>A boolean set to <code>true</code> if the browser is working online, or <code>false</code> if it is working offline.</dd>
			<dt><code>platform</code></dt>
			<dd>The platform for which the browser was compiled.</dd>
			<dt><code>product</code></dt>
			<dd>The engine name of the browser; misleadingly, all modern browsers return <code>Gecko</code>.</dd>
			<dt><code>userAgent</code></dt>
			<dd>The userAgent header the browser sent to the server.</dd>
		</dl>
	</section>
	<section>
		<h4>Navigator Object Methods:</h4>
		<dl>
			<dt><code>javaEnabled()</code></dt>
			<dd>Returns <code>true</code> if Java is installed and enabled in the browser, otherwise, returns <code>false</code>.</dd>
		</dl>
	</section>
	<section>
		<h4>Geolocation Type Methods:</h4>
		<dl>
			<dt><code>getCurrentPosition()</code></dt>
			<dd>Accepts 1 to 2 functions in its argument, one required and one optional, as well as an optional <code>PositionOptions</code> object. The first function is run when the location query is successful, and only accepts one argument of any name which will be used as an alias for the <code>Position</code> object containing the location data. The second function runs if the location query is unsuccessful, and only accepts one argument of any name which will be used as an alias for the <code>PositionError</code> constant number containing the reason for the error (<code>1</code> for PERMISSION_DENIED if the page didn't have permission to query location, <code>2</code> for POSITION_UNAVAILABLE if the device returned an error while attempting to determine position, and <code>3</code> for TIMEOUT if the option was set to limit the amount of time the location query had to finish). If provided, the <code>PositionOptions</code> object changes the default behavior of the query.</dd>
			<dt><code>watchPosition()</code></dt>
			<dd>As <code>getCurrentPosition()</code>, except instead of running once, a listener is established to repeat the location query with the specified parameters each time the device's location changes; this method also returns an ID which can be used by <code>clearWatch()</code> to remove the listener.</dd>
			<dt><code>clearWatch()</code></dt>
			<dd>Accepts an ID provided by execution of the <code>watchPosition()</code> method in its argument, and removes the listener associated with that ID.</dd>
		</dl>
	</section>
	<section>
		<h4>Position Type Properties:</h4>
		<dl>
			<dt><code>coords</code></dt>
			<dd>A Coordinates object containing the current location data.</dd>
			<dt><code>timestamp</code></dt>
			<dd>A DOMTimeStamp representing the time the location was queried, in milliseconds from "zero time", which equates to 1970/01/01 00:00:00 UTC.</dd>
		</dl>
	</section>
	<section>
		<h4>PositionOptions Type Properties:</h4>
		<dl>
			<dt><code>enableHighAccuracy</code></dt>
			<dd>A boolean indicating whether or not the device should be using high-accuracy mode for its position (which can take longer or use more power). If <code>true</code>, high-accuracy mode will be used, but if <code>false</code>, a less accurate position will be returned using less time and power. Defaults to <code>false</code>.</dd>
			<dt><code>timeout</code></dt>
			<dd>How long the device has to provide location data before the query fails, as any positive number representing a number of milliseconds; defaults to <code>Infinity</code>.</dd>
			<dt><code>maximumAge</code></dt>
			<dd>How old cached location data on the device can be before it will not be accepted as valid (and the device will be required to attempt to return an un-cached position), as any positive number representing milliseconds; defaults to <code>0</code> which will not allow un-cached positions at all. If set to <code>Infinity</code>,</dd>
		</dl>
	</section>
	<section>
		<h4>Coordinates Type Properties:</h4>
		<dl>
			<dt><code>latitude</code></dt>
			<dd>A number representing latitude in decimal degrees.</dd>
			<dt><code>longitude</code></dt>
			<dd>A number representing longitude in decimal degrees.</dd>
			<dt><code>altitude</code></dt>
			<dd>A number representing metric altitude relative to sea level. This may return <code>null</code> if the browser cannot determine this data.</dd>
			<dt><code>accuracy</code></dt>
			<dd>A number representing the accuracy (or how far off the latitude and longitude might be) of the coordinates, in meters.</dd>
			<dt><code>altitudeAccuracy</code></dt>
			<dd>A number representing the accuracy of the altitude, in meters. This may return <code>null</code> if the browser cannot determine this data.</dd>
			<dt><code>heading</code></dt>
			<dd>A number representing which direction the device is currently judged to be moving, in degrees relative to 0 (true north). This may return <code>NaN</code> if <code>Coordinates.speed</code> is <code>0</code>, or <code>null</code> if the browser cannot determine this data.</dd>
			<dt><code>speed</code></dt>
			<dd>A number representing the current traveling speed of the device in meters per second. This may return <code>null</code> if the browser cannot determine this data.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
