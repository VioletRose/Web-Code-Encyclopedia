<?php
    $PAGE_NAME = 'transform-origin';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Required property: <code><a href="/css/transform.php">transform</a></code></p>
		<p>This property allows you to set a center point for transformation. Normally, transformations take effect from the center of an element, but with this property, that behavior can be changed. For obvious reasons, it will have no effect on an element without such a transformation.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;@keyframes cornerSpin {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform: rotate(0deg)
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform: rotate(360deg)
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.originBlock {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;animation: cornerSpin 4s linear infinite;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-color: red limegreen blue black;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;margin: 140px 0 140px 95px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform-origin: left top;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#leftTopBlock {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform-origin: left top;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#rightBottomBlock {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform-origin: right bottom;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="originBlock" id="leftTopBlock"&gt;Left&lt;br&gt;top&lt;br&gt;corner&lt;br&gt;axis&lt;/div&gt;
				<br>
				&lt;div class="originBlock" id="rightBottomBlock"&gt;Right&lt;br&gt;bottom&lt;br&gt;corner&lt;br&gt;axis&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				@keyframes cornerSpin {
					from {
						transform: rotate(0deg)
					}
					to {
						transform: rotate(360deg)
					}
				}
				.originBlock {
					animation: cornerSpin 4s linear infinite;
					border-color: red limegreen blue black;
					border-style: solid;
					height: 94px;
					margin: 140px 0;
					transform-origin: left top;
					width: 94px;
				}
				#leftTopBlock {
					margin-left: 100px;
					transform-origin: left top;
				}
				#rightBottomBlock {
					transform-origin: right bottom;
				}
			</style>
			<div class="originBlock" id="leftTopBlock">Left<br>top<br>corner<br>axis</div>
			<div class="originBlock" id="rightBottomBlock">right<br>bottom<br>corner<br>axis</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>transform-origin</code>:</h4>
		<dl>
			<dt><code><var>x-origin</var> <var>y-origin</var> <var>z-origin</var></code></dt>
			<dd>
				Offset amounts for the center point of the transformation. Note that since all accept the same types of value, if you desire to use the second or third values but not the preceding one(s), you must set them to <code>0</code>.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x-origin</var></code></dt>
						<dd>Required numeric/text variable, in measurements, <code>left</code>, <code>center</code>, or <code>right</code>; defaults to <code>50%</code>. The horizontal offset.</dd>
						<dt><code><var>y-origin</var></code></dt>
						<dd>Optional numeric/text variable, in measurements, <code>top</code>, <code>center</code>, or <code>bottom</code>; defaults to <code>50%</code>. The vertical offset.</dd>
						<dt><code><var>z-origin</var></code></dt>
						<dd>Optional numeric variable, in measurements; defaults to <code>0</code>. The depth offset.</dd>
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
