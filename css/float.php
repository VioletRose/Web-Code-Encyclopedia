<?php
    $PAGE_NAME = 'float';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>This property allows you to make an element 'float', which means it no longer occupies a normal place in its parent element, instead moving to the left or right side and having any other content within the element wrap around it. Note that this property does not allow elements to escape the bounds of their parent, or hover above other elements; it simply changes their place in the document's flow.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#floatingSpan {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: lightgray;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float: right;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#placeholderSpan {/*This preserves a space in the text, so it's obvious where the floating text was originally.*/
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: lightgray;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: rgba(0, 0, 0, 0);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p&gt;Under normal circumstances, HTML elements come in a specific order. But having one &lt;span id="placeholderSpan"&gt;float&lt;/span&gt;&lt;span id="floatingSpan"&gt;float&lt;/span&gt; is often a safer, saner alternative than messing around with &lt;code&gt;display&lt;/code&gt; or &lt;code&gt;position&lt;/code&gt;, since the effects those have are more extreme.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#floatingSpan {
					background-color: lightgray;
					float: right;
				}
				#placeholderSpan {/*This preserves a space in the text, so it's obvious where the floating text was originally.*/
					background-color: lightgray;
					color: rgba(0, 0, 0, 0);
				}
			</style>
			<p>Under normal circumstances, HTML elements come in a specific order. But having one <span id="placeholderSpan">float</span><span id="floatingSpan">float</span> is often a safer, saner alternative than messing around with <code>display</code> or <code>position</code>, since the effects those have are more extreme.</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>float</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>&#10551; The default value. The element does not float.</dd>
			<dt><code>left</code></dt>
			<dd>&#10551; The element floats to the left.</dd>
			<dt><code>right</code></dt>
			<dd>&#10551; The element floats to the right.</dd>
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
