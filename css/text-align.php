<?php
    $PAGE_NAME = 'text-align';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property allows you to change how text is aligned inside of an element. Note that this does not change its direction, only which side of the element it aligns to.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#centerAlignedP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-align: center;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#justifiedP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-align: justified;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#rightAlignedP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-align: right;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p contenteditable="true"&gt;Left!&lt;/p&gt;
				<br>
				&lt;p contenteditable="true" id="centerAlignedP"&gt;Center!&lt;/p&gt;
				<br>
				&lt;p contenteditable="true" id="rightAlignedP"&gt;Right!&lt;/p&gt;
				<br>
				&lt;p contenteditable="true" id="justifiedP"&gt;Justified!&lt;/p&gt;
				<br>
				&lt;p&gt;The text on each line is editable. Play around with it for a better idea of what happens in different alignment situations!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#centerAlignedP {
					text-align: center;
				}
				#justifiedP {
					text-align: justified;
				}
				#rightAlignedP {
					text-align: right;
				}
			</style>
			<p contenteditable="true">Left!</p>
			<p contenteditable="true" id="centerAlignedP">Center!</p>
			<p contenteditable="true" id="rightAlignedP">Right!</p>
			<p contenteditable="true" id="justifiedP">Justified!</p>
			<p>The text on each line is editable. Play around with it for a better idea of what happens in different alignment situations!</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code></code>:</h4>
		<dl>
			<dt><code>left</code></dt>
			<dd>The default value. Text aligns to the left side of the element.</dd>
			<dt><code>right</code></dt>
			<dd>Text aligns to the right side of the element.</dd>
			<dt><code>center</code></dt>
			<dd>Text aligns to the center of the element.</dd>
			<dt><code>justified</code></dt>
			<dd>If possible, each space between words stretches evenly until the line of text occupies the full width of the element. If not, it looks identical to <code>left</code>.</dd>
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
