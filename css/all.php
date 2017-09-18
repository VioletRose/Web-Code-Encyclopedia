<?php
    $PAGE_NAME = 'all';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This property is capable of changing every CSS property associated with its target in one of three ways, with the exceptions of <code>unicode-bidi</code> and <code>direction</code>. This is most useful for reversing a number of changes made more generally on a specific level. Note, though, that under normal circumstances it is easier to avoid targeting an element via selectors than by undoing higher-level changes; the most likely use case here would be if you don't have full control over the stylesheets of the site you're working on.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;style scoped&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;.redp {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background-color: red;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: white;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;#normalp {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;all: initial;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br>
				&lt;/style&gt;
				<br>
				&lt;p class="redp"&gt;The background color in this &lt;code&gt;&lt;p&gt;&lt;/code&gt; element is red.&lt;/p&gt;
				<br>
				&lt;p class="redp" id="normalp"&gt;In this one, it isn't, because the values were reset.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<style>
				.redp {
					background-color: red;
					color: white;
				}
				#normalp {
					all: initial;
					font-family: 'Open Sans', sans-serif;
				}
			</style>
			<p class="redp">The background color in this <code>&lt;p&gt;</code> element is red.</p>
			<p class="redp" id="normalp">In this one, it isn't, because the values were reset.</p>
		</figure>
	</section>
	<section>
		<h4>Accepted values of <code>all</code>:</h4>
		<dl>
			<dt><code>initial</code></dt>
			<dd>Sets all properties assigned to the element to their initial, unmodified values.</dd>
			<dt><code>inherit</code></dt>
			<dd>Sets all properties assigned to the element to the parent element's values if they are inheritable. If they are not, they will be unchanged.</dd>
			<dt><code>unset</code></dt>
			<dd>Sets all properties assigned to the element to the parent element's values if they are inheritable. If they are not, they will be set to the initial values instead.</dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
