<?php
    $PAGE_NAME = '&lt;u&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This tag styles the included text with an underline. As with <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code>, it should be noted that another tag is usually more appropriate, and in this case, care should also be taken to avoid the underlined text being mistaken for a hyperlink. It is useful in certain cases however, such as if the design calls for it or the included text is a misspelled word, or a proper noun in Chinese.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;Despite the existence of many other tags that serve similar purposes, sometimes an &lt;u&gt;undrrline&lt;/u&gt; is still required.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>Despite the existence of many other tags that serve similar purposes, sometimes an <u>undrrline</u> is still required.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
