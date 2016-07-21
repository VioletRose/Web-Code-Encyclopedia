<?php
    $PAGE_NAME = 'background-blend-mode';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows blending to occur between background images and colors, mixing them together in a number of possible ways. When employing this property, lots of testing is important to find the ideal mode to use for the things you're blending together.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#backgroundGradientBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-image: repeating-radial-gradient(circle, black, #ead8ff 16%, fuchsia 33%);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 200px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 352px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#backgroundImageBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-image: url(/images/bloomingrose.png);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-size: contain;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 200px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 352px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#backgroundBlendBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-image: repeating-radial-gradient(circle, black, #ead8ff 16%, fuchsia 33%), url(/images/bloomingrose.png);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-blend-mode: screen;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-size: contain;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 200px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 352px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="backgroundGradientBox"&gt;&lt;/div&gt;
				<br>
				&lt;div id="backgroundImageBox"&gt;&lt;/div&gt;
				<br>
				&lt;div id="backgroundBlendBox"&gt;&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				#backgroundGradientBox {
					background-image: repeating-radial-gradient(circle, black, #ead8ff 16%, fuchsia 33%);
					height: 200px;
					width: 352px;
				}
				#backgroundImageBox {
					background-image: url(/images/bloomingrose.png);
					background-size: contain;
					height: 200px;
					width: 352px;
				}
				#backgroundBlendBox {
					background-image: repeating-radial-gradient(circle, black, #ead8ff 16%, fuchsia 33%), url(/images/bloomingrose.png);
					background-blend-mode: screen;
					background-size: contain;
					height: 200px;
					width: 352px;
				}
			</style>
			<div id="backgroundGradientBox"></div>
			<div id="backgroundImageBox"></div>
			<div id="backgroundBlendBox"></div>
		</figure>
	</section>
	<section>
		<h4>Accepted values:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>&#10551; The default value. No blending will be applied.</dd>
			<dt><code>multiply</code></dt>
			<dd>&#10551; Each pixel's color value will be multiplied by the color value of the next layer, usually resulting in a darker color. Multiplying by black results in black, and multiplying by white makes no change.</dd>
			<dt><code>screen</code></dt>
			<dd>&#10551; The inverse of multiply, lightening rather than darkening.</dd>
			<dt><code>overlay</code></dt>
			<dd>&#10551; A more complex mode that attempts a more accurate result. Light colors get lighter, dark colors get darker.</dd>
			<dt><code>darken</code></dt>
			<dd>&#10551; Compares layers and always displays the darker pixels.</dd>
			<dt><code>lighten</code></dt>
			<dd>&#10551; Compares layers and always displays the lighter pixels.</dd>
			<dt><code>color-dodge</code></dt>
			<dd>&#10551; Brightens the base color, reducing contrast.</dd>
			<dt><code>color-burn</code></dt>
			<dd>&#10551; Darkens the base color, increasing contrast.</dd>
			<dt><code>hard-light</code></dt>
			<dd>&#10551; Multiplies or screens colors depending on the blend color. A lighter blend results in a lighter image, darker results in darker.</dd>
			<dt><code>soft-light</code></dt>
			<dd>&#10551; Dodges and burns rather than multiplying and screening, resulting in a closer blend rather than greater extremes.</dd>
			<dt><code>difference</code></dt>
			<dd>&#10551; Compares layers and subtracts the color with the greater brightness from the other.</dd>
			<dt><code>exclusion</code></dt>
			<dd>&#10551; Similar to <code>difference</code>, but produces less contrast overall.</dd>
			<dt><code>hue</code></dt>
			<dd>&#10551; Merges the hue of the blend color with the luminosity and saturation of the base color.</dd>
			<dt><code>saturation</code></dt>
			<dd>&#10551; Merges the saturation of the blend color with the hue and luminosity of the base color.</dd>
			<dt><code>color</code></dt>
			<dd>&#10551; Merges the hue and saturation of the blend color with the luminosity of the base color.</dd>
			<dt><code>luminosity</code></dt>
			<dd>&#10551; Merges the luminosity of the blend color with the hue and saturation of the base color.</dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
