<?php
    $PAGE_NAME = '&lt;pre&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This tag denotes preformatted text; it will display in a fixed width font, and spaces and line breaks will display exactly as they are used in the HTML document. However, elements and tags can still be placed inside of the <code>&lt;pre&gt;</code> element and will function normally. Due to the way this element functions, if you wish to format your HTML document using tabs to indicate parent/child relationships between elements and their contents (as is common in other languages, especially the C family, and makes the document much more readable), <code>&lt;pre&gt;</code> must be written as an inline tag, using <code>&lt;br&gt;</code> tags for line breaks, otherwise your tab characters will display in the element.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;pre&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;This&nbsp;text&nbsp;&nbsp;has
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;been&nbsp;&nbsp;&nbsp;formatted&nbsp;in
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;a&nbsp;&nbsp;very&nbsp;&nbsp;&nbsp;stupid
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;way.
				<br>
				&lt;/pre&gt;
				<br>
				&lt;pre&gt;This&nbsp;text&nbsp;&nbsp;has&lt;br&gt;been&nbsp;&nbsp;&nbsp;formatted&nbsp;in&lt;br&gt;a&nbsp;&nbsp;slightly&nbsp;less&nbsp;&nbsp;&nbsp;stupid&lt;br&gt;way.&lt;/pre&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<pre>&nbsp;&nbsp;&nbsp;&nbsp;This text  has<br>&nbsp;&nbsp;&nbsp;&nbsp;been   formatted in<br>&nbsp;&nbsp;&nbsp;&nbsp;a  very   stupid<br>&nbsp;&nbsp;&nbsp;&nbsp;way.</pre>
			<pre>This text  has<br>been   formatted in<br>a  slightly less   stupid<br>way.</pre>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
