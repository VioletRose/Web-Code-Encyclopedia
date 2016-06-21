<?php
    $PAGE_NAME = '&lt;ruby&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="unsectionedmain">
	<p>This tag defines what is known as a "ruby" annotation, displaying a foreign language character (especially Japanese, Chinese, or Korean) and then, above it, showing its proper pronunciation syllable by syllable, either with phonetic characters or in English depending on the intended audience. The name comes from the original British typesetter's name for a 5.5 point font, which came to be used for such annotations internationally.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;ruby&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;東&lt;rt&gt;とう&lt;/rt&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;京&lt;rt&gt;きょう&lt;/rt&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;東&lt;rt&gt;tō&lt;/rt&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;京&lt;rt&gt;kyō&lt;/rt&gt;
			<br>
			&lt;/ruby&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<ruby>
			東<rt>とう</rt>
			京<rt>きょう</rt>
			東<rt>tō</rt>
			京<rt>kyō</rt>
		</ruby>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
