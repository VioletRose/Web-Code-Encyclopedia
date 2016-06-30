<?php
    $PAGE_NAME = '&lt;ins&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This Syntactic Web tag designates the included text as inserted into a document after it was written, sometimes to replace earlier text (see the <code>&lt;del&gt;</code> tag), sometimes to add additional clarification. In addition, it underlines the text by default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;p&gt;Sometimes, text needs to be &lt;del&gt;corracted&lt;/del&gt;&lt;ins&gt;corrected&lt;/ins&gt;, but for some reason you want the mistake to be documented or noted in the finished product.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<p>Sometimes, text needs to be <del>corracted</del><ins>corrected</ins>, but for some reason you want the mistake to be documented or noted in the finished product.</p>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>cite</code></dt>
			<dd>&#10551; Defines a URL meant to be a citation for why the text was inserted or changed.</dd>
			<dt><code>datetime</code></dt>
			<dd>&#10551; Defines the date and, optionally, time that the text was inserted or changed, in YYYY-MM-DDThh:mm:ssTZD format. The components are year/month/day, T as a separator if time is being specified, then hour (in 24 hour format), minute, second, and three letter time zone designator.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
