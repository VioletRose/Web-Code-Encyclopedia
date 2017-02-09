<?php
    $PAGE_NAME = '@font-face';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This page is about a CSS rule and the descriptors it sets.</p>
		<p>This rule defines a new font family for your website. Normally the <code>font-family</code> property will only find fonts installed on the user's system, but with this rule, a new font can be defined and be certain to work reliably as long as the font itself is set up properly, and the URL continues to work.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;@font-face {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-family: 'Great Vibes';
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-style: normal;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-weight: 400;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;src: url(https://fonts.gstatic.com/s/greatvibes/v4/6q1c0ofG6NKsEhAc2eh-3Y4P5ICox8Kq3LLUNMylGO4.woff2);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#greatVibesP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-family: 'Great Vibes', cursive;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-size: 1.5em;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p id="greatVibesP"&gt;This is the font Great Vibes, a cursive font, courtesy of &lt;a href="https://www.google.com/fonts"&gt;Google Fonts&lt;/a&gt;.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				@font-face {
					font-family: 'Great Vibes';
					font-style: normal;
					font-weight: 400;
					src: url(https://fonts.gstatic.com/s/greatvibes/v4/6q1c0ofG6NKsEhAc2eh-3Y4P5ICox8Kq3LLUNMylGO4.woff2);
					unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
				}
				#greatVibesP {
					font-family: 'Great Vibes', cursive;
					font-size: 1.5em;
				}
			</style>
			<p id="greatVibesP">This is the font Great Vibes, a cursive font, courtesy of <a href="https://www.google.com/fonts">Google Fonts</a>.</p>
		</figure>
	</section>
	<section>
		<h4>Descriptors used by <code>@font-face</code>:</h4>
		<dl>
			<dt><code>font-family</code></dt>
			<dd>Defines the name of the font.</dd>
			<dt><code>src</code></dt>
			<dd>Defines the URL of the font file.</dd>
			<dt><code>font-stretch</code></dt>
			<dd>Defines how the font will be stretched by default. <strong>No browser currently supports this descriptor.</strong></dd>
			<dt><code>font-style</code></dt>
			<dd>Defines how the font will be styled by default.</dd>
			<dt><code>font-weight</code></dt>
			<dd>Defines the font's default weight.</dd>
			<dt><code>unicode-range</code></dt>
			<dd>Defines the range of Unicode characters the font supports. See <a href="http://www.unicode.org/Public/UCD/latest/ucd/Blocks.txt">here</a> for further information on unicode ranges. Multiple values may be used, separated by a comma and a space.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>font-family</code>:</h4>
		<dl>
			<dt><code>'<var>name</var>'</code></dt>
			<dd>The name of the font, which will be used in <code>font-family</code>.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>src</code>:</h4>
		<dl>
			<dt><code>url(<var>URL</var>)</code></dt>
			<dd>URL variable. The URL of the font file to be used. Valid file formats are TTF, OTF, WOFF, WOFF2, SVG, and EOT, though only WOFF is fully compatible with all browsers.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>font-stretch</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>The default value.</dd>
			<dt><code>condensed</code></dt>
			<dd>Condensed letters.</dd>
			<dt><code>ultra-condensed</code></dt>
			<dd>Ultra-condensed letters.</dd>
			<dt><code>extra-condensed</code></dt>
			<dd>Extra-condensed letters.</dd>
			<dt><code>semi-condensed</code></dt>
			<dd>Semi-condensed letters.</dd>
			<dt><code>expanded</code></dt>
			<dd>Expanded letters.</dd>
			<dt><code>semi-expanded</code></dt>
			<dd>Semi-expanded letters.</dd>
			<dt><code>extra-expanded</code></dt>
			<dd>Extra-expanded letters.</dd>
			<dt><code>ultra-expanded</code></dt>
			<dd>Ultra-expanded letters.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>font-style</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>The default value. Normal, unslanted letters.</dd>
			<dt><code>italic</code></dt>
			<dd>Italic, right-slanted letters.</dd>
			<dt><code>oblique</code></dt>
			<dd>Oblique letters, similar to italic, but with a slightly more extreme slant.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>font-weight</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>The default value, equivalent to 400. Letters of the standard thickness.</dd>
			<dt><code>bold</code></dt>
			<dd>Equivalent to 700. Bold letters.</dd>
			<dt><code><var>100-900</var></code></dt>
			<dd>Numeric variable, in multiples of 100, from 100 to 900. A specific font weight.</dd>
		</dl>
	</section>
		<section>
		<h4>Accepted values of <code>unicode-range</code>:</h4>
		<dl>
			<dt><code>U+<var>start</var>-<var>end</var></code></dt>
			<dd>
				&#10551; The Unicode range the font supports.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>start</var></code></dt>
						<dd>Required hexadecimal variable, in Unicode ranges, defaults to <code>0</code>. The start of the Unicode range the font supports; with most fonts, this will be <code>0</code>.</dd>
						<dt><code><var>end</var></code></dt>
						<dd>Required hexadecimal variable, in Unicode ranges, defaults to <code>10FFFF</code>. The end of the Unicode range the font supports.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>U+<var>character</var></code></dt>
			<dd>Optional hexadeximal variable, in Unicode characters. A specific unicode character the font supports.</dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
