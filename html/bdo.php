<?php
    $PAGE_NAME = '&lt;bdo&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This tag is used to force the text within to be oriented left-to-right or right-to-left, regardless of the default for the characters used in it.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;p&gt;&lt;bdo dir="rtl"&gt;Right to left.&lt;/bdo&gt;&lt;/p&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;&lt;bdo dir="ltr"&gt;左から右へ&lt;/bdo&gt;&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<p><bdo dir="rtl">Right to left.</bdo></p>
			<p><bdo dir="ltr">左から右へ</bdo></p>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>dir</code></dt>
			<dd>Specifies whether the text should be rendered left to right, or right to left. Accepted values are <code>ltr</code> and <code>rtl</code>.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
