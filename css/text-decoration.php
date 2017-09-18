<?php
    $PAGE_NAME = 'text-decoration';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property allows you to define a line decoration for a body of text. In the future, this property will become a shorthand with additional options for the line's appearance, and its original function will be moved to <code>text-decoration-line</code>, but this has not happened yet.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#overlineSpan {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-decoration: overline;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#throughlineSpan {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-decoration: line-through;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#underlineSpan {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-decoration: underline;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p&gt;With the CSS property &lt;code&gt;text-decoration&lt;/code&gt;, text can be decorated with lines &lt;span id="overlineSpan"&gt;over&lt;/span&gt;, &lt;span id="underlineSpan"&gt;under&lt;/span&gt;, and &lt;span id="throughlineSpan"&gt;through&lt;/span&gt; it!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#overlineSpan {
					text-decoration: overline;
				}
				#throughlineSpan {
					text-decoration: line-through;
				}
				#underlineSpan {
					text-decoration: underline;
				}
			</style>
			<p>With the CSS property <code>text-decoration</code>, text can be decorated with lines <span id="overlineSpan">over</span>, <span id="underlineSpan">under</span>, and <span id="throughlineSpan">through</span> it!</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>text-decoration</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>The default value. No line is added.</dd>
			<dt><code>underline</code></dt>
			<dd>A line is added underneath the text.</dd>
			<dt><code>overline</code></dt>
			<dd>A line is added above the text.</dd>
			<dt><code>line-through</code></dt>
			<dd>A line is added through the text.</dd>
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
