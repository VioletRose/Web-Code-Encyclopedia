<?php
    $PAGE_NAME = 'filter';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property allows you to perform a number of color adjustments to an image, some quite complex. This property also accepts multiple values, separated with a space.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#filterImage {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-webkit-filter: blur(1px) brightness(120%) contrast(80%) drop-shadow(5px 5px 10px gray) grayscale(95%) hue-rotate(5deg) invert(75%) opacity(90%) saturate(120) sepia(5%);/*The filter property is webkit (effectively beta only) in Chrome and Opera.*/
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;filter: blur(1px) brightness(120%) contrast(80%) drop-shadow(5px 5px 10px gray) grayscale(95%) hue-rotate(5deg) invert(50%) opacity(90%) saturate(120) sepia(5%);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;img class="htmlSized" id="filterImage" src="/images/bloomingrose.png"&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#filterImage {
					-webkit-filter: blur(1px) brightness(120%) contrast(80%) drop-shadow(5px 5px 10px gray) grayscale(95%) hue-rotate(5deg) invert(75%) opacity(90%) saturate(120) sepia(5%);/*The filter property is webkit (effectively beta only) in Chrome and Opera.*/
					filter: blur(1px) brightness(120%) contrast(80%) drop-shadow(5px 5px 10px 5px gray) grayscale(95%) hue-rotate(5deg) invert(75%) opacity(90%) saturate(120) sepia(5%);
				}
			</style>
			<img class="htmlSized" id="filterImage" src="/images/bloomingrose.png">
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code></code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>The default value. No effects will be applied.</dd>
			<dt><code>blur(<var>blur</var>)</code></dt>
			<dd>
				The image will be blurred.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var></var></code></dt>
						<dd>Optional numeric variable, in measurements; defaults to 0. Determines the extent of blurring, with higher measurements resulting in more blur.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>brightness(<var>brightness</var></code>)</dt>
			<dd>
				The image's brightness will be adjusted to the specified value.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>brightness</var></code></dt>
						<dd>Optional numeric value, in percentages; defaults to <code>100%</code>. <code>0%</code> is fully black, <code>100%</code>is normal brightness, and higher values result in more brightness.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>contrast(<var>contrast</var>)</code></dt>
			<dd>
				The image's contrast will be adjusted to the specified value.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>contrast</var></code></dt>
						<dd>Optional numeric value, in percentages; defaults to <code>100%</code>. <code>0%</code> is fully black, <code>100%</code>is normal contrast, and higher values result in less contrast.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>drop-shadow(<var>x-offset</var> <var>y-offset</var> <var>blur</var> <var>spread</var> <var>color</var>)</code></dt>
			<dd>
				The image will have a drop shadow extending from the bottom right.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x-offset</var></code></dt>
						<dd>Required numeric variable, in pixels. The horizontal distance the shadow should be offset from the image.</dd>
						<dt><code><var>y-offset</var></code></dt>
						<dd>Required numeric variable, in pixels. The vertical distance the shadow should be offset from the image.</dd>
						<dt><code><var>blur</var></code></dt>
						<dd>Optional numeric variable, in pixels; defaults to <code>0</code>. The additional distance across which the shadow should be blurred.</dd>
						<dt><code><var>spread</var></code></dt>
						<dd>Optional numeric variable, in pixels; defaults to <code>0</code>. The additional size of the shadow beyond the size of the image. Note that many browsers don't support this fourth value, even in the webkit form of the property.</dd>
						<dt><code><var>color</var></code></dt>
						<dd>Optional color variable, defaults to <code>rgb(0, 0, 0)</code>. The color of the shadow.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>grayscale(<var>grayscale</var>)</code></dt>
			<dd>
				The image is converted to grayscale, either partially or completely.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>grayscale</var></code></dt>
						<dd>Optional numeric variable, in percentages; defaults to <code>0</code>. <code>100%</code> is a fully grayscale image.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>hue-rotate(<var>rotation</var>deg)</code></dt>
			<dd>
				The hues of the image are "rotated" - shifted around the color wheel by the amount specified.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>rotation</var></code></dt>
						<dd>Optional numeric variable, in numbers; maximum of 360. The number of degrees around the color wheel the hue should be rotated.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>invert(<var>inversion</var>)</code></dt>
			<dd>
				Inverts the colors of the image, either partially or completely.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>inversion</var></code></dt>
						<dd>Optional numeric variable, in percentages; defaults to <code>0</code>. <code>100%</code> is a fully color-inverted image.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>opacity(<var>opacity</var>)</code></dt>
			<dd>
				The image's opacity will be adjusted to the specified value.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>opacity</var></code></dt>
						<dd>Optional numeric variable, in percentages; defaults to <code>100%</code>. <code>0</code> is a fully transparent image.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>saturate(<var>saturation</var>)</code></dt>
			<dd>
				The image's saturation will be adjusted to the specified value.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>saturation</var></code></dt>
						<dd>Optional numeric variable, in percentages; defaults to <code>100%</code>. <code>0</code> is fully un-saturated, while values above <code>100%</code> result in hypersaturation.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>sepia(<var>sepia</var>)</code></dt>
			<dd>
				The image will be converted to shades of sepia, either partially or fully.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>sepia</var></code></dt>
						<dd>Optional numeric variable, in percentages; defaults to <code>0</code>. <code>100%</code> is a fully sepia image.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>url(<var>URL</var>)</code></dt>
			<dd>
				The image will be filtered using SVG instructions.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>URL</var></code></dt>
						<dd>Required URL variable. The location of an XML file that specifies a SVG filter to be used.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
