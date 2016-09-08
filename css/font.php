<?php
    $PAGE_NAME = 'font';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the sub-properties it sets allow you to control how fonts look, within the specified element(s) or on the page as a whole.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#fontP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font: oblique  small-caps 100 large/normal 'Segoe UI', Arial, sans-serif;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p id="fontP"&gt;This font is very odd, but a good demonstration of what is possible with the right settings!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				#fontP {
					font: oblique  small-caps 100 large/normal 'Segoe UI', Arial, sans-serif;
				}
			</style>
			<p id="fontP">This font is very odd, but a good demonstration of what is possible with the right settings!</p>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>font</code>:</h4>
		<dl>
			<dt><code>font-style</code></dt>
			<dd>&#10551; Defines whether the font is italic or oblique.</dd>
			<dt><code>font-variant</code></dt>
			<dd>&#10551; Allows you to display text in capital letters, but preserving the height difference between uppercase and lowercase.</dd>
			<dt><code>font-weight</code></dt>
			<dd>&#10551; Defines the thickness of the font. Note that a great many fonts only support <code>normal</code> and <code>bold</code>, other values rendering as one of the two.</dd>
			<dt><code>font-size</code></dt>
			<dd>&#10551; Defines the size of the font.</dd>
			<dt><code>line-height</code></dt>
			<dd>&#10551; Defines line height, or how much space there is between multiple lines of text within the element.</dd>
			<dt><code>font-family</code></dt>
			<dd>&#10551; Defines the specific font or fonts, as well as a generic fallback if none of them are available.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>font</code>:</h4>
		<dl>
			<dt><code><var>style</var> <var>variant</var> <var>weight</var> <var>size/line-height</var> <var>family</var></code></dt>
			<dd>
				&#10551; The values that would normally be set through the associated, non-shorthand font properties, in this order.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>style</var></code></dt>
						<dd>&#10551; Optional. The value of <code>font-style</code>.</dd>
						<dt><code><var>variant</var></code></dt>
						<dd>&#10551; Optional. The value of <code>font-variant</code>.</dd>
						<dt><code><var>weight</var></code></dt>
						<dd>&#10551; Optional. The value of <code>font-weight</code>.</dd>
						<dt><code><var>size/line-height</var></code></dt>
						<dd>&#10551; Optional. The values of <code>font-size</code> and <code>line-height</code>, separated by a / character.</dd>
						<dt><code><var>family</var></code></dt>
						<dd>&#10551; Optional. The value of <code>font-family</code>.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>caption</code></dt>
			<dd>&#10551; Sets all font values to those used for captioned controls such as buttons.</dd>
			<dt><code>icon</code></dt>
			<dd>&#10551; Sets all font values to those used for icon labels.</dd>
			<dt><code>menu</code></dt>
			<dd>&#10551; Sets all font values to those used for dropdown menus.</dd>
			<dt><code>message-box</code></dt>
			<dd>&#10551; Sets all font values to those used for dialog boxes.</dd>
			<dt><code>small-caption</code></dt>
			<dd>&#10551; Similar to <code>caption</code>, but smaller.</dd>
			<dt><code>status-bar</code></dt>
			<dd>&#10551; Sets all font values to those used by the status bar.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>font-style</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>&#10551; The default value. Normal, unslanted letters.</dd>
			<dt><code>italic</code></dt>
			<dd>&#10551; Italic, right-slanted letters.</dd>
			<dt><code>oblique</code></dt>
			<dd>&#10551; Oblique letters, similar to italic, but with a slightly more extreme slant.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>font-variant</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>&#10551; The default value. Standard uppercase/lowercase letters.</dd>
			<dt><code>small-caps</code></dt>
			<dd>&#10551; Lowercase letters display as a smaller version of uppercase letters.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>font-weight</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>&#10551; The default value, equivalent to 400. Letters of the standard thickness.</dd>
			<dt><code>bold</code></dt>
			<dd>&#10551; Equivalent to 700. Bold letters.</dd>
			<dt><code>bolder</code></dt>
			<dd>&#10551; The exact value is browser-determined. More thickness than <code>bold</code>.</dd>
			<dt><code>lighter</code></dt>
			<dd>&#10551; The exact value is browser-determined. Less thickness than <code>normal</code>.</dd>
			<dt><code><var>100-900</var></code></dt>
			<dd>&#10551; Numeric variable, in multiples of 100, from 100 to 900. A specific font weight.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>font-size</code>:</h4>
		<dl>
			<dt><code>medium</code></dt>
			<dd>&#10551; The default value, equivalent to the user's default font size in browser options. Standard-sized letters.</dd>
			<dt><code>xx-small</code></dt>
			<dd>&#10551; Relative to the default font. Extremely small letters.</dd>
			<dt><code>x-small</code></dt>
			<dd>&#10551; Relative to the default font. Very small letters.</dd>
			<dt><code>small</code></dt>
			<dd>&#10551; Relative to the default font. Small letters.</dd>
			<dt><code>large</code></dt>
			<dd>&#10551; Relative to the default font. Large letters.</dd>
			<dt><code>x-large</code></dt>
			<dd>&#10551; Relative to the default font. Very large letters.</dd>
			<dt><code>xx-large</code></dt>
			<dd>&#10551; Relative to the default font. Extremely large letters.</dd>
			<dt><code>smaller</code></dt>
			<dd>&#10551; Relative to the <code>font-size</code> of the parent element. A smaller size than that of the parent.</dd>
			<dt><code>larger</code></dt>
			<dd>&#10551; Relative to the <code>font-size</code> of the parent element. A larger size than that of the parent.</dd>
			<dt><code><var>size</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements or percentages of the parent element's font size. A custom size for letters.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>line-height</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>&#10551; The default value. A normal line height.</dd>
			<dt><code><var>height</var></code></dt>
			<dd>&#10551; Numeric variable, in measurements, percentages of the current font size, or numbers (which will be multiplied by the current font size). A custom line height.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>font-family</code>:</h4>
		<dl>
			<dt><code><var>'family-name', family-type</var></code></dt>
			<dd>
				&#10551; A prioritized list of font families; the first one the browser has access to will be the one that is used for the text. Multiple family names may be entered, separated by a , and a space, and all font families entered should be of the same generic font family, though this is not enforced.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>'family-name'</var></code></dt>
						<dd>&#10551; The name of a specific font family, such as Arial or Times New Roman, in double or single quotes.</dd>
						<dt><code><var>family-type</var></code></dt>
						<dd>&#10551; A generic font family, referring to a type of font rather than a specific font. Possible values are <code>cursive</code>, <code>fantasy</code>, <code>monospace</code>, <code>sans-serif</code>, and <code>serif</code>.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
