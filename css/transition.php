<?php
    $PAGE_NAME = 'transition';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p></p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#transitionBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: red;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;margin: 3px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outline-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transition: font-size 1500ms linear 500ms
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#transitionBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: black;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: green;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-size: 2em;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="transitionBox"&gt;You can mouse over this box for half a second to see the effect of a smooth &lt;code&gt;font-size&lt;/code&gt; transition!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#transitionBox {
					color: red;
					margin: 3px;
					outline-style: solid;
					transition: font-size 1500ms linear 500ms
				}
				#transitionBox:hover {
					background-color: black;
					color: green;
					font-size: 2em;
				}
			</style>
			<div id="transitionBox">You can mouse over this box for half a second to see the effect of a smooth <code>font-size</code> transition!</div>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>transition</code>:</h4>
		<dl>
			<dt><code>transition-property</code></dt>
			<dd>Defines which properties, if any, use the transition effect. Note that if defined by shorthand, multiple comma-separated values can't be used.</dd>
			<dt><code>transition-duration</code></dt>
			<dd>Defines how long the transition takes to complete (and with that, its speed).</dd>
			<dt><code>transition-timing-function</code></dt>
			<dd>Allows fine control of the transition's speed throughout its duration, modeled as a cubic bezier curve: an equation using four points, the first and last being fixed at 0,0 (bottom left) and 1,1 (top right), the second and third being defined. A line is drawn between 1 and 4, then the line curves towards point 2 until it reaches equidistance between 0 and 1. Then, the curve repeats the process, curving towards 3 in the same way, then eventually reaching 4 without actually reaching 2 or 3. This is used to represent time, with the transition theoretically traveling between points 1 and 4. A direct line would be normal speed, while curving towards the top left causes acceleration, and a curve towards the bottom right causes deceleration. However, no use of this will cause the transition to take more or less time in total, as the time it spends moving faster will be compensated by an amount of time going slower somewhere else. This may seem like an odd choice, but it was chosen because it only needs two coordinate sets to perform a rather complex function, and that it is more or less unbreakable, reliable even on slow computers or with odd values. For example, if you define both points as downwards or deceleration time, it will simply start off going as slow as possible and exponentially speed up until reaching the final frame.</dd>
			<dt><code>transition-delay</code></dt>
			<dd>Defines how long the transition will take to start after the relevant property or properties change.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>transition</code>:</h4>
		<dl>
			<dt><code><var>property</var> <var>duration</var> <var>timing-function</var> <var>delay</var></code></dt>
			<dd>
				The values that would normally be set through the associated, non-shorthand animation properties, in this order.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>property</var></code></dt>
						<dd>Optional. The value of <code>transition-property</code>.</dd>
						<dt><code><var>duration</var></code></dt>
						<dd>Required. The value of <code>transition-duration</code>.</dd>
						<dt><code><var>timing-function</var></code></dt>
						<dd>Optional. The value of <code>transition-timing-function</code>.</dd>
						<dt><code><var>delay</var></code></dt>
						<dd>Optional. The value of <code>transition-delay</code>.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>transition-property</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>No properties will use the transition.</dd>
			<dt><code>all</code></dt>
			<dd>All properties will use the transition.</dd>
			<dt><code><var>property</var></code></dt>
			<dd>Text variable, uses names of CSS properties; can accept multiple entries, separated by a comma and a space. Only the properties specified will use the transition. Note that an element's size can be affected smoothly by a transition without the <a href="/css/height.php"><code>height</code></a> or <a href="/css/width.php"><code>width</code></a> properties being directly affected.</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>transition-duration</code>:</h4>
		<dl>
			<dt><code><var>duration</var><var>unit</var></code></dt>
			<dd>
				The amount of time the transition takes to complete. Lower values result in a faster transition.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>duration</var></code></dt>
						<dd>The amount of time in the duration.</dd>
						<dt><code><var>unit</var></code></dt>
						<dd>Text value, <code>s</code> or <code>ms</code>. Defines whether <code>duration</code> is measured in seconds or milliseconds.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>transition-timing-function</code>:</h4>
		<dl>
			<dt><code>linear</code></dt>
			<dd>Equivalent to 0,0,1,1. The transition has the same speed throughout its duration.</dd>
			<dt><code>ease</code></dt>
			<dd>The default value, equivalent to 0.25,1,0.25,1. The transition starts off slightly slow, then accelerates in the middle, before ending slow. Compared to <code>ease-in-out</code>, the start is not as slow and the end not as fast.</dd>
			<dt><code>ease-in</code></dt>
			<dd>Equivalent to 0.42,0,1,1. The transition starts off slowly and gradually accelerates until the end.</dd>
			<dt><code>ease-out</code></dt>
			<dd>Equivalent to 0,0,0.58,1. The transition starts off accelerating, then gradually slows until the end.</dd>
			<dt><code>ease-in-out</code></dt>
			<dd>Equivalent to 0.42,0,0.58,1. The transition slows equally at the beginning and end, and accelerates in the middle.</dd>
			<dt><code>steps(<var>intervals</var>,start/end)</code></dt>
			<dd>
				The transition will play as a series of still frames rather than smoothly transitioning between them.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>intervals</var></code></dt>
						<dd>Numeric variable, in whole numbers. Defines how many intermediate points will be displayed between each defined frame of the transition.</dd>
						<dt><code><var>start/end</var></code></dt>
						<dd><code>start</code> or <code>end</code>. Determines whether the object's appearance changes at the beginning of each interval, or at the end of each interval.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>step-start</code></dt>
			<dd>Equivalent to <code>steps(1,start)</code>.</dd>
			<dt><code>step-end</code></dt>
			<dd>Equivalent to <code>steps(1,end)</code>.</dd>
			<dt><code>cubic-bezier(<var>x-coord-1</var>,<var>y-coord-1</var>,<var>x-coord-2</var>,<var>y-coord-2</var>)</code></dt>
			<dd>
				Defines the coordinate values for the defined points in the cubic bezier function. horizontal and vertical for both points. Coordinates must be between 0 and 1.
				
			</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>transition-delay</code>:</h4>
		<dl>
			<dt><code><var>delay</var><var>unit</var></code></dt>
			<dd>
				The amount of time by which the transition will start after the relevant property or properties change.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>duration</var></code></dt>
						<dd>The amount of time in the delay.</dd>
						<dt><code><var>unit</var></code></dt>
						<dd>Text value, <code>s</code> or <code>ms</code>. Defines whether <code>delay</code> is measured in seconds or milliseconds.</dd>
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
