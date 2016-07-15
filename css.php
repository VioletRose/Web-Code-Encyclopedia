<?php
    $PAGE_NAME = 'CSS';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p><strong>This page is not complete yet!</strong></p>
		<p>On every page in this section, on the left side of the screen you will find links to pages for each of the properties used in CSS, sorted categorically and alphabetically, as well as indexes of CSS selectors and standard web colors. Each page will have a brief description of the property, an example of its use, and a list of accepted values. On this page, you will also find explanations of the more basic concepts in CSS.</p>
	</section>
	<section>
		<h4>What is CSS?</h4>
		<p>CSS - Cascade StyleSheets code is the primary force behind how the modern Web looks and behaves in your browser. A .css file is loaded by the browser, along with the page, which contains instructions in CSS code for how to display the page and all of its components. CSS code may also be inserted into HTML code through the use of the <a href="/html/style.php"<code>&lt;style&gt;</code></a> tag, but under most circumstances this is best avoided. Note: although the code examples provided in this section invariably make use of the <code>&lt;style&gt;</code> tag, <strong>this is done for the purpose of having a user-readable demonstration and is not recommended for most other purposes.</strong></p>
	</section>
	<section>
		<h4>Syntax - How to Write a CSS Stylesheet</h4>
		<figure>
			<p>Stylesheet files do not have any of the overhead an HTML document does. They simply consist of a list of entries in this format:</p>
			<code>
				<i>selector</i> {
				&nbsp;&nbsp;&nbsp;&nbsp;<i>property</i>: <i>value</i>;
				}
			</code>
		</figure>
		<p>The <i>selector</i> is how the browser knows which elements or tags the style rules should be applied to. After that, the { bracket begins the actual instructions. A <i>property</i> is an instruction for the browser on what aspect of the element or tag targeted by the <i>selector</i> is meant to be different from its normal behavior; <code>background-color</code> is one example. The <i>value</i> specifies exactly how the default behavior will be changed. Note that, like HTML, CSS is not very picky about spacing, tabbing, and line breaks. Also like HTML, this should not be taken as an excuse to write sloppy code - under most circumstances, keeping your CSS neat and readable will be a good thing for you and anyone else who may need to work with it. There is one exception: on large sites accessed very frequently and with very long stylesheets, it can be useful to reduce bandwidth use via "minifying" the stylesheet to remove all such unnecessary characters; however, this does not mean the stylesheet should be <i>written</i> that way, and an un-minified backup should be kept for future editing.</p>
	</section>
	<section>
		<h4>Selectors</h4>
		<p></p>
	</section>
	<section>
		<h4>Specificity</h4>
		<p></p>
	</section>
	<section>
		<h4>Inherited Properties</h4>
		<p></p>
	</section>
	<section>
		<h4>Useful Shorthand</h4>
		<p></p>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
