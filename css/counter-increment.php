<?php
    $PAGE_NAME = 'counter-increment';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property specifies a counter that will increase by a specified number each time its selector appears. The counter begins at 0 by default. However, it counts as the page is rendering; its effective value depends on where on the page it is queried. If you have 26 <code>&lt;p&gt;</code> elements on the page, but query the counter halfway down, it will return 13.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.countedP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;counter-increment: countingUp 2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.countedP::after {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;content: counter(countingUp);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p class="countedP"&gt;First.&lt;/p&gt;
				<br>
				&lt;p class="countedP"&gt;Second.&lt;/p&gt;
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
			</style>
			<p class="countedP">First.</p>
			<p class="countedP">Second.</p>
			<p class="countedP">Third.</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>counter-increment</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>The default value. No counters will increment.</dd>
			<dt><code><var>id</var> <var>number</var></code></dt>
			<dd>
				The specified counter will increment by the specified number.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>id</var></code></dt>
						<dd>Required id variable. The id of an existing counter, or a new counter id to be defined.</dd>
						<dt><code><var>increment</var></code></dt>
						<dd>Optional numeric variable, in numbers, defaults to 1. How much the counter increments by each time its selector appears.</dd>
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
