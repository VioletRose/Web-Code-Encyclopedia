<?php
    $PAGE_NAME = 'list-style';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p>This property and the sub-properties it sets allow you to control the markers of ordered and unordered lists.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#styledList {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list-style: circle inside url('/images/flowermarker.png');/*I define my desired marker type even though the image will overwrite it, in case the image doesn't display for any reason.*/
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#styledList:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list-style-position: outside;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#styledList li {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: aliceblue;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;ul id="styledList"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;You&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;can&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;mouse&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;over&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;this&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;list&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;to&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;see&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;the&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;marker&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;position&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;change!&lt;/li&gt;
				<br>
				&lt;/ul&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#styledList {
					list-style: circle inside url('/images/flowermarker.png');/*I define my desired marker type even though the image will overwrite it, in case the image doesn't display for any reason.*/
				}
				#styledList:hover {
					list-style-position: outside;
				}
				#styledList li {
					background-color: aliceblue;
				}
			</style>
			<ul id="styledList">
				<li>You</li>
				<li>can</li>
				<li>mouse</li>
				<li>over</li>
				<li>this</li>
				<li>list</li>
				<li>to</li>
				<li>see</li>
				<li>the</li>
				<li>marker</li>
				<li>position</li>
				<li>change!</li>
			</ul>
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code>list-style</code>:</h4>
		<dl>
			<dt><code>list-style-type</code></dt>
			<dd>This property defines the type of marker each list entry will have.</dd>
			<dt><code>list-style-position</code></dt>
			<dd>This property defines where the marker will be placed relative to the list entries.</dd>
			<dt><code>list-style-image</code></dt>
			<dd>This property allows an image to be used in place of the normal markers.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>list-style</code>:</h4>
		<dl>
			<dt><code><var>type</var> <var>position</var> <var>image</var></code></dt>
			<dd>
				The values that would normally be set through the associated, non-shorthand border properties, in this order.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>type</var></code></dt>
						<dd>Optional. The value of <code>list-style-type</code>.</dd>
						<dt><code><var>position</var></code></dt>
						<dd>Optional. The value of <code>list-style-position</code>.</dd>
						<dt><code><var>image</var></code></dt>
						<dd>Optional. The value of <code>list-style-image</code>.</dd>
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
		<h4>Accepted values of <code>list-style-type</code>:</h4>
		<dl>
			<dt><code>disc</code></dt>
			<dd>The default value. A solid circle (or bullet).</dd>
			<dt><code>armenian</code></dt>
			<dd>Traditional Armenian numbering.</dd>
			<dt><code>circle</code></dt>
			<dd>A hollow circle.</dd>
			<dt><code>cjk-ideographic</code></dt>
			<dd>Plain ideographic numbering.</dd>
			<dt><code>decimal</code></dt>
			<dd>Ordinary numbering.</dd>
			<dt><code>decimal-leading-zero</code></dt>
			<dd>Ordinary numbering, except values under two digits will have a 0 in the tens place.</dd>
			<dt><code>georgian</code></dt>
			<dd>Traditional Georgian numbering.</dd>
			<dt><code>hebrew</code></dt>
			<dd>Traditional Hebrew numbering.</dd>
			<dt><code>hiragana</code></dt>
			<dd>Traditional Hiragana numbering.</dd>
			<dt><code>hiragana-iroha</code></dt>
			<dd>Traditional Hiragana iroha numbering.</dd>
			<dt><code>katakana</code></dt>
			<dd>Traditional Katakana numbering.</dd>
			<dt><code>katakana-iroha</code></dt>
			<dd>Traditional Katakana iroha numbering.</dd>
			<dt><code>lower-alpha</code></dt>
			<dd>Lowercase alphabetical 'numbering'.</dd>
			<dt><code>lower-greek</code></dt>
			<dd>Lowercase Greek alphabetical 'numbering'.</dd>
			<dt><code>lower-roman</code></dt>
			<dd>Lowercase Latin alphabetical 'numbering'.</dd>
			<dt><code>lower-roman</code></dt>
			<dd>Lowercase Roman numeral numbering.</dd>
			<dt><code>none</code></dt>
			<dd>No marker.</dd>
			<dt><code>square</code></dt>
			<dd>A solid square.</dd>
			<dt><code>upper-alpha</code></dt>
			<dd>Uppercase alphabetical 'numbering'.</dd>
			<dt><code>upper-latin</code></dt>
			<dd>Uppercase Latin alphabetical 'numbering'.</dd>
			<dt><code>upper-roman</code></dt>
			<dd>Uppercase Roman numeral numbering.</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>list-style-position</code>:</h4>
		<dl>
			<dt><code>inside</code></dt>
			<dd>The marker is indented along with the list entry. This results in entries being effectively more indented.</dd>
			<dt><code>outside</code></dt>
			<dd>The default value. The marker is placed within the entry's indentation.</dd>
			<dt><code>initial</code></dt>
			<dd>Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
	<section>
		<h4>Accepted values of <code>list-style-image</code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>The default value. No image will be used, instead, <code>list-style-type</code> governs the marker displayed.</dd>
			<dt><code>url('<var>URL</var>')</code></dt>
			<dd>
				Specifies the location of the image to be used as a list marker.
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var>URL</var></code></dt>
						<dd>URL variable. The address of the desired image.</dd>
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
