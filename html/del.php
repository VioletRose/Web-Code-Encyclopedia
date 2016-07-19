<?php
    $PAGE_NAME = '&lt;del&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This Syntactic Web tag designates the included text as deleted or retracted, no longer relevant, but left in the document for the sake of history, context, or transparency, as well as styling it with a strikethrough.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;p&gt;Text that needs to be &lt;del&gt;redacted&lt;/del&gt;.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<p>Text that needs to be <del>redacted</del>.</p>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>cite</code></dt>
			<dd>&#10551; Defines a URL meant to be a citation for why the text was deleted.</dd>
			<dt><code>datetime</code></dt>
			<dd>&#10551; Defines the date and, optionally, time that the text was deleted, in YYYY-MM-DDThh:mm:ssTZD format. The components are year/month/day, T as a separator if time is being specified, then hour (in 24 hour format), minute, second, and three letter time zone designator.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
