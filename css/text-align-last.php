<?php
    $PAGE_NAME = 'text-align-last';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Required property: <code><a href="/css/text-align.php">text-align</a></code></p>
		<p>This property allows you to define a 'fallback' for the last line of an element with its <code>text-align</code> property set to <code>justify</code>. Since justified text may not always be capable of filling the entire line, and will often look 'odd' even if it does, this functionality ensures that text will only be fully justified on lines which are already a good size. Additionally, the value can be changed for different fallback alignments other than the left side of the element. Note that 'last line' also includes the last line before a line break, as well as just the end of the element.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#lastAlignedBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max-width: 394px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-align: justify;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-moz-text-align-last: justify;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-align-last: justify;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="lastAlignedBox"&gt;Due to the way justified text attempts to evenly span the entire line it appears on, the last line usually needs to have a fallback or it may end up looking&lt;br&gt;distinctly strange.&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#lastAlignedBox {
					border-style: solid;
					max-width: 394px;
					text-align: justify;
					-moz-text-align-last: justify;
					text-align-last: justify;
				}
			</style>
			<div id="lastAlignedBox">Due to the way justified text attempts to evenly span the entire line it appears on, the last line usually needs to have a fallback or it may end up looking<br>distinctly strange.</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>text-align-last</code>:</h4>
		<dl>
			<dt><code>auto</code></dt>
			<dd>The default value. The last line is aligned left.</dd>
			<dt><code>left</code></dt>
			<dd>The last line is aligned left. This is functionally identical to <code>auto</code>.</dd>
			<dt><code>right</code></dt>
			<dd>The last line is aligned right.</dd>
			<dt><code>center</code></dt>
			<dd>The last line is center aligned.</dd>
			<dt><code>justify</code></dt>
			<dd>The last line is justified anyway, which can result in extremely large spaces between words.</dd>
			<dt><code>start</code></dt>
			<dd>The last line is aligned to the side of the element where text originates from, depending on if it is normally left-to-right or right-to-left.</dd>
			<dt><code>end</code></dt>
			<dd>The last line is aligned to the side of element opposite where text originates from, depending on if it is normally left-to-right or right-to-left.</dd>
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
