<?php
    $PAGE_NAME = 'counter-reset';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property specifies a counter that will increase to a specified number each time its selector appears. However, it activates as the page is rendering; the counter's effective value depends on where on the page it is queried. If you have 26 <code>&lt;p&gt;</code> elements on the page, but reset the counter halfway down, the 14th will return a value consistent with being the first one.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.countedP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspcounter-increment: countingUp 2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;-->}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;-->.countedP::after {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;content: counter(countingUp);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#resetP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;counter-reset: countingUp;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p class="countedP"&gt;First.&lt;/p&gt;
				<br>
				&lt;p class="countedP" id="resetP"&gt;Second.&lt;/p&gt;
				<br>
				&lt;p class="countedP"&gt;Third.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.countedP {
					counter-increment: countingUp 2;
				}
				.countedP::after {
					content: counter(countingUp);
				}
				#resetP {
					counter-reset: countingUp;
				}
			</style>
			<p class="countedP">First.</p>
			<p class="countedP" id="resetP">Second.</p>
			<p class="countedP">Third.</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>counter-increment</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>The default value. No counters will reset.</dd>
			<dt><code><var>id</var> <var>number</var></code></dt>
			<dd>
				The specified counter will reset to the specified number.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>id</var></code></dt>
						<dd>Required variable. The id of an existing counter, or a new counter id to be defined.</dd>
						<dt><code><var>increment</var></code></dt>
						<dd>Optional numeric variable, in numbers, defaults to 0. What the counter will be reset to.</dd>
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
