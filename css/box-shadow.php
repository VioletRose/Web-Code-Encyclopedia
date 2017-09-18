<?php
    $PAGE_NAME = 'box-shadow';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property allows you to give an element a box shadow, atop or beneath it.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#shadowBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: 3px solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;box-shadow: 5px 5px 10px 5px gray;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: inline-block;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;margin: 0px 20px 20px 0px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#shadowBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;box-shadow: 5px 5px 10px 5px gray inset;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="shadowBox"&gt;You can mouse over the box to see what an inset shadow looks like!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#shadowBox {
					border: 3px solid;
					box-shadow: 5px 5px 10px 5px gray;
					display: inline-block;
					margin: 0px 20px 20px 0px;
				}
				#shadowBox:hover {
					box-shadow: 5px 5px 10px 5px gray inset;
				}
			</style>
			<div id="shadowBox">You can mouse over the box to see what an inset shadow looks like!</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>box-shadow</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>The default value. No shadow will be displayed.</dd>
			<dt><code><var>x-offset</var> <var>y-offset</var> <var>blur</var> <var>spread</var> <var>color</var> inset</code></dt>
			<dd>
				The horizontal and vertical offset of the shadow, the additional distance the shadow should be blurred across, how much larger the shadow is than the size of the element, and the specification that the shadow should be inset, overshadowing the element from the top left rather than extending from underneath the bottom right. <code><var>blur</var></code>, <code><var>spread</var></code>, <code><var>color</var></code>, and <code>inset</code> may be omitted.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x-offset</var></code></dt>
						<dd>Required, numeric variable, in measurements. The horizontal distance the shadow should be offset from the element.</dd>
						<dt><code><var>y-offset</var></code></dt>
						<dd>Required, numeric variable, in measurements. The vertical distance the shadow should be offset from the element.</dd>
						<dt><code><var>blur</var></code></dt>
						<dd>Optional, numeric variable, in measurements, defaults to 0. The additional distance across which the shadow should be blurred.</dd>
						<dt><code><var>spread</var></code></dt>
						<dd>Optional, numeric variable, in measurements, defaults to 0. The additional size of the shadow beyond the size of the element.</dd>
						<dt><code><var>color</var></code></dt>
						<dd>Optional, color variable, defaults to #000000. The color of the shadow.</dd>
						<dt><code>inset</code></dt>
						<dd>Optional. The shadow will overshadow the element from the top left, rather than extending from underneath the bottom right.</dd>
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
