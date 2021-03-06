<?php
    $PAGE_NAME = '&lt;q&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This tag is used to denote a small quotation, without a displayed attribution.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;It is often said that to achieve a state of neatness and precision in one's work, one must &lt;q&gt;Mind your p's and q's.&lt;/q&gt; However, this doesn't refer to careful handwriting as outward appearances might suggest, instead being a more metaphorical way to say that even the small details matter.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>It is often said that to achieve a state of neatness and precision in one's work, one must <q>Mind your p's and q's.</q> However, this doesn't refer to careful handwriting as outward appearances might suggest, instead being a more metaphorical way to say that even the small details matter.</p>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>cite</code></dt>
			<dd>Specifies the URL that the quote is cited from.
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
