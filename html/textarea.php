<?php
    $PAGE_NAME = '&lt;textarea&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This element defines an area where the user can enter text, with a fixed width and height. The text inside will be displayed in a monospace font. If the text inside doesn't fit within that size, it will automatically add scroll arrows to itself.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;textarea rows="4" cols="70"&gt;Welcome to Violet's Web Code Encyclopedia, a project I am working on to familiarize myself with coding in HTML, CSS, and Javascript, in terms of both study and practice. Within this site, you will find visual examples and explanations of the various elements, declarations, and statements that are possible in each language.&lt;/textarea&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<textarea rows="4" cols="70">Welcome to Violet's Web Code Encyclopedia, a project I am working on to familiarize myself with coding in HTML, CSS, and Javascript, in terms of both study and practice. Within this site, you will find visual examples and explanations of the various elements, declarations, and statements that are possible in each language. If you wish, please delete this text and have fun writing your own!</textarea>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>autofocus</code></dt>
			<dd>&#10551; If present, specifies that the element should be focused (selected) when the page loads, scrolling down the page to its location if necessary.</dd>
			<dt><code>cols</code></dt>
			<dd>&#10551; Defines the width of the element, in characters.</dd>
			<dt><code>dirname</code></dt>
			<dd>&#10551; Specifies that the text direction of the user's text input should be submitted along with any form data. Must be set to <code><i>name</i>.dir</code>, where <i>name</i> is the same as the element's <code>name</code> attribute.</dd>
			<dt><code>disabled</code></dt>
			<dd>&#10551; If present, the text field will be grayed out and unselectable.</dd>
			<dt><code>form</code></dt>
			<dd>&#10551; Specifies the id of an associated <code>&lt;form&gt;</code> element. Not necessary if the element is a child of the <code>&lt;form&gt;</code> element./dd>
			<dt><code>maxlength</code></dt>
			<dd>&#10551; Defines the maximum number of characters allowed within the field.</dd>
			<dt><code>name</code></dt>
			<dd>&#10551; Defines the name of the element, which can be used to target it with Javascript.</dd>
			<dt><code>placeholder</code></dt>
			<dd>&#10551; Defines placeholder text that will appear in the field until the user begins typing, as a hint about the type of data required.</dd>
			<dt><code>readonly</code></dt>
			<dd>&#10551; If present, specifies that the value of the element cannot be changed by the user.</dd>
			<dt><code>required</code></dt>
			<dd>&#10551; If present, completing this entry is required for the form to be submitted.</dd>
			<dt><code>rows</code></dt>
			<dd>&#10551; Defines the height of the element, in lines.</dd>
			<dt><code>wrap</code></dt>
			<dd>&#10551; Specifies how the text will be submitted as form data. <code>hard</code> will preserve line breaks, and <code>soft</code> will submit the text as a single line.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
