<?php
    $PAGE_NAME = 'transform';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property allows you to perform a number of advanced transformations to the shape of an element. Most transformations can be 2d, which are rather straightforward, or 3d, which are more complex and often require perspective to be defined in some way for best results. Note that if you want to perform multiple transformations on the same element, they should all be specified in the same rule; <code>transform</code> accepts multiple values, separated by spaces, but another assignment of its value by a different rule will overwrite the previous one.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#transformedBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: thistle;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: solid mediumorchid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: mediumorchid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max-width: 244px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform: perspective(45px) rotate3d(0.50,0.20,0.30,10deg) skewX(-30deg) translate(90px,-25px);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#transformedBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transform: rotate3d(0.50,0.20,0.30,10deg) skewX(-25deg) translate(70px,-30px);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="transformedBox"&gt;My transform value is calculated by the browser as &lt;code&gt;matrix3d(0.994803, 0.0885063, -0.050342, 0.00111871, -0.544395, 0.945136, 0.166721, -0.00370491, 0.0623358, -0.138448, 0.988406, -0.0219646, 85.968, -22.1586, -8.52556, 1.18946);&lt;/code&gt;!&lt;/div&gt;
				<br>
				&lt;p&gt;Also, you can mouse over the box to see what it would look like without the use of perspective! Though obviously, this will make its statement about its calculated matrix incorrect.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#transformedBox {
					background-color: thistle;
					border: solid mediumorchid;
					color: mediumorchid;
					max-width: 244px;
					transform: perspective(45px) rotate3d(0.50,0.20,0.30,10deg) skewX(-25deg) translate(70px,-30px);
				}
				#transformedBox:hover {
					transform: rotate3d(0.50,0.20,0.30,10deg) skewX(-25deg) translate(70px,-30px);
				}
			</style>
			<div id="transformedBox">My transform value is calculated by the browser as <code>matrix3d(0.994803, 0.0885063, -0.050342, 0.00111871, -0.65486, 0.935308, 0.172311, -0.00382913, 0.0623358, -0.138448, 0.988406, -0.0219646, 105.904, -15.4171, -8.83855, 1.19641)</code>!</div>
			<p>Also, you can mouse over the box to see what it would look like without the use of perspective! Though obviously, this will make its statement about its calculated matrix incorrect.</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code></code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>The default value; no transformation will be done.</dd>
			<dt><code>matrix(<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>)</code></dt>
			<dd>
				A complex 2d transformation done using a matrix calculation. The browser will take the matrix, and multiply it by each of the element's corner positions. The actual mathematics involved are highly technical, but if one understands it fully, this method is the most direct and minimal way to accomplish the work of multiple transformations. If one doesn't understand matrix calculations, this value is best avoided or used with a third party tool to arrive at the necessary matrix. Note that for performance reasons, browsers usually convert the full transform effects into <code>matrix</code> or <code>matrix3d</code>, and the results can be viewed using developer tools.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>n</var></code></dt>
						<dd>Numeric variable. An entry within the matrix calculation.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>matrix3d(<<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>,<var>n</var>)</code></dt>
			<dd>
				Similar to <code>matrix</code>, but using 16 entries to govern the greater complexity of a 3d transformation.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>n</var></code></dt>
						<dd>Numeric variable. An entry within the matrix calculation.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>translate(<var>x</var>,<var>y</var>)</code></dt>
			<dd>
				Moves the element along both horizontal and vertical axes.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x</var></code></dt>
						<dd>Numeric variable, in measurements. The horizontal component of the transformation; negative numbers are used for leftward movement, and positive values for rightward.</dd>
						<dt><code><var>y</var></code></dt>
						<dd>Numeric variable, in measurements. The vertical component of the transformation; negative numbers are used for upward movement, and positive values for downward.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>translate3d(<var>x</var>,<var>y</var>,<var>z</var>)</code></dt>
			<dd>
				Moves the element along horizontal, vertical, and depth axes.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x</var></code></dt>
						<dd>Numeric variable, in measurements. The horizontal component of the transformation; negative numbers are used for leftward movement, and positive values for rightward.</dd>
						<dt><code><var>y</var></code></dt>
						<dd>Numeric variable, in measurements. The vertical component of the transformation; negative numbers are used for upward movement, and positive values for downward.</dd>
						<dt><code><var>z</var></code></dt>
						<dd>Numeric variable, in measurements. The depth component of the transformation; negative numbers are used for movement away, and positive values for movement towards.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>translateX(<var>x</var>)</code></dt>
			<dd>
				As <code>translate</code>, but only horizontal movement.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x</var></code></dt>
						<dd>Numeric variable, in measurements. Negative numbers are used for leftward movement, and positive values for rightward.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>translateY(<var>y</var>)</code></dt>
			<dd>
				As <code>translate</code>, but only vertical movement.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>y</var></code></dt>
						<dd>Numeric variable, in measurements. The vertical component of the transformation; negative numbers are used for upward movement, and positive values for downward.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>translateZ(<var>z</var>)</code></dt>
			<dd>
				As <code>translate3d</code>, but only depth movement.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>z</var></code></dt>
						<dd>Numeric variable, in measurements. The depth component of the transformation; negative numbers are used for movement away, and positive values for movement towards.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>scale(<var>x</var>,<var>y</var>)</code></dt>
			<dd>
				Resizes the element in both width and height, expanding or contracting from the center. Contracts with negative values, and expands with positive values.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x</var></code></dt>
						<dd>Numeric variable, in measurements. The adjustment to width.</dd>
						<dt><code><var>y</var></code></dt>
						<dd>Numeric variable, in measurements. The adjustment to height.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>scale3d(<var>x</var>,<var>y</var>,<var>z</var>)</code></dt>
			<dd>
				As <code>scale</code>, but with the added component of depth (thickness).
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x</var></code></dt>
						<dd>Numeric variable, in measurements. The adjustment to width.</dd>
						<dt><code><var>y</var></code></dt>
						<dd>Numeric variable, in measurements. The adjustment to height.</dd>
						<dt><code><var>z</var></code></dt>
						<dd>Numeric variable, in measurements. The adjustment to depth.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>scaleX(<var>x</var>)</code></dt>
			<dd>
				As <code>scale</code>, but only width adjustment.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x</var></code></dt>
						<dd>Numeric variable, in measurements. The adjustment to width.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>scaleY(<var>y</var>)</code></dt>
			<dd>
				As <code>scale</code>, but only height adjustment.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>y</var></code></dt>
						<dd>Numeric variable, in measurements. The adjustment to height.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>scaleZ(<var>z</var>)</code></dt>
			<dd>
				As <code>scale3d</code>, but only depth adjustment.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>z</var></code></dt>
						<dd>Numeric variable, in measurements. The adjustment to depth.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>rotate(<var>angle</var>deg)</code></dt>
			<dd>
				Rotates the element in the direction specified, along the depth axis.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>angle</var></code></dt>
						<dd>Numeric variable, in degrees. Negative values result in counterclockwise rotation, and positive values result in clockwise rotation.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>rotate3d(<var>x</var>,<var>y</var>,<var>z</var>,<var>angle</var>deg)</code></dt>
			<dd>
				As <code>rotate</code>, but allowing you to specify an axis of rotation other than straight depth. Non-normalized values where the sum of all three axes is not 1 will be normalized by the browser. If the terminology used here is unfamiliar to you, you may wish to look up how 3d axes are calculated or search for examples online before using this property.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x</var></code></dt>
						<dd>Numeric variable, in numbers. The first "degree of liberty" for the axis.</dd>
						<dt><code><var>y</var></code></dt>
						<dd>Numeric variable, in numbers. The second "degree of liberty" for the axis.</dd>
						<dt><code><var>z</var></code></dt>
						<dd>Numeric variable, in numbers. The third "degree of liberty" for the axis.</dd>
						<dt><code><var>angle</var></code></dt>
						<dd>Numeric variable, in degrees. Negative values result in counterclockwise rotation, and positive values result in clockwise rotation.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>rotateX(<var>angle</var>deg)</code></dt>
			<dd>
				As <code>rotate3d</code>, but automatically using a straight horizontal axis of rotation.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>angle</var></code></dt>
						<dd>Numeric variable, in degrees. Negative values result in counterclockwise rotation, and positive values result in clockwise rotation.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>rotateY(<var>angle</var>deg)</code></dt>
			<dd>
				As <code>rotate3d</code>, but automatically using a straight vertical axis of rotation.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>angle</var></code></dt>
						<dd>Numeric variable, in degrees. Negative values result in counterclockwise rotation, and positive values result in clockwise rotation.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>rotateZ(<var>angle</var>)</code></dt>
			<dd>
				As <code>rotate3d</code>, but automatically using a straight depth axis of rotation. Functionally identical to <code>rotate</code>.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>angle</var></code></dt>
						<dd>Numeric variable, in degrees. Negative values result in counterclockwise rotation, and positive values result in clockwise rotation.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>skew(<var>x-angle</var>deg,<var>y-angle</var>deg)</code></dt>
			<dd>
				Skews the element horizontally and vertically, one corner moving in a given direction, and the other moving opposite. In practice, insufficiently low values can warp the element heavily, so this property should be used with careful testing at all stages.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>x-angle</var></code></dt>
						<dd>Numeric variable, in degrees. Negative values result in the top corners moving right and the bottom corners moving left, positive values have the opposite effect.</dd>
						<dt><code><var>y-angle</var></code></dt>
						<dd>Numeric variable, in degrees. Negative values result in the left corners moving down and the right corners moving up, positive values have the opposite effect.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>skewX(<var>angle</var>deg)</code></dt>
			<dd>
				As <code>skew</code>, but only using horizontal adjustments.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>angle</var></code></dt>
						<dd>Numeric variable, in degrees. Negative values result in the top corners moving right and the bottom corners moving left, positive values have the opposite effect.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>skewY(<var>angle</var>deg)</code></dt>
			<dd>
				As <code>skew</code>, but only using vertical adjustments.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>angle</var></code></dt>
						<dd>Numeric variable, in degrees. Negative values result in the left corners moving down and the right corners moving up, positive values have the opposite effect.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>perspective(<var>n</var>)</code></dt>
			<dd>
				Functions almost identically to the <a href="/css/perspective.php"><code>perspective</code></a> property and uses the same measurements, except it is used on the element to be transformed, rather than a parent. Note that if this value is used, it must be <em>first</em> in the order of transformations specified.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>n</var></code></dt>
						<dd>Numeric variable, in measurements. How far away the transformed element appears to be, for purposes of 3d rendering.</dd>
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
