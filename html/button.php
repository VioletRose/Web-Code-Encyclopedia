<?php
    $PAGE_NAME = '&lt;button&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>As one might imagine, this tag creates a clickable button. However, since the default style of this button is rather behind modern standards of web design, its use is more or less relegated specifically to buttons that control forms, such as resetting a form or submitting it. As such, it has a number of specialized attributes for that purpose which are outside of the scope of this website to demonstrate. Please see <a href="http://www.w3schools.com/tags/tag_button.asp">W3Schools</a> for further reference on those advanced attributes.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;button autofocus type="button" onclick="alert('Heh, made you click')"&gt;Autofocused!&lt;/button&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;button disabled type="button"&gt;Disabled.&lt;/button&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<button autofocus type="button" onclick="alert('Heh, made you click')">Autofocused!</button>
			<br>
			<button disabled type="button">Disabled.</button>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>autofocus</code></dt>
			<dd>If present, specifies that the element should be focused (selected) when the page loads, scrolling down the page to its location if necessary.</dd>
			<dt><code>disabled</code></dt>
			<dd>If present, the button will render, but be grayed out and unusable.</dd>
			<dt><code>form</code></dt>
			<dd>Specifies the id of an associated <code>&lt;form&gt;</code> element. Not necessary if the element is a child of the <code>&lt;form&gt;</code> element.</dd>
			<dt><code>formaction</code></dt>
			<dd>Only works if <code>type</code> is <code>submit</code>. Defines an absolute or relative URL where the form's output will be sent.</dd>
			<dt><code>formenctype</code></dt>
			<dd>
				Defines how the form's data should be encoded before submission to the server.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>application/x-www-form-urlencoded</code></dt>
						<dd>The default behavior. All text characters will be encoded.</dd>
						<dt><code>multipart/form-data</code></dt>
						<dd>No text characters will be encoded.</dd>
						<dt><code>text/plain</code></dt>
						<dd>Spaces are converted to + characters, but no other text characters will be encoded.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>formmethod</code></dt>
			<dd>
				Defines which HTTP method will be used to submit the form data.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>get</code></dt>
						<dd>The form data will be appended to the URL, i.e. <code>URL?name=value&name=value</code>.</dd>
						<dt><code>post</code></dt>
						<dd>The form data will be sent as an HTTP post transaction.</dd>
					</dl>
				</summary>
			</dd>
			<dt><code>formnovalidate</code></dt>
			<dd>If present, the form data will not be validated on submission.</dd>
			<dt><code>formtarget</code></dt>
			<dd>
				Defines where the response will be displayed after submitting the form.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>_blank</code></dt>
						<dd>Opens the content in a new window or tab.</dd>
						<dt><code>_self</code></dt>
						<dd>Opens the content in the same frame where it was clicked. This is the default behavior.</dd>
						<dt><code>_parent</code></dt>
						<dd>Opens the content in the parent frame of the child frame where the link appears, if applicable.</dd>
						<dt><code>_top</code></dt>
						<dd>Opens the content in the full body of the window.</dd>
						<dt><code><var>framename</var></code></dt>
						<dd>When <code><var>framename</var></code> is replaced with the name of a valid frame, will open the content in that frame.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>name</code></dt>
			<dd>Defines a name for the button. This is not the text that appears on it, but an internal designator that can be linked to by appending <code>#<var>name</var></code> to the page's URL.</dd>
			<dt><code>type</code></dt>
			<dd>
				Defines the type of button the element is.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>button</code></dt>
						<dd>It is a clickable button, with no additional context.</dd>
						<dt><code>submit</code></dt>
						<dd>It is a submit button for a form.</dd>
						<dt><code>reset</code></dt>
						<dd>It is a reset button for a form.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>value</code></dt>
			<dd>Defines the button's value. If the button is used to submit the form, this value will be sent along with any other form data.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
