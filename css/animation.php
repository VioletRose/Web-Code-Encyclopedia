<?php
    $PAGE_NAME = 'animation';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required rule: <a href="/css/keyframes.php"><code>@keyframes</code></a></p>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and its sub-properties allow you to activate and control animations in CSS, by taking the rules set with <a href="/css/keyframes.php"><code>@keyframes</code></a> and applying them to objects on the page. The standard selectors apply, allowing you to create animations under specific circumstances, such as when the user mouses over the element. Also note that while <code>position</code> is not required for <code>animation</code> to function, many elements default to <code>position: static;</code>, which limits how they can be moved via <code>animation</code>.
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				<!--Four no space line breaks here just in case I need to copy/paste them: &nbsp;&nbsp;&nbsp;&nbsp;-->
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;@keyframes animExample {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0% {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: red;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 0px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 0px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14% {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: orange;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 0px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;28% {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: yellow;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 0px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;42% {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: green;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;57% {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: blue;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 0px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;71% {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: indigo;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 50px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 50px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;85% {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: violet;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 0px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100% {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background:color: red;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left: 0px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top: 0px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#ultimateBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;animation: animExample 7s ease-in-out infinite 1s;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: red;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: white;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;font-size: 240%;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;position: relative;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-align: center;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 100px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#ultimateBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;animation-direction: reverse;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="ultimateBox"&gt;~^~&lt;br&gt;(&#9786)&lt;/div&gt;
				<br>
				&lt;p&gt;Mouse over the animated figure to see the direction reverse!&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				@keyframes animExample {
					0% {
						background-color: red;
						left: 0px;
						top: 0px;
					}
					14% {
						background-color: orange;
						left: 0px;
						top: 100px;
					}
					28% {
						background-color: yellow;
						left: 100px;
						top: 0px;
					}
					42% {
						background-color: green;
						left: 100px;
						top: 100px;
					}
					57% {
						background-color: blue;
						left: 100px;
						top: 0px;
					}
					71% {
						background-color: indigo;
						left: 50px;
						top: 50px;
					}
					85% {
						background-color: violet;
						left: 0px;
						top: 100px;
					}
					100% {
						background:color: red;
						left: 0px;
						top: 0px;
					}
				}
				
				#ultimateBox {
					animation: animExample 7s ease-in-out infinite 1s;
					background-color: red;
					color: white;
					font-size: 240%;
					height: 100px;
					margin: 0 100px 100px 0;
					position: relative;
					text-align: center;
					width: 100px;
				}
				
				#ultimateBox:hover {
					animation-direction: reverse;
				}
			</style>
			<div id="ultimateBox">~^~<br>(&#9786)</div>
			<p>Mouse over the animated figure to see the direction reverse!</p>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>animation</code></h4>
		<dl>
			<dt><code>animation-name</code></dt>
			<dd>&#10551; Selects the <code>@keyframes</code> property to be used for the animation.</dd>
			<dt><code>animation-duration</code></dt>
			<dd>&#10551; Defines how long the animation takes to complete.</dd>
			<dt><code>animation-timing-function</code></dt>
			<dd>&#10551; Allows fine control of the animation's speed throughout its duration, modeled as a cubic bezier curve: an equation using four points, the first and last being fixed at 0,0 (bottom left) and 1,1 (top right), the second and third being defined. A line is drawn between 1 and 4, then the line curves towards point 2 until it reaches equidistance between 0 and 1. Then, the curve repeats the process, curving towards 3 in the same way, then eventually reaching 4 without actually reaching 2 or 3. This is used to represent time, with the animation theoretically traveling between points 1 and 4. A direct line would be normal speed, while curving towards the top left causes acceleration, and a curve towards the bottom right causes deceleration. However, no use of this will cause the animation to take more or less time in total, as the time it spends moving faster will be compensated by an amount of time going slower somewhere else. This may seem like an odd choice, but it was chosen because it only needs two coordinate sets to perform a rather complex function, and that it is more or less unbreakable, reliable even on slow computers or with odd values. For example, if you define both points as downwards or deceleration time, it will simply start off going as slow as possible and exponentially speed up until reaching the final frame.</dd>
			<dt><code>animation-delay</code></dt>
			<dd>&#10551; Defines a delay after the page is loaded before the animation will play.</dd>
			<dt><code>animation-iteration-count</code></dt>
			<dd>&#10551; Defines how many times the animation will play before stopping.</dd>
			<dt><code>animation-direction</code></dt>
			<dd>&#10551; Defines whether the animation plays forwards, backwards, or alternates.</dd>
			<dt><code>animation-fill-mode</code></dt>
			<dd>&#10551; Defines how the animated object will look while the animation is not playing.</dd>
			<dt><code>animation-play-state</code></dt>
			<dd>&#10551; Defines whether the animation is playing or not.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>animation</code>:</h4>
		<dl>
			<dt><code><var>name</var> <var>duration</var> <var>timing-function</var> <var>delay</var> <var>iteration-count</var> <var>direction</var> <var>fill-mode</var> <var>play-state</var></code></dt>
			<dd>
				&#10551; The values that would normally be set through the associated, non-shorthand animation properties, in this order.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>name</var></code></dt>
						<dd>&#10551; Required. The value of <code>animation-name</code>.</dd>
						<dt><code><var>duration</var></code></dt>
						<dd>&#10551; Required. The value of <code>animation-duration</code>.</dd>
						<dt><code><var>timing-function</var></code></dt>
						<dd>&#10551; Optional. The value of <code>animation-timing-function</code>.</dd>
						<dt><code><var>delay</var></code></dt>
						<dd>&#10551; Optional. The value of <code>animation-delay</code>.</dd>
						<dt><code><var>iteration-count</var></code></dt>
						<dd>&#10551; Optional. The value of <code>animation-iteration-count</code>.</dd>
						<dt><code><var>direction</var></code></dt>
						<dd>&#10551; Optional. The value of <code>animation-direction</code>.</dd>
						<dt><code><var>fill-mode</var></code></dt>
						<dd>&#10551; Optional. The value of <code>animation-fill-mode</code>.</dd>
						<dt><code><var>play-state</var></code></dt>
						<dd>&#10551; Optional. The value of <code>animation-play-state</code>.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>animation-name</code>:</h4>
		<dl>
			<dt><code><var>keyframe-name</var></code></dt>
			<dd>&#10551; Text variable. The name of a <code>@keyframes</code> rule.</dd>
			<dt><code>none</code></dt>
			<dd>&#10551; The default value. The animation is undefined and will not play.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>animation-duration</code>:</h4>
		<dl>
			<dt><code><var>duration</var>s</code></dt>
			<dd>&#10551; Numeric variable, in whole seconds. The animation takes this long to complete.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>animation-timing-function</code>:</h4>
		<dl>
			<dt><code>linear</code></dt>
			<dd>&#10551; Equivalent to 0,0,1,1. The animation has the same speed throughout its duration.</dd>
			<dt><code>ease</code></dt>
			<dd>&#10551; The default value, equivalent to 0.25,1,0.25,1. The animation starts off slightly slow, then accelerates in the middle, before ending slow. Compared to <code>ease-in-out</code>, the start is not as slow and the end not as fast.</dd>
			<dt><code>ease-in</code></dt>
			<dd>&#10551; Equivalent to 0.42,0,1,1. The animation starts off slowly and gradually accelerates until the end.</dd>
			<dt><code>ease-out</code></dt>
			<dd>&#10551; Equivalent to 0,0,0.58,1. The animation starts off accelerating, then gradually slows until the end.</dd>
			<dt><code>ease-in-out</code></dt>
			<dd>&#10551; Equivalent to 0.42,0,0.58,1. The animation slows equally at the beginning and end, and accelerates in the middle.</dd>
			<dt><code>steps(<var>intervals</var>,start/end)</code></dt>
			<dd>
				&#10551; The animation will play as a series of still frames rather than smoothly transitioning between them.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>intervals</var></code></dt>
						<dd>&#10551; Numeric variable, in whole numbers. Defines how many intermediate points will be displayed between each defined frame of the animation.</dd>
						<dt><code><var>start/end</var></code></dt>
						<dd>&#10551; <code>start</code> or <code>end</code>. Determines whether the object's appearance changes at the beginning of each interval, or at the end of each interval.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>step-start</code></dt>
			<dd>&#10551; Equivalent to <code>steps(1,start)</code>.</dd>
			<dt><code>step-end</code></dt>
			<dd>&#10551; Equivalent to <code>steps(1,end)</code>.</dd>
			<dt><code>cubic-bezier(<var>x-coord-1</var>,<var>y-coord-1</var>,<var>x-coord-2</var>,<var>y-coord-2</var>)</code></dt>
			<dd>
				&#10551; Defines the coordinate values for the defined points in the cubic bezier function. horizontal and vertical for both points. Coordinates must be between 0 and 1.
				
			</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>animation-delay</code>:</h4>
		<dl>
			<dt><code><var>time</var></code></dt>
			<dd>&#10551; Numeric variable, in whole seconds. The delay before the animation's start.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>animation-iteration-count</code>:</h4>
		<dl>
			<dt><code><var>repeat-count</var></code></dt>
			<dd>&#10551; Numeric variable, in whole numbers. The number of times the animation repeats.</dd>
			<dt><code>infinite</code></dt>
			<dd>&#10551; The animation repeats an infinite number of times.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>animation-direction</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>&#10551; The default value. The animation plays from start to end.</dd>
			<dt><code>reverse</code></dt>
			<dd>&#10551; The animation plays from end to start.</dd>
			<dt><code>alternate</code></dt>
			<dd>&#10551; The animation will be played normally every odd repetition, and in reverse every even repetition</dd>
			<dt><code>alternate-reverse</code></dt>
			<dd>&#10551; The animation will be played in reverse every odd repetition, and normally every even repetition.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>animation-fill-mode</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>&#10551; The default value. The animation will not apply any styles to the element while it is not playing.</dd>
			<dt><code>forwards</code></dt>
			<dd>&#10551; The animation will remain on the last frame after playing.</dd>
			<dt><code>backwards</code></dt>
			<dd>&#10551; The animation will return to the first frame after playing.</dd>
			<dt><code>both</code></dt>
			<dd>&#10551; The animation will apply both rules, staying on the frame it ended on regardless of <code>animation-direction</code>.</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>animation-play-state</code>:</h4>
		<dl>
			<dt><code>paused</code></dt>
			<dd>&#10551; The animation is currently not playing.</dd>
			<dt><code>running</code></dt>
			<dd>&#10551; The default value. The animation is currently playing.</dd>
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
