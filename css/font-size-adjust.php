<?php
    $PAGE_NAME = 'font-size-adjust';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p><strong>This property is currently only supported by Mozilla Firefox.</strong></p>
		<p>This property allows you to define the aspect ratio used by text, usually to account for the fact that if it's possible for your website to display with a different font, the size/spacing of letters might be significantly different, whereas if given a specific aspect ratio, it must remain roughly the same. As such, it works well to set this value equal to the aspect ratio (for fonts, the difference between uppercase X and lowercase X) of the font you prefer, so that if a fallback font is used, it won't significantly impact the layout of your site.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.openSansSpan {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-family: 'Open Sans', sans-serif;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.arialSpan {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-family: Arial, sans-serif;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#sizeAdjustedDiv {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-size-adjust: 0.535;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="sizeAdjustedDiv"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="openSansSpan"&gt;If you are using Firefox, both of these lines will be quite close in size, though not fully identical.&lt;/span&gt;
				<br>
				&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="arialSpan"&gt;If you are using Firefox, both of these lines will be quite close in size, though not fully identical.&lt;/span&gt;
				<br>
				&lt;/div&gt;
				<br>
				&lt;div&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="openSansSpan"&gt;Whereas this is how they will appear in other browsers, or if the font size is not adjusted.&lt;/span&gt;
				<br>
				&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class="arialSpan"&gt;Whereas this is how they will appear in other browsers, or if the font size is not adjusted.&lt;/span&gt;
				<br>
				&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.openSansSpan {
					font-family: 'Open Sans', sans-serif;
				}
				.arialSpan {
					font-family: Arial, sans-serif;
				}
				#sizeAdjustedDiv {
					font-size-adjust: 0.535;
				}
			</style>
			<div id="sizeAdjustedDiv">
				<span class="openSansSpan">If you are using Firefox, both of these lines will be quite close in size, though not fully identical.</span>
				<br>
				<span class="arialSpan">If you are using Firefox, both of these lines will be quite close in size, though not fully identical.</span>
			</div>
			<div>
				<span class="openSansSpan">Whereas this is how they will appear in other browsers, or if the font size is not adjusted.</span>
				<br>
				<span class="arialSpan">Whereas this is how they will appear in other browsers, or if the font size is not adjusted.</span>
			</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>font-size-adjust</code>:</h4>
		<dl>
			<dt><code><var>ratio</var></code></dt>
			<dd>&#10551; Numeric variable, in numbers representing an aspect ratio (for fonts, the difference between uppercase and lowercase X). The common font Arial is equal to <code>0.52</code>.</dd>
			<dt><code>none</code></dt>
			<dd>&#10551; The default value. No font size adjustment will take place.</dd>
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
