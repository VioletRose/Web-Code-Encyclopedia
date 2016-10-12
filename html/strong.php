<?php
    $PAGE_NAME = '&lt;strong&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This Syntactic Web tag designates the included text as strongly worded or highly important for the user to notice, as well as bolding it by default.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;In general, whenever you are writing any body of text, there will be certain parts you consider highly important to the user. This is when the &lt;code&gt;&amp;lt;strong&amp;gt;&lt;/code&gt; tag should be used, &lt;strong&gt;not&lt;/strong&gt; &lt;code&gt;&amp;lt;b&amp;gt;&lt;/code&gt;.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p>In general, whenever you are writing any body of text, there will be certain parts you consider highly important to the user. This is when the <code>&lt;strong&gt;</code> tag should be used, <strong>not</strong> <code>&lt;b&gt;</code>.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
