<?php
	$PAGE_NAME = 'Navigator';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>The Navigator object represents the user's web browser. Its properties and method are used for gleaning information about the browser, its version, and its settings, usually in order to properly implement browser-specific behavior or workarounds.</p>
	</section>
	<section>
		<h4>Navigator Properties:</h4>
		<p>Note that as a result of problems with browser support early in the life cycle of the internet, some properties that would otherwise be useful for determining which browser is in use have been standardized across all browsers in an attempt to render the browser detection practice known as "user agent sniffing" obsolete.</p>
		<dl>
			<dt><code>appCodeName</code></dt>
			<dd>&#10551; A string containing the code name of the browser; misleadingly, all modern browsers will return <code>Mozilla</code>, regardless of developer.</dd>
			<dt><code>appName</code></dt>
			<dd>&#10551; A string containing the name of the browser; misleadingly, this is not actually a valid way to detect the browser, as while IE 10 and earlier return <code>Microsoft Internet Explorer</code>, and Opera returns <code>Opera</code>, modern browsers all return <code>Netscape</code>,</dd>
			<dt><code>appVersion</code></dt>
			<dd>&#10551; A string containing the browser's internal version information.</dd>
			<dt><code>cookieEnabled</code></dt>
			<dd>&#10551; A boolean set to <code>true</code> if the current domain is allowed to set browser cookies, and <code>false</code> if it is not.</dd>
			<dt><code>geolocation</code></dt>
			<dd>&#10551; A Geolocation object containing the user's latitude and longitude; note that geolocation using this method will not work unless the user grants permission.</dd>
			<dt><code>language</code></dt>
			<dd>&#10551; A language code indicating the locale of the browser.</dd>
			<dt><code>onLine</code></dt>
			<dd>&#10551; A boolean set to <code>true</code> if the browser is working online, or <code>false</code> if it is working offline.</dd>
			<dt><code>platform</code></dt>
			<dd>&#10551; The platform for which the browser was compiled.</dd>
			<dt><code>product</code></dt>
			<dd>&#10551; The engine name of the browser; misleadingly, all modern browsers return <code>Gecko</code>.</dd>
			<dt><code>userAgent</code></dt>
			<dd>&#10551; The userAgent header the browser sent to the server.</dd>
		</dl>
	</section>
	<section>
		<h4>Navigator Methods:</h4>
		<dl>
			<dt><code>javaEnabled()</code></dt>
			<dd>&#10551; Returns <code>true</code> if Java is installed and enabled in the browser, otherwise, returns <code>false</code>.</dd>
		</dl>
	</section>
	<section>
		<h4>Geolocation Methods:</h4>
		<dl>
			<dt><code>getCurrentPosition()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>watchPosition()</code></dt>
			<dd>&#10551; </dd>
			<dt><code>clearWatch()</code></dt>
			<dd>&#10551; </dd>
		</dl>
	</section>
	<section>
		<h4>Position Properties:</h4>
		<dl>
			<dt><code>coords</code></dt>
			<dd>&#10551; A Coordinates object containing the current location data.</dd>
			<dt><code>timestamp</code></dt>
			<dd>&#10551; A DOMTimeStamp representing the time the location was queried, in milliseconds from "zero time", which equates to 1970/01/01 00:00:00 UTC.</dd>
		</dl>
	</section>
	<section>
		<h4>Coordinates Properties:</h4>
		<dl>
			<dt><code>latitude</code></dt>
			<dd>&#10551; A number representing latitude in decimal degrees.</dd>
			<dt><code>longitude</code></dt>
			<dd>&#10551; A number representing longitude in decimal degrees.</dd>
			<dt><code>altitude</code></dt>
			<dd>&#10551; A number representing metric altitude relative to sea level. This may return <code>null</code> if the browser cannot determine this data.</dd>
			<dt><code>accuracy</code></dt>
			<dd>&#10551; A number representing the accuracy (or how far off the latitude and longitude might be) of the coordinates, in meters.</dd>
			<dt><code>altitudeAccuracy</code></dt>
			<dd>&#10551; A number representing the accuracy of the altitude, in meters. This may return <code>null</code> if the browser cannot determine this data.</dd>
			<dt><code>heading</code></dt>
			<dd>&#10551; A number representing which direction the device is currently judged to be moving, in degrees relative to 0 (true north). This may return <code>NaN</code> if <code>Coordinates.speed</code> is <code>0</code>, or <code>null</code> if the browser cannot determine this data.</dd>
			<dt><code>speed</code></dt>
			<dd>&#10551; A number representing the current traveling speed of the device in meters per second. This may return <code>null</code> if the browser cannot determine this data.</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
