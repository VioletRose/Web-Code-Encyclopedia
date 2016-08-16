<?php
    $PAGE_NAME = '@keyframes';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This page is about a CSS rule and the descriptors it sets.</p>
		<p>This rule is used to create 'frames' of a CSS animation. Each frame has a defined place within the animation, as well as declared CSS properties for that place. Animations will smoothly transition between frames, calculating intermediate positions between those property values. Each <code>@keyframes</code> rule must have an animation name defined, taking the place of a selector.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;@keyframes keyframeExample {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: red;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: blue;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#keyframesBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;animation: keyframeExample 2s linear infinite alternate;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="keyframesBox"&gt;&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				@keyframes keyframeExample {
					from {
						background-color: red;
					}
					to {
						background-color: blue;
					}
				}
				#keyframesBox {
					animation: keyframeExample 2s linear infinite alternate;
					height: 100px;
					width: 100px;
				}
			</style>
			<div id="keyframesBox"></div>
		</figure>
	</section>
	<section>
		<h4>Descriptors used by <code>@keyframes</code>:</h4>
		<dl>
			<dt><code><var>position</var></code></dt>
			<dd>&#10551; Numeric value, in percentages ranging from <code>0%</code> to <code>100%</code>. The frame's place in the animation.</dd>
			<dt><code>from</code></dt>
			<dd>&#10551; Equivalent to <code>0%</code>.</dd>
			<dt><code>to</code></dt>
			<dd>&#10551; Equivalent to <code>100%</code>.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted CSS properties for <code>@keyframes</code>:</h4>
		<ul>
			<li>background</li>
			<li>background-color</li>
			<li>background-position</li>
			<li>background-size</li>
			<li>border</li>
			<li>border-bottom</li>
			<li>border-bottom-color</li>
			<li>border-bottom-left-radius</li>
			<li>border-bottom-right-radius</li>
			<li>border-bottom-width</li>
			<li>border-color</li>
			<li>border-left</li>
			<li>border-left-color</li>
			<li>border-left-width</li>
			<li>border-right</li>
			<li>border-right-color</li>
			<li>border-right-width</li>
			<li>border-spacing</li>
			<li>border-top</li>
			<li>border-top-color</li>
			<li>border-top-left-radius</li>
			<li>border-top-right-radius</li>
			<li>border-top-width</li>
			<li>bottom</li>
			<li>box-shadow</li>
			<li>clip</li>
			<li>color</li>
			<li>column-count</li>
			<li>column-gap</li>
			<li>column-rule</li>
			<li>column-rule-color</li>
			<li>column-rule-width</li>
			<li>column-width</li>
			<li>columns</li>
			<li>filter</li>
			<li>flex</li>
			<li>flex-basis</li>
			<li>flex-grow</li>
			<li>flex-shrink</li>
			<li>font</li>
			<li>font-size</li>
			<li>font-size-adjust</li>
			<li>font-stretch</li>
			<li>font-weight</li>
			<li>height</li>
			<li>left</li>
			<li>letter-spacing</li>
			<li>line-height</li>
			<li>margin</li>
			<li>margin-bottom</li>
			<li>margin-left</li>
			<li>margin-right</li>
			<li>margin-top</li>
			<li>max-height</li>
			<li>max-width</li>
			<li>min-height</li>
			<li>min-width</li>
			<li>opacity</li>
			<li>order</li>
			<li>outline</li>
			<li>outline-color</li>
			<li>outline-offset</li>
			<li>outline-width</li>
			<li>padding</li>
			<li>padding-bottom</li>
			<li>padding-left</li>
			<li>padding-right</li>
			<li>padding-top</li>
			<li>perspective</li>
			<li>perspective-origin</li>
			<li>right</li>
			<li>text-decoration-color</li>
			<li>text-indent</li>
			<li>text-shadow</li>
			<li>top</li>
			<li>transform</li>
			<li>transform-origin</li>
			<li>vertical-align</li>
			<li>visibility</li>
			<li>width</li>
			<li>word-spacing</li>
			<li>z-index</li>
		</ul>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
