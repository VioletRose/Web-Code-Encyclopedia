<?php
    $PAGE_NAME = '&lt;meta&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This element is used for defining certain things about the page as a whole, including the text encoding (which has a displayed effect) and other general data that is more useful in terms of the Syntactic Web. It is especially important for search engine optimization, because it can be used to succinctly list what sort of content is on the page that someone might be searching for. It can only be placed in the <code>&lt;head&gt;</code>, not in the <code>&lt;body&gt;</code>.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;meta charset="UTF-8"&gt;
				<br>
				&lt;meta name="description" content="Personal visual reference for web design"&gt;
				<br>
				&lt;meta name="keywords" content="HTML,CSS,Javascript"&gt;
				<br>
				&lt;meta name="author" content="Violet Rose"&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>charset</code></dt>
			<dd>&#10551; Defines the text encoding for the page.</dd>
			<dt><code>content</code></dt>
			<dd>&#10551; When placed in the same <code>&lt;meta&gt;</code> element as <code>content</code> or <code>http-equiv</code>, the text string entered as its value will be associated with them. Note: if this is a list of keywords, each one should be separated by a single comma and no spaces, such as <code>"<i>word one</i>,<i>word two</i>"</code>.</dd>
			<dt><code>http-equiv</code></dt>
			<dd>
				&#10551; This attribute interacts with <code>content</code> by defining its purpose.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>content-type</code></dt>
						<dd>&#10551; Specifies that the value of <code>content</code> is the text encoding to be used on the page. This no longer has any use case, since <code>charset</code> is more ideal for the same purpose.</dd>
						<dt><code>default-style</code></dt>
						<dd>&#10551; Specifies that the value of <code>content</code> is the URL of a .css stylesheet containing style rules to be used on the current page. This no longer has any use case, since the <code>&lt;link&gt;</code> element is more ideal for the same purpose.</dd>
						<dt><code>refresh</code></dt>
						<dd>&#10551; Specifies that the value of <code>content</code> is the interval in seconds at which the page should automatically refresh. Note that great care should be taken with this functionality, as taking control away from the user in this fashion is ill-advised in the majority of possible circumstances.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>name</code></dt>
			<dd>
				&#10551; Unlike how this attribute functions for most other elements, in this case it has specific allowed values and doesn't simply accept a text string.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>application-name</code></dt>
						<dd>&#10551; Specifies that the value of <code>content</code> is the name of the Web application that the page is representing.</dd>
						<dt><code>author</code></dt>
						<dd>&#10551; Specifies that the value of <code>content</code> is the name of the page's author.</dd>
						<dt><code>description</code></dt>
						<dd>&#10551; Specifies that the value of <code>content</code> is a description of the page.</dd>
						<dt><code>generator</code></dt>
						<dd>&#10551; Specifies that the value of <code>content</code> is the name of one of the software packages used to generate the page, if it was not written by hand.</dd>
						<dt><code>keywords</code></dt>
						<dd>&#10551; Specifies that the value of <code>content</code> is a list of keywords related to the page.<dd>
					</dl>
				</details>
			</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
