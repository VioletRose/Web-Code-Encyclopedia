<?php
    $PAGE_NAME = 'right';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Required property: <a href="/css/position.php"><code>position</code></a>
		<p>This property adjusts the right position of an absolutely or relatively positioned element, sliding it from its current position by the amount specified. Note that it will only work on elements where <code>position</code> is <code>absolute</code> or <code>relative</code>, and that nothing prevents an element moved this way from leaving the rendering area of the page.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#rightBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: 3px solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display: inline-block;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position: relative;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#rightBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;right: 48px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="rightBox"&gt;You can mouse over this box to make it move left!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#rightBox {
					border: 3px solid;
					display: inline-block;
					position: relative;
				}
				#rightBox:hover {
					right: 48px;
				}
			</style>
			<div id="rightBox">You can mouse over this box to make it move left!</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>right</code>:</h4>
		<dl>
			<dt><code>auto</code></dt>
			<dd>The default value. The browser automatically calculates the right position.</dd>
			<dt><code><var>adjustment</var></code></dt>
			<dd>Numeric variable, in measurements. The amount of distance the right position is adjusted leftwards by.</dd>
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
