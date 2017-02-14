<?php
	$PAGE_NAME = 'jQuery Effect';
	require_once($_SERVER["DOCUMENT_ROOT"].'/javascript/javascripthead.php');
?>
<main>
	<section>
		<p>jQuery provides a number of methods which can be used to easily create scripted animated effects on a webpage on the fly, without the need for predefined CSS keyframes.</p>
	</section>
	<section>
		<dl>
			<dt><code>animate()</code></dt>
			<dd>
				Accepts up to three arguments and, at the time its script is called, visually transitions the statement's selected element(s) from their original CSS values to the new ones specified.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code>{<var>property</var>: "<var>value</var>"}</code></dt>
						<dd>
							Required; the CSS property for which an animation is desired, and the new value it will have once the animation is complete. Only a number of CSS properties are animatable, due to this method only supporting numeric value changes.
								<!--How do I separate multiple property:value pairs in this argument?-->
							<details>
								<summary>Animatable properties:</summary>
								<p>Note that for syntax reasons, the normal names of the CSS properties are slightly different for the purpose of this method.</p>
								<ul>
									<li><code>backgroundPositionX</code></li>
									<li><code>backgroundPositionY</code></li>
									<li><code>borderWidth</code></li>
									<li><code>borderBottomWidth</code></li>
									<li><code>borderLeftWidth</code></li>
									<li><code>borderRightWidth</code></li>
									<li><code>borderTopWidth</code></li>
									<li><code>borderSpacing</code></li>
									<li><code>margin</code></li>
									<li><code>marginBottom</code></li>
									<li><code>marginLeft</code></li>
									<li><code>marginRight</code></li>
									<li><code>marginTop</code></li>
									<li><code>outlineWidth</code></li>
									<li><code>padding</code></li>
									<li><code>paddingBottom</code></li>
									<li><code>paddingLeft</code></li>
									<li><code>paddingRight</code></li>
									<li><code>paddingTop</code></li>
									<li><code>height</code></li>
									<li><code>width</code></li>
									<li><code>maxHeight</code></li>
									<li><code>maxWidth</code></li>
									<li><code>minHeight</code></li>
									<li><code>minWidth</code></li>
									<li><code>fontSize</code></li>
									<li><code>bottom</code></li>
									<li><code>left</code></li>
									<li><code>right</code></li>
									<li><code>top</code></li>
									<li><code>letterSpacing</code></li>
									<li><code>wordSpacing</code></li>
									<li><code>lineHeight</code></li>
									<li><code>textIndent</code></li>
								</ul>
							</details>
						</dd>
						<dt><code><var>duration</var></code></dt>
						<dd>Optional; the amount of time it takes the animation to complete. May be a number of milliseconds, <code>"slow"</code>, or <code>"fast"</code>; defaults to <code>400</code>.</dd>
							<!--What do "slow" and "fast" actually mean?-->
						<dt><code><var>easing</var></code></dt>
						<dd>Optional; The speed curve of the animation. Possible values are <code>swing</code>, the default, which is slightly faster in the middle and slower at the beginning and end, or <code>linear</code>, where the animation moves at the same speed throughout its duration.</dd>
						<dt><code><var>callback</var></code></dt>
						<dd>Optional; a callback function to be executed after the animation has fully completed.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>clearQueue()</code></dt>
			<dd>Can accept a queue name in its argument, and stops all the remaining functions in the queue that have not yet begun to run on the statement's selected element(s) - this method cannot stop a function which has already begun, only one which is currently waiting in the queue. If no queue name is provided, it defaults to <code>"fx"</code>, the name of the normal effects queue.</dd>
				<!--How often does this actually come up? Does this even happen outside of jQuery effects?-->
			<dt><code>delay()</code></dt>
			<dd>Can accept a delay speed (milliseconds, <code>"slow"</code>, or <code>"fast"</code>) and a queue name in its arguments, and specifies a delay time to occur between each queue item being run on the statement's selected element(s). If no queue name is provided, it defaults to <code>"fx"</code>.</dd>
			<dt><code>dequeue()</code></dt>
			<dd>Can accept a queue name in its argument, and removes the next function from the queue of the statement's selected element(s) to execute it immediately. If no queue name is provided, it defaults to <code>"fx"</code>.</dd>
			<dt><code>fadeIn()</code></dt>
			<dd>
				 Can accept up to three arguments, and if any of the statement's selected element(s) are currently hidden, displays them and visibly transitions them from 0% to 100% opacity.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>duration</var></code></dt>
						<dd>Optional; the amount of time it takes the transition to complete. May be a number of milliseconds, <code>"slow"</code>, or <code>"fast"</code>; defaults to <code>400</code>.</dd>
						<dt><code><var>easing</var></code></dt>
						<dd>Optional; The speed curve of the transition. Possible values are <code>swing</code>, the default, which is slightly faster in the middle and slower at the beginning and end, or <code>linear</code>, where the transition proceeds at the same speed throughout its duration.</dd>
						<dt><code><var>callback</var></code></dt>
						<dd>Optional; a callback function to be executed after the transition has fully completed.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>fadeOut()</code></dt>
			<dd>
				Can accept up to three arguments, and if any of the statement's selected element(s) are currently visible, visibly transitions them from 100% to 0% opacity, then hides them.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>duration</var></code></dt>
						<dd>Optional; the amount of time it takes the transition to complete. May be a number of milliseconds, <code>"slow"</code>, or <code>"fast"</code>; defaults to <code>400</code>.</dd>
						<dt><code><var>easing</var></code></dt>
						<dd>Optional; The speed curve of the transition. Possible values are <code>swing</code>, the default, which is slightly faster in the middle and slower at the beginning and end, or <code>linear</code>, where the transition proceeds at the same speed throughout its duration.</dd>
						<dt><code><var>callback</var></code></dt>
						<dd>Optional; a callback function to be executed after the transition has fully completed.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>fadeTo()</code></dt>
			<dd>
				Can accept up to four arguments, and visibly transitions the statement's selected element(s) from their current opacity to the opacity specified in the arguments.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>duration</var></code></dt>
						<dd>Required; the amount of time it takes the transition to complete. May be a number of milliseconds, <code>"slow"</code>, or <code>"fast"</code>; defaults to <code>400</code>.</dd>
						<dt><code><var>opacity</var></code></dt>
						<dd>Required; the opacity level to be faded to. Must be a numeric value between <code>0.00</code> and <code>1.00</code>.
						<dt><code><var>easing</var></code></dt>
						<dd>Optional; The speed curve of the transition. Possible values are <code>swing</code>, the default, which is slightly faster in the middle and slower at the beginning and end, or <code>linear</code>, where the transition proceeds at the same speed throughout its duration.</dd>
						<dt><code><var>callback</var></code></dt>
						<dd>Optional; a callback function to be executed after the transition has fully completed.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>fadeToggle()</code></dt>
			<dd>
				Can accept up to three arguments, and depending on whether the statement's selected element(s) are currently hidden or visible, runs <code>fadeIn()</code> or <code>fadeOut()</code> to toggle that status.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>duration</var></code></dt>
						<dd>Optional; the amount of time it takes the transition to complete. May be a number of milliseconds, <code>"slow"</code>, or <code>"fast"</code>; defaults to <code>400</code>.</dd>
						<dt><code><var>easing</var></code></dt>
						<dd>Optional; The speed curve of the transition. Possible values are <code>swing</code>, the default, which is slightly faster in the middle and slower at the beginning and end, or <code>linear</code>, where the transition proceeds at the same speed throughout its duration.</dd>
						<dt><code><var>callback</var></code></dt>
						<dd>Optional; a callback function to be executed after the transition has fully completed.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>finish()</code></dt>
			<dd>Can accept a queue name in its argument, and removes all pending animations from the queue for the statement's selected element(s), setting the new property values instantaneously. If no queue name is provided, it defaults to <code>"fx"</code>.</dd>
			<dt><code>hide()</code></dt>
			<dd>
				Can accept up to three arguments, and if any of the statement's selected element(s) are currently visible, visibly transitions them from 100% to 0% opacity and normal to 0 height, then hides them. This is effectively a combination of the <code>fadeOut()</code> and <code>slideUp()</code> methods.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>duration</var></code></dt>
						<dd>Optional; the amount of time it takes the transition to complete. May be a number of milliseconds, <code>"slow"</code>, or <code>"fast"</code>; defaults to <code>400</code>.</dd>
						<dt><code><var>easing</var></code></dt>
						<dd>Optional; The speed curve of the transition. Possible values are <code>swing</code>, the default, which is slightly faster in the middle and slower at the beginning and end, or <code>linear</code>, where the transition proceeds at the same speed throughout its duration.</dd>
						<dt><code><var>callback</var></code></dt>
						<dd>Optional; a callback function to be executed after the transition has fully completed.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>queue()</code></dt>
			<dd>Can accept a queue name in its argument, and returns the current queue for the statement's selected element(s) as an array containing each remaining queue item as an entry. If no queue name is provided, it defaults to <code>"fx"</code>.</dd>
			<dt><code>show()</code></dt>
			<dd>
				Can accept up to three arguments, and if any of the statement's selected element(s) are currently hidden, visibly transitions them from 0% to 100% opacity and 0 to normal height. This is effectively a combination of the <code>fadeIn()</code> and <code>slideDown()</code> methods.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>duration</var></code></dt>
						<dd>Optional; the amount of time it takes the transition to complete. May be a number of milliseconds, <code>"slow"</code>, or <code>"fast"</code>; defaults to <code>400</code>.</dd>
						<dt><code><var>easing</var></code></dt>
						<dd>Optional; The speed curve of the transition. Possible values are <code>swing</code>, the default, which is slightly faster in the middle and slower at the beginning and end, or <code>linear</code>, where the transition proceeds at the same speed throughout its duration.</dd>
						<dt><code><var>callback</var></code></dt>
						<dd>Optional; a callback function to be executed after the transition has fully completed.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>slideDown()</code></dt>
			<dd>
				Can accept up to three arguments, and if any of the statement's selected element(s) are currently hidden, visibly transitions them from 0 to normal height.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>duration</var></code></dt>
						<dd>Optional; the amount of time it takes the transition to complete. May be a number of milliseconds, <code>"slow"</code>, or <code>"fast"</code>; defaults to <code>400</code>.</dd>
						<dt><code><var>easing</var></code></dt>
						<dd>Optional; The speed curve of the transition. Possible values are <code>swing</code>, the default, which is slightly faster in the middle and slower at the beginning and end, or <code>linear</code>, where the transition proceeds at the same speed throughout its duration.</dd>
						<dt><code><var>callback</var></code></dt>
						<dd>Optional; a callback function to be executed after the transition has fully completed.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>slideToggle()</code></dt>
			<dd>
				Can accept up to three arguments, and depending on whether the statement's selected element(s) are currently hidden or visible, runs <code>slideDown()</code> or <code>slideUp()</code> to toggle that status.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>duration</var></code></dt>
						<dd>Optional; the amount of time it takes the transition to complete. May be a number of milliseconds, <code>"slow"</code>, or <code>"fast"</code>; defaults to <code>400</code>.</dd>
						<dt><code><var>easing</var></code></dt>
						<dd>Optional; The speed curve of the transition. Possible values are <code>swing</code>, the default, which is slightly faster in the middle and slower at the beginning and end, or <code>linear</code>, where the transition proceeds at the same speed throughout its duration.</dd>
						<dt><code><var>callback</var></code></dt>
						<dd>Optional; a callback function to be executed after the transition has fully completed.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>slideUp()</code></dt>
			<dd>
				Can accept up to three arguments, and if any of the statement's selected element(s) are currently visible, visibly transitions them from normal height to 0.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>duration</var></code></dt>
						<dd>Optional; the amount of time it takes the transition to complete. May be a number of milliseconds, <code>"slow"</code>, or <code>"fast"</code>; defaults to <code>400</code>.</dd>
						<dt><code><var>easing</var></code></dt>
						<dd>Optional; The speed curve of the transition. Possible values are <code>swing</code>, the default, which is slightly faster in the middle and slower at the beginning and end, or <code>linear</code>, where the transition proceeds at the same speed throughout its duration.</dd>
						<dt><code><var>callback</var></code></dt>
						<dd>Optional; a callback function to be executed after the transition has fully completed.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>stop()</code></dt>
			<dd>Can accept up to two boolean values in its arguments; default behavior is to stop the currently running animation on the statement's selected element(s) at their current point, meaning they will never reach their original target style values. If one <code>true</code> value is provided, all queued animations will also be removed from the queue, and if a second <code>true</code> value is provided, the affected animations will be completed immediately instead of halted partway through. Note that this method, unlike most others, does not have a place in its arguments for a queue name, so all queues will be affected. Additionally, because both arguments are booleans, if clearing the queue is not desired but instant completion of animations is, a <code>false</code> value must be provided as the first argument.</dd>
				<!--Does stopping result in the next item in the queue immediately running, running after any specified delays, or what?-->
			<dt><code>toggle()</code></dt>
			<dd>
				Can accept up to three arguments, and depending on whether the statement's selected element(s) are currently hidden or visible, runs <code>slideDown()</code> or <code>slideUp()</code> to toggle that status. This is effectively a combination of the <code>fadeToggle()</code> and <code>slideToggle()</code> methods.
				<details>
					<summary>Arguments:</summary>
					<dl>
						<dt><code><var>duration</var></code></dt>
						<dd>Optional; the amount of time it takes the transition to complete. May be a number of milliseconds, <code>"slow"</code>, or <code>"fast"</code>; defaults to <code>400</code>.</dd>
						<dt><code><var>easing</var></code></dt>
						<dd>Optional; The speed curve of the transition. Possible values are <code>swing</code>, the default, which is slightly faster in the middle and slower at the beginning and end, or <code>linear</code>, where the transition proceeds at the same speed throughout its duration.</dd>
						<dt><code><var>callback</var></code></dt>
						<dd>Optional; a callback function to be executed after the transition has fully completed.</dd>
					</dl>
				</details>
			</dd>
		</dl>
	</section>
</main>	
<?php
	require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
