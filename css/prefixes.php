<?php
    $PAGE_NAME = 'Prefixes';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Prefixes, alternately known as CSS prefixes, vendor prefixes, or browser prefixes, are prefixes that may be appended to some properties in order to allow support for them in older versions of specific browsers. CSS is not a static thing, it changes; the current version used by the web today is already CSS 3. And as new properties or functionalities are proposed and accepted for inclusion into CSS, web browsers need to code them in to keep up. Different browsers move at different speeds to implement the new ideas (this is what is meant when a browser is said to not keep up with web standards), but in many cases, a beta version of the property was available for use before the full property was implemented. Meaning, when a web browser with the beta property, but not the final version, loads a webpage where only the final version is specified, it won't work. But with a prefixed version of the property, requesting the beta version, it will. For newer properties and in certain cases of limited support, it is recommended to define the property multiple times, first with the desired prefixes and last with the normal property below them.</p>
		<p>Below, you will find a table of properties which had or have prefixed versions. Each entry will show which browser versions began supporting the listed prefix, and which versions no longer require the prefix, if applicable.</p>
	</section>
	<section class="cssTableSection">
		<table border="1" class="styledTable">
			<caption>Vendor Prefixes</caption>
			<thead>
				<tr>
					<th>Property</th>
					<th><code>-webkit-</code></th>
					<th><code>-moz-</code></th>
					<th><code>-ms-</code></th>
					<th><code>-o-</code></th>
					<th>Full Support</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th><code>@keyframes</code></th>
					<td>Chrome 4.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 5.0</td>
					<td>N/A</td>
					<td>Opera 12.0</td>
					<td>Chrome 43.0, Safari 9.0, Opera 30.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>align-content</code></th>
					<td>Safari 7.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Safari 9.0</td>
				</tr>
				<tr>
					<th><code>align-items</code></th>
					<td>Safari 7.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Safari 9.0</td>
				</tr>
				<tr>
					<th><code>align-self</code></th>
					<td>Safari 7.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Safari 9.0</td>
				</tr>
				<tr>
					<th><code>animation</code></th>
					<td>Chrome 4.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 5.0</td>
					<td>N/A</td>
					<td>Opera 12.0</td>
					<td>Chrome 43.0, Safari 9.0, Opera 30.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>animation-delay</code></th>
					<td>Chrome 4.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 5.0</td>
					<td>N/A</td>
					<td>Opera 12.0</td>
					<td>Chrome 43.0, Safari 9.0, Opera 30.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>animation-direction</code></th>
					<td>Chrome 4.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 5.0</td>
					<td>N/A</td>
					<td>Opera 12.0</td>
					<td>Chrome 43.0, Safari 9.0, Opera 30.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>animation-duration</code></th>
					<td>Chrome 3.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 5.0</td>
					<td>N/A</td>
					<td>Opera 12.0</td>
					<td>Chrome 43.0, Safari 9.0, Opera 30.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>animation-fill-mode</code></th>
					<td>Chrome 4.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 5.0</td>
					<td>N/A</td>
					<td>Opera 12.0</td>
					<td>Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>animation-iteration-count</code></th>
					<td>Chrome 4.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 5.0</td>
					<td>N/A</td>
					<td>Opera 12.0</td>
					<td>Chrome 43.0, Safari 9.0, Opera 30.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>animation-name</code></th>
					<td>Chrome 4.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 5.0</td>
					<td>N/A</td>
					<td>Opera 12.0</td>
					<td>Chrome 43.0, Safari 9.0, Opera 30.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>animation-play-state</code></th>
					<td>Chrome 4.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 5.0</td>
					<td>N/A</td>
					<td>Opera 12.0</td>
					<td>Chrome 43.0, Safari 9.0, Opera 30.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>animation-timing-function</code></th>
					<td>Chrome 4.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 5.0</td>
					<td>N/A</td>
					<td>Opera 12.0</td>
					<td>Chrome 43.0, Safari 9.0, Opera 30.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>backface-visibility</code></th>
					<td>Chrome 12.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 10.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 36.0, Safari 9.0, Opera 23.0</td>
				</tr>
				<tr>
					<th><code>background-size</code></th>
					<td>Chrome 1.0, Safari 3.0</td>
					<td>Firefox 3.6</td>
					<td>N/A</td>
					<td>Opera 10.0</td>
					<td>Chrome 4.0, Safari 4.1, Firefox 4.0, Opera 10.5</td>
				</tr>
				<tr>
					<th><code>border-image</code></th>
					<td>Chrome 4.0, Safari 3.1</td>
					<td>Firefox 3.5</td>
					<td>N/A</td>
					<td>Opera 11.0</td>
					<td>Chrome 16.0, Safari 6.0, Firefox 15.0, Opera 15.0</td>
				</tr>
				<tr>
					<th><code>border-radius</code></th>
					<td>Chrome 4.0, Safari 3.1</td>
					<td>Firefox 3.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 5.0, Safari 5.0, Firefox 4.0</td>
				</tr>
				<tr>
					<th><code>box-shadow</code></th>
					<td>Chrome 4.0, Safari 3.1</td>
					<td>Firefox 3.5</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 10.0, Safari 5.1, Firefox 4.0</td>
				</tr>
				<tr>
					<th><code>box-sizing</code></th>
					<td>Chrome 4.0, Safari 3.2</td>
					<td>Firefox 2.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 10.0, Safari 5.1, Firefox 29.0</td>
				</tr>
				<tr>
					<th><code>column-count</code></th>
					<td>Chrome 4.0, Safari 3.1, Opera 15.0</td>
					<td>Firefox 2.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 50.0, Safari 9.0, Opera 37.0</td>
				</tr>
				<tr>
					<th><code>column-fill</code></th>
					<td>N/A</td>
					<td>Firefox 13.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>N/A</td>
				</tr>
				<tr>
					<th><code>column-gap</code></th>
					<td>Chrome 4.0, Safari 3.1, Opera 15.0</td>
					<td>Firefox 2.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 50.0, Safari 9.0, Opera 37.0</td>
				</tr>
				<tr>
					<th><code>column-rule</code></th>
					<td>Chrome 4.0, Safari 3.1, Opera 15.0</td>
					<td>Firefox 2.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 50.0, Safari 9.0, Opera 37.0</td>
				</tr>
				<tr>
					<th><code>column-rule-color</code></th>
					<td>Chrome 4.0, Safari 3.1, Opera 15.0</td>
					<td>Firefox 2.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 50.0, Safari 9.0, Opera 37.0</td>
				</tr>
				<tr>
					<th><code>column-rule-style</code></th>
					<td>Chrome 4.0, Safari 3.1, Opera 15.0</td>
					<td>Firefox 2.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 50.0, Safari 9.0, Opera 37.0</td>
				</tr>
				<tr>
					<th><code>column-rule-width</code></th>
					<td>Chrome 4.0, Safari 3.1, Opera 15.0</td>
					<td>Firefox 2.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 50.0, Safari 9.0, Opera 37.0</td>
				</tr>
				<tr>
					<th><code>column-span</code></th>
					<td>Chrome 4.0, Safari 3.1, Opera 15.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 50.0, Safari 9.0, Opera 37.0</td>
				</tr>
				<tr>
					<th><code>column-width</code></th>
					<td>Chrome 4.0, Safari 3.1, Opera 15.0</td>
					<td>Firefox 2.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 50.0, Safari 9.0, Opera 37.0</td>
				</tr>
				<tr>
					<th><code>filter</code></th>
					<td>Chrome 18.0, Safari 6.0, Opera 15.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Safari 9.1</td>
				</tr>
				<tr>
					<th><code>flex</code></th>
					<td>Chrome 21.0, Safari 6.1</td>
					<td>Firefox 18.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 29.0, Safari 9.0, Firefox 28.0</td>
				</tr>
				<tr>
					<th><code>flex-basis</code></th>
					<td>Chrome 21.0, Safari 6.1</td>
					<td>Firefox 18.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 29.0, Safari 9.0, Firefox 28.0</td>
				</tr>
				<tr>
					<th><code>flex-direction</code></th>
					<td>Chrome 21.0, Safari 6.1</td>
					<td>Firefox 18.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 29.0, Safari 9.0, Firefox 28.0</td>
				</tr>
				<tr>
					<th><code>flex-flow</code></th>
					<td>Chrome 21.0, Safari 6.1</td>
					<td>Firefox 18.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 29.0, Safari 9.0, Firefox 28.0</td>
				</tr>
				<tr>
					<th><code>flex-grow</code></th>
					<td>Chrome 21.0, Safari 6.1</td>
					<td>Firefox 18.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 29.0, Safari 9.0, Firefox 28.0</td>
				</tr>
				<tr>
					<th><code>flex-shrink</code></th>
					<td>Chrome 21.0, Safari 6.1</td>
					<td>Firefox 18.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 29.0, Safari 9.0, Firefox 28.0</td>
				</tr>
				<tr>
					<th><code>flex-wrap</code></th>
					<td>Chrome 21.0, Safari 6.1</td>
					<td>Firefox 18.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 29.0, Safari 9.0, Firefox 28.0</td>
				</tr>
				<tr>
					<th><code>justify-content</code></th>
					<td>Chrome 21.0, Safari 6.1</td>
					<td>Firefox 18.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 29.0, Safari 9.0, Firefox 28.0</td>
				</tr>
				<tr>
					<th><code>order</code></th>
					<td>Chrome 21.0, Safari 6.1</td>
					<td>Firefox 18.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 29.0, Safari 9.0, Firefox 28.0</td>
				</tr>
				<tr>
					<th><code>overflow-x</code></th>
					<td>N/A</td>
					<td>N/A</td>
					<td>Internet Explorer 8.0</td>
					<td>N/A</td>
					<td>Internet Explorer 9.0</td>
				</tr>
				<tr>
					<th><code>overflow-y</code></th>
					<td>N/A</td>
					<td>N/A</td>
					<td>Internet Explorer 8.0</td>
					<td>N/A</td>
					<td>Internet Explorer 9.0</td>
				</tr>
				<tr>
					<th><code>perspective</code></th>
					<td>Chrome 12.0, Safari 4.0.3, Opera 15.0</td>
					<td>Firefox 10.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 36.0, Safari 9.0, Opera 23.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>perspective-origin</code></th>
					<td>Chrome 12.0, Safari 4.0.3, Opera 15.0</td>
					<td>Firefox 10.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 36.0, Safari 9.0, Opera 23.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>resize</code></th>
					<td>N/A</td>
					<td>Firefox 4.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Firefox 5.0</td>
				</tr>
				<tr>
					<th><code>tab-size</code></th>
					<td>N/A</td>
					<td>Firefox 4.0</td>
					<td>N/A</td>
					<td>Opera 10.6</td>
					<td>Opera 15.0</td>
				</tr>
				<tr>
					<th><code>text-align-last</code></th>
					<td>N/A</td>
					<td>Firefox 12.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>N/A</td>
				</tr>
				<tr>
					<th><code>text-decoration-color</code></th>
					<td>N/A</td>
					<td>Firefox 6.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>N/A</td>
				</tr>
				<tr>
					<th><code>text-decoration-line</code></th>
					<td>N/A</td>
					<td>Firefox 6.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>N/A</td>
				</tr>
				<tr>
					<th><code>text-decoration-style</code></th>
					<td>N/A</td>
					<td>Firefox 6.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>N/A</td>
				</tr>
				<tr>
					<th><code>transform</code> (2d)</th>
					<td>Chrome 4.0, Safari 3.2, Opera 15.0</td>
					<td>Firefox 3.5</td>
					<td>Internet Explorer 9.0</td>
					<td>Opera 10.5</td>
					<td>Chrome 36.0, Safari 9.0, Opera 23.0, Firefox 16.0, Internet Explorer 10.0</td>
				</tr>
				<tr>
					<th><code>transform</code> (3d)</th>
					<td>Chrome 12.0, Safari 4.0, Opera 15.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 36.0, Safari 9.0, Opera 23.0</td>
				</tr>
				<tr>
					<th><code>transform-origin</code> (without z-axis)</th>
					<td>Chrome 4.0, Safari 3.2, Opera 15.0</td>
					<td>Firefox 3.5</td>
					<td>Internet Explorer 9.0</td>
					<td>Opera 10.5</td>
					<td>Chrome 36.0, Safari 9.0, Opera 23.0, Firefox 16.0, Internet Explorer 10.0</td>
				</tr>
				<tr>
					<th><code>transform-origin</code> (with z-axis)</th>
					<td>Chrome 12.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 10.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 36.0, Safari 9.0, Opera 23.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>transform-style</code></th>
					<td>Chrome 12.0, Safari 4.0, Opera 15.0</td>
					<td>Firefox 10.0</td>
					<td>N/A</td>
					<td>N/A</td>
					<td>Chrome 36.0, Safari 9.0, Opera 23.0, Firefox 16.0</td>
				</tr>
				<tr>
					<th><code>transition</code></th>
					<td>Chrome 4.0, Safari 3.1</td>
					<td>Firefox 4.0</td>
					<td>N/A</td>
					<td>Opera 10.5</td>
					<td>Chrome 26.0, Safari 6.1, Firefox 16.0, Opera 12.1</td>
				</tr>
				<tr>
					<th><code>transition-delay</code></th>
					<td>Chrome 4.0, Safari 3.1</td>
					<td>Firefox 4.0</td>
					<td>N/A</td>
					<td>Opera 10.5</td>
					<td>Chrome 26.0, Safari 6.1, Firefox 16.0, Opera 12.1</td>
				</tr>
				<tr>
					<th><code>transition-duration</code></th>
					<td>Chrome 4.0, Safari 3.1</td>
					<td>Firefox 4.0</td>
					<td>N/A</td>
					<td>Opera 10.5</td>
					<td>Chrome 26.0, Safari 6.1, Firefox 16.0, Opera 12.1</td>
				</tr>
				<tr>
					<th><code>transition-property</code></th>
					<td>Chrome 4.0, Safari 3.1</td>
					<td>Firefox 4.0</td>
					<td>N/A</td>
					<td>Opera 10.5</td>
					<td>Chrome 26.0, Safari 6.1, Firefox 16.0, Opera 12.1</td>
				</tr>
				<tr>
					<th><code>transition-timing-function</code></th>
					<td>Chrome 4.0, Safari 3.1</td>
					<td>Firefox 4.0</td>
					<td>N/A</td>
					<td>Opera 10.5</td>
					<td>Chrome 26.0, Safari 6.1, Firefox 16.0, Opera 12.1</td>
				</tr>
		</table>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
