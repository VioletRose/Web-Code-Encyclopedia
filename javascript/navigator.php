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
			<dd>&#10551; A boolean set to <code>true</code> if cookies are enabled in the browser, and <code>false</code> if they are not.</dd>
				<!--How can it actually tell? Does it just check whether any cookies are enabled, or does it have to be the domain the script is served from?-->
			<dt><code>geolocation</code></dt>
			<dd>&#10551; A Geolocation object containing the user's latitude and longitude; note that geolocation using this method will not work unless the user has enabled it.</dd>
				<!--What is a Geolocation object and where do I find documentation for it?-->
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
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
