<?php
    $PAGE_NAME = '&lt;ruby&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag defines what is known as a "ruby" annotation, displaying a foreign language character (especially Japanese, Chinese, or Korean) and then, above it, showing its proper pronunciation syllable by syllable, either with phonetic characters or in English depending on the intended audience. The name comes from the original British typesetter's name for a 5.5 point font, which came to be used for such annotations internationally.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;ruby&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;東&lt;rp&gt;(&lt;/rp&gt;&lt;rt&gt;とう&lt;/rt&gt;&lt;rp&gt;)&lt;/rp&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;京&lt;rp&gt;(&lt;/rp&gt;&lt;rt&gt;きょう&lt;/rt&gt;&lt;rp&gt;)&lt;/rp&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;東&lt;rp&gt;(&lt;/rp&gt;&lt;rt&gt;tō&lt;/rt&gt;&lt;rp&gt;)&lt;/rp&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;京&lt;rp&gt;(&lt;/rp&gt;&lt;rt&gt;kyō&lt;/rt&gt;&lt;rp&gt;)&lt;/rp&gt;
				<br>
				&lt;/ruby&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<ruby>
				東<rp>(</rp><rt>とう</rt><rp>)</rp>
				京<rp>(</rp><rt>きょう</rt><rp>)</rp>
				東<rp>(</rp><rt>tō</rt><rp>)</rp>
				京<rp>(</rp><rt>kyō</rt><rp>)</rp>
			</ruby>
		</figure>
	</section>
	<section>
		<h4>Child tags of <code>&lt;ruby&gt;</code></h4>
		<dl>
			<dt><code>&lt;rp&gt;</code></dt>
			<dd>&#10551; This tag is meant to contain a single opening or closing parenthesis, one placed before and one after each <code>&lt;rt&gt;</code> tag. They will only be displayed if the user's browser does not support the <code>&lt;ruby&gt;</code> tag.</dd>
			<dt><code>&lt;rt&gt;</code></dt>
			<dd>&#10551; This tag contains an annotation for the <code>&lt;ruby&gt;</code> tag, and displays the included text above a preceding character in a 50% sized font.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
