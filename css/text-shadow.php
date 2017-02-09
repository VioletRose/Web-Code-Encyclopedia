<?php
    $PAGE_NAME = 'text-shadow';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to give an element's text shadows underneath the letters.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#textShadowP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: black;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: #bd54ff;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-shadow: 2px 2px 1px white;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p id="textShadowP"&gt;This text casts shadows. But shadows don't necessarily have to be black, you know.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#textShadowP {
					background-color: black;
					color: #bd54ff;
					text-shadow: 2px 2px 1px white;
				}
			</style>
			<p id="textShadowP">This text casts shadows. But shadows don't necessarily have to be black, you know.</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code></code>:</h4>
		<dl>
			<dt><code><var>x-offset</var> <var>y-offset</var> <var>blur</var> <var>color</var></dt>
			<dd>
				&#10551; The rightwards horizontal and downwards vertical offset of the shadow, the additional distance the shadow should be blurred across, and the shadow's color.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x-offset</var></code></dt>
						<dd>Required, numeric variable, in measurements. The horizontal distance the shadow should be offset from the text.</dd>
						<dt><code><var>y-offset</var></code></dt>
						<dd>Required, numeric variable, in measurements. The vertical distance the shadow should be offset from the text.</dd>
						<dt><code><var>blur</var></code></dt>
						<dd>Optional, numeric variable, in measurements, defaults to 0. The additional distance across which the shadow should be blurred.</dd>
						<dt><code><var>color</var></code></dt>
						<dd>Optional, color variable, defaults to #000000. The color of the shadow.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>none</code></dt>
			<dd>The default value. No shadow will be displayed.</dd>
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
