<?php
    $PAGE_NAME = '&lt;blockquote&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This Semantic Web element designates a section of text as quoted from an external source, usually another website, and also indents it by default in most browsers.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;blockquote cite="https://violetrose.prototeam.org/html.php"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I will make the list of elements prettier in the future, but for right now I just wanted to get started.
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/blockquote&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<blockquote cite="https://violetrose.prototeam.org/html.php">I will make the list of elements prettier in the future, but for right now I just wanted to get started.</blockquote>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt>cite</dt>
			<dd>Specifies a URL of where the text is quoted from. Note that this URL will not be displayed on the actual webpage.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
