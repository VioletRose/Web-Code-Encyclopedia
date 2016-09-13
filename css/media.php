<?php
    $PAGE_NAME = '@media';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This page is about a CSS rule and the special selectors it uses.</p>
		<p>This rule is used to encompass CSS properties that are meant to only be used if certain things are true of the device reading the page. The most common use is to have different rules for very small screen sizes, but many other conditions can be applied as well.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#mediaP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;border: solid blue;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;@media screen and (max-width: 1080px) {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#mediaP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-color: red;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p id="mediaP"&gt;This paragraph's border will appear blue unless the viewport is 1080px wide or less, which will make it become red.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#mediaP {
				border: solid blue;
				}
				@media screen and (max-width: 1080px) {
					#mediaP {
						border-color: red;
					}
				}
			</style>
			<p id="mediaP">This paragraph's border will appear blue unless the viewport is 1080px wide or less, which will make it become red.</p>
		</figure>
	</section>
	<section>
		<h4>Syntax of <code>@media</code>:</h4>
		<p>The syntax used by this rule is unique. It accepts a number of media "queries", divided into media types and media features, which function equivalently to selectors, in addition to logical operators between them. Then, CSS code is nested inside of the rule, in exactly the same format as the normal stylesheet. Care must be taken to place <code>@media</code> lower in the stylesheet than any other rules targeting the same selectors as the code inside of <code>@media</code>, since the fact that that code is part of a more specific rule does <em>not</em> give it higher specificity, and the last one on the sheet wins out.
	</section>
	<section>
		<h4>Logical operators accepted by <code>@media</code>:</h4>
		<dl>
			<dt><code>and</code></dt>
			<dd>&#10551; Serves as a bridge between two media queries, resulting in them both needing to be true for the rule to apply.</dd>
			<dt><code>not</code></dt>
			<dd>&#10551; Specifies that the rule will not be applied if the following media selector is true.</dd>
			<dt><code>only</code></dt>
			<dd>&#10551; An archaic "operator" specifying that this rule should only apply if the browser has a full implementation of CSS level 3, to prevent situations where one of the media queries used can't be checked, but another can.</dd>
			<dt><code>or</code></dt>
			<dd>&#10551; Specifies that only one of the preceding and following media queries needs to be true, rather than both.</dd>
		</dl>
	</section>
	<section>
		<h4>Media types:</h4>
		<dl>
			<dt><code>all</code></dt>
			<dd>&#10551; All media devices.</dd>
			<dt><code>print</code></dt>
			<dd>&#10551; Printers.</dd>
			<dt><code>screen</code></dt>
			<dd>&#10551; Any form of display screen, such as a monitor, smartphone, tablet etc.</dd>
			<dt><code>speech</code></dt>
			<dd>&#10551; Screenreaders, devices which read the page's contents out loud.</dd>
		</dl>
	</section>
	<section>
		<h4>Media features:</h4>
		<dl>
			<dt><code>(aspect-ratio: <var>x-ratio</var>:<var>y-ratio</var>)</code></dt>
			<dd>&#10551; Accepts <code>max-</code> and <code>min-</code> prefixes. The ratio between the width and the height of the viewport. For example, a 1920x1080 display is targeted as <code>16:9</code>, because whether you divide the width by 16 or the height by 9, the result is 120.</dd>
			<dt><code>(color: <var>bpcc</var>)</code></dt>
			<dd>&#10551; Accepts <code>max-</code> and <code>min-</code> prefixes. The number of bits per color component (red, green, blue, and alpha channel if applicable,) used by the device. For example, most modern screens have <code>32</code> bit color, with 8 bits each used to display red, green, blue, and transparency.</dd>
			<dt><code>(color-index: <var>colors</var>)</code></dt>
			<dd>&#10551; Accepts <code>max-</code> and <code>min-</code> prefixes. The maximum number of individual colors the device can display.</dd>
			<dt><code>(device-aspect-ratio: <var>x-ratio</var>:<var>y-ratio</var>)</code></dt>
			<dd>&#10551; Accepts <code>max-</code> and <code>min-</code> prefixes. Similar to <code>aspect-ratio</code>, but rather than the viewport, it is checking the size of the actual device's display.</dd>
			<dt><code>(device-height: <var>height</var>)</code></dt>
			<dd>&#10551; Accepts <code>max-</code> and <code>min-</code> prefixes. The height of the device's display, in pixels.</dd>
			<dt><code>(device-width: <var>width</var>)</code></dt>
			<dd>&#10551; Accepts <code>max-</code> and <code>min-</code> prefixes. The width of the device's display, in pixels.</dd>
			<dt><code>(grid: <var>grid</var>)</code></dt>
			<dd>&#10551; Whether the device displays as grid or bitmap; <code>0</code> for bitmap, <code>1</code> for grid.</dd>
			<dt><code>(height: <var>height</var>)</code></dt>
			<dd>&#10551; Accepts <code>max-</code> and <code>min-</code> prefixes. The height of the viewport, in pixels.</dd>
			<dt><code>(monochrome: <var>bpp</var>)</code></dt>
			<dd>&#10551; Accepts <code>max-</code> and <code>min-</code> prefixes. The number of bits per pixel, used to display shades of gray on monochrome devices. For example, <code>1</code> bit monochrome would be exclusively black or white.</dd>
			<dt><code>(resolution: <var>resolution</var>)</code></dt>
			<dd>&#10551; Accepts <code>max-</code> and <code>min-</code> prefixes. Notably different from the normal use of the word resolution, with values such as 1920x1080, in this case the CSS expects a measurement in dpi (dots per inch) or dpcm (dots per centimeter).</dd>
			<dt><code>(scan: <var>process</var>)</code></dt>
			<dd>&#10551; The scanning process used by tv-type devices. Can be <code>interlace</code> or <code>progressive</code>.</dd>
			<dt><code>(width: <var>width</var>)</code></dt>
			<dd>&#10551; Accepts <code>max-</code> and <code>min-</code> prefixes. The width of the viewport, in pixels.</dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
