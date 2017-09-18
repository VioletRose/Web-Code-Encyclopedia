<?php
    $PAGE_NAME = 'Global Attributes';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>Attributes can be added onto HTML elements, to give them additional context or instructions beyond what the element itself and its CSS rules, if any, might apply. Some attributes are boolean, and will take effect if they are present on an element, while most others require their value to be set with the syntax attribute="value". Each HTML element page will list possible attributes specific to it and its child elements, if any, but the attributes on this page are ones that can be applied to any HTML element you choose, though of course, this may not always be useful.</p>
	</section>
	<section>
		<dl>
			<dt><code>accesskey</code></dt>
			<dd>Defines a shortcut key that, when pressed, will activate or focus the element with this attribute.</dd>
			<dt><code>class</code></dt>
			<dd>Defines a class name for the element. This is usually referred to in CSS to control the display properties of multiple elements with the same class name set.</dd>
			<dt><code>contenteditable</code></dt>
			<dd>When set to true, the content of the element (generally text) will be able to be edited by the user, though without additional scripting the changes they make will never actually be saved to the website.</dd>
			<dt><code>contextmenu</code></dt>
			<dd>Specifies the ID of a <code>&lt;menu&gt;</code> element on the same webpage. When the element with this attribute is right-clicked, the context menu that appears will be as specified in the <code>&lt;menu&gt;</code> element. <wbr><strong>Note: This attribute and the <code>&lt;menu&gt;</code> element are currently only supported in Firefox!</strong></dd>
			<dt><code>data-*</code></dt>
			<dd>The only attribute which allows you to define its name as well as an arbitrary value, i.e. <code>data-food-type="baked"</code>, it does nothing by itself but can be referred to in Javascript to display/alter the page in advanced ways.</dd>
			<dt><code>dir</code></dt>
			<dd>Specifies the direction of text within the element, <code>ltr</code> being left-to-right and <code>rtl</code> being right-to-left.</dd>
			<dt><code>draggable</code></dt>
			<dd>Allows the user to click this element and drag with the mouse, similar to the default behavior of images. It will not actually be moved on the page when the user lets go, however, unless additional scripting is used.</dd>
			<dt><code>dropzone</code></dt>
			<dd>When applied to a draggable element, this attribute specifies copy, move, or link, depending on what should happen as a result of the user's click and drag. However, this attribute is not yet supported in any web browser.</dd>
			<dt><code>hidden</code></dt>
			<dd>If this attribute is present, the element will not display on the website, while remaining loaded in case it is reactivated by scripting. Note that despite not being displayed, it still occupies the normal amount of space in the document.</dd>
			<dt><code>id</code></dt>
			<dd>Defines a unique ID for this specific element, which enables it to be targeted by CSS and Javascript with greater specificity than a class.</dd>
			<dt><code>lang</code></dt>
			<dd>Defines the language of the text and other content within the element. See <a href="http://www.w3schools.com/tags/ref_language_codes.asp">here</a> for a list of valid inputs.</dd>
			<dt><code>spellcheck</code></dt>
			<dd>This may only be used with <code>contenteditable</code>. If both attributes are set to <code>true</code>, not only will the text within the element be editable, but it will also be subject to spellcheck if that function is enabled in the user's browser.</dd>
			<dt><code>style</code></dt>
			<dd>Defines additional CSS rules to apply to the element. Note that the value of this attribute must consist of a valid CSS property, and that in most cases, it's better to set style rules in the stylesheet rather than with attributes.</dd>
			<dt><code>tabindex</code></dt>
			<dd>When given a numeric value starting from 1, this attribute will cause the element it applies to to be elevated in the order of elements to be cycled through when the user presses the Tab key with the browser window focused.</dd>
			<dt><code>title</code></dt>
			<dd>Defines additional information about the element, most often a title or other text that will be displayed if the user mouses over the element in question.</dd>
			<dt><code>translate</code></dt>
			<dd>When set to <code>no</code>, an instruction is given (i.e. to automatic page translation software) that the text within the element should not be translated into another language. When set to <code>yes</code>, the text will be allowed to be translated as is the default behavior.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
