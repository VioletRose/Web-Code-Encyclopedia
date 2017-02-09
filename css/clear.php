<?php
    $PAGE_NAME = 'clear';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <a href="/css/float.php"><code>float</code></a></p>
		<p>This property allows you to prevent the element(s) specified from appearing next to floating elements; they will display in the next available space instead.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.exampleBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 94px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 294px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#leftClearBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: lime;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;clear: left;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#leftFloatyBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: red;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float: left;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div class="exampleBox" id="leftFloatyBox"&gt;&lt;/div&gt;
				<br>
				&lt;div class="exampleBox" id="leftClearBox"&gt;&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.exampleBox {
					border-style: solid;
					height: 94px;
					width: 294px;
				}
				#leftClearBox {
					background-color: lime;
					clear: left;
				}
				#leftFloatyBox {
					background-color: red;
					float: left;
				}
			</style>
			<div class="exampleBox" id="leftFloatyBox"></div>
			<div class="exampleBox" id="leftClearBox"></div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>clear</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>The default value. Elements are allowed to float on either side.</dd>
			<dt><code>left</code></dt>
			<dd>Elements are not allowed to float on the left.</dd>
			<dt><code>right</code></dt>
			<dd>Elements are not allowed to float on the right.</dd>
			<dt><code>both</code></dt>
			<dd>Elements are not allowed to float on either side.</dd>
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
