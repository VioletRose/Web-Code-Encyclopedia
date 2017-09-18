<?php
    $PAGE_NAME = 'word-wrap';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property allows you to specify that words in an element should break mid-word, but only if this is unavoidably necessary to prevent overflow. This property has similar uses to <a href="css/word-break.php"><code>word-break</code></a>, but functions a bit differently.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#wordWrapBox {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-style: solid;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;word-wrap: break-word;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 294px;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#wordWrapBox:hover {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;word-wrap: normal;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;div id="wordWrapBox"&gt;Within this element, any word (or string of text) may break midway through if this is necessary to prevent content overflow, evenifitisanextremelylonguninterruptedstringoftextsuchasthisoranextendedURLwithahashorfileIDinit. You can mouse over the box to see what would happen if this was not possible!&lt;/div&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				#wordWrapBox {
					max-width: 294px;
					border-style: solid;
					word-wrap: break-word;
				}
				#wordWrapBox:hover {
					word-wrap: normal;
				}
			</style>
			<div id="wordWrapBox">Within this element, any word (or string of text) may break midway through if this is necessary to prevent content overflow, evenifitisanextremelylonguninterruptedstringoftextsuchasthisoranextendedURLwithahashorfileIDinit. You can mouse over the box to see what would happen if this was not possible!</div>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>word-wrap</code>:</h4>
		<dl>
			<dt><code>normal</code></dt>
			<dd>The default behavior. Word wrapping follows the normal rules, only breaking at spaces and hyphens.</dd>
			<dt><code>break-word</code></dt>
			<dd>Extremely long words will be broken midway through to prevent overflow.</dd>
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
