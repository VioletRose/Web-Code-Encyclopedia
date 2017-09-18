<?php
    $PAGE_NAME = 'text-transform';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p></p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#capitalizedP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-transform: capitalize;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#lowercaseP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-transform: lowercase;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#uppercaseP {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;text-transform: uppercase;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p&gt;Uppercase, lowercase, and nOn-sTaNDArD cAPItaliZaTioN are all allowed in normal text rendering.&lt;/p&gt;
				<br>
				&lt;p id="capitalizedP"&gt;Uppercase, lowercase, and nOn-sTaNDArD cAPItaliZaTioN are all allowed in normal text rendering.&lt;/p&gt;
				<br>
				&lt;p id="lowercaseP"&gt;Uppercase, lowercase, and nOn-sTaNDArD cAPItaliZaTioN are all allowed in normal text rendering.&lt;/p&gt;
				<br>
				&lt;p id="uppercaseP"&gt;Uppercase, lowercase, and nOn-sTaNDArD cAPItaliZaTioN are all allowed in normal text rendering.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#capitalizedP {
					text-transform: capitalize;
				}
				#lowercaseP {
					text-transform: lowercase;
				}
				#uppercaseP {
					text-transform: uppercase;
				}
			</style>
			<p>Uppercase, lowercase, and nOn-sTaNDArD cAPItaliZaTioN are all allowed in normal text rendering.</p>
			<p id="capitalizedP">Uppercase, lowercase, and nOn-sTaNDArD cAPItaliZaTioN are all allowed in normal text rendering.</p>
			<p id="lowercaseP">Uppercase, lowercase, and nOn-sTaNDArD cAPItaliZaTioN are all allowed in normal text rendering.</p>
			<p id="uppercaseP">Uppercase, lowercase, and nOn-sTaNDArD cAPItaliZaTioN are all allowed in normal text rendering.</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code></code>:</h4>
		<dl>
			<dt><code>none</code></dt>
			<dd>The default value. Text will display as it was written in the HTML document.</dd>
			<dt><code>capitalize</code></dt>
			<dd>The first letter of each word will be capitalized.</dd>
			<dt><code>uppercase</code></dt>
			<dd>Every letter will be capitalized.</dd>
			<dt><code>lowercase</code></dt>
			<dd>Every letter will be made lowercase.</dd>
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
