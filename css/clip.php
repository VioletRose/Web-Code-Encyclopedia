<?php
    $PAGE_NAME = 'clip';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <code><a href="/css/position.php">position</a></code></p>
		<p>This property allows you to clip an absolutely positioned element to a designated area. Its size and contents are not changed, only its visibility, meaning you can clip an edge off or create a 'window' effect without changing the element itself.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.containerBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 150px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 350px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#clipBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: black;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: solid blue;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;clip: rect(14px,300px,82px,188px);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position: absolute;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 300px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#clipBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;clip: auto;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="containerBox"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;div id="clipBox"&gt;&lt;/div&gt;
				<br>
				&lt;/div&gt;
				<br>
				&lt;p&gt;Mouse over the box to see the clipping change!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				.containerBox {
					border-style: solid;
					height: 150px;
					width: 350px;
				}
				#clipBox {
					background-color: black;
					border: solid blue;
					clip: rect(14px,300px,82px,188px);
					height: 100px;
					position: absolute;
					width: 300px;
				}
				#clipBox:hover {
					clip: auto;
				}
			</style>
			<div class="containerBox">
				<div id="clipBox"></div>
			</div>
			<p>Mouse over the box to see the clipping change!</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>clip</code>:</h4>
		<dl>
			<dt><code>auto</code></dt>
			<dd>&#10551; The default value. No clipping is done.</dd>
			<dt><code>rect(<var>top</var>,<var>right</var>,<var>bottom</var>,<var>left</var>)</code></dt>
			<dd>
				&#10551; Defines the four edges of the clip area, measured from the top left of the element.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>top</var></code></dt>
						<dd>&#10551; Numeric variable, in measurements. The top edge of the clip area.</dd>
						<dt><code><var>right</var></code></dt>
						<dd>&#10551; Numeric variable, in measurements. The right edge of the clip area.</dd>
						<dt><code><var>bottom</var></code></dt>
						<dd>&#10551; Numeric variable, in measurements. The bottom edge of the clip area.</dd>
						<dt><code><var>left</var></code></dt>
						<dd>&#10551; Numeric variable, in measurements. The left edge of the clip area.</dd>
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
