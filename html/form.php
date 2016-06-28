<?php
    $PAGE_NAME = '&lt;form&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<?php

$formSubmitted = $_POST['submit'];

if(isset($formSubmitted)) {
?>

<main>
	<section>
		<p>Your favorite color is <kbd><?php echo htmlspecialchars($_POST['FavColor']); ?></kbd>!</p>
		<p>Your favorite flower is <kbd><?php echo htmlspecialchars($_POST['FavFlower']); ?></kbd>!</p>
	</section>
</main>

<?php
}else {
?>

<main>
	<section>
		<p>This element is the basis for creating forms for user input, ranging from simple to complex. I will provide a simple demonstration, however, the full scope of this element, its associated elements, and the attributes thereof is <em>well</em> beyond this project, and as such, most of them will be explained rather than demonstrated.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;form action="form.php" method="POST"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Favorite color:
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="text" name="FavColor" value="Violet"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Favorite flower:
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="text" name="FavFlower" value="Rose"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="submit" name="submit" value="Submit"&gt;
				<br>
				&lt;/form&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<form action="form.php" method="POST">
				Favorite color:
				<input type="text" name="FavColor" value="Violet">
				<br>
				Favorite flower:
				<input type="text" name="FavFlower" value="Rose">
				<br>
				<input type="submit" name="submit" value="Submit">
			</form>
		</figure>
	</section>
	<section>
		<h4>Child tags of <code>&lt;form&gt;</code></h4>
		<dl>
			<dt><code>&lt;fieldset&gt;</code></dt>
			<dd>&#10551; This element is used as a subcontainer within a form, to contain a category of related information.</dd>
			<dt><code>&lt;input&gt;</code></dt>
			<dd>&#10551; This element creates a box the user may type into, which will be submitted as form data.</dd>
			<dt><code>&lt;label&gt;</code></dt>
			<dd>&#10551; This tag designates the included text as a label for a specific <code>&lt;input&gt;</code> id. Clicking on it will act as a click on the associated <code>&lt;input&gt;</code> element.</dd>
			<dt><code>&lt;output&gt;</code></dt>
			<dd>&#10551; This element displays the output of a calculation, such as one that adds two or more of the user's numeric inputs together. However, it will not display if there is no Javascript to do the calculation.</dd>
		</dl>
	</section>
	<section>
		<h4>Child tag of <code>&lt;fieldset&gt;</code></h4>
		<dl>
			<dt><code>&lt;legend&gt;</code></dt>
			<dd>&#10551; This tag designates the included text as a caption to be displayed on its containing <code>&lt;fieldset&gt;</code> element.</dd>
		</dl>
	</section>
	<section>
		<h4>Child tag of <code>&lt;input&gt;</code></h4>
		<dl>
			<dt><code>&lt;datalist&gt;</code></dt>
			<dd>&#10551; This tag acts as a container for multiple <code>&lt;option&gt;</code> tags, and uses their contained text as a list of possible autocomplete entries for an associated <code>&lt;input&gt;</code> element.</dd>
		</dl>
	</section>
	<section>
		<h4>Child tag of of <code>&lt;datalist&gt;</code></h4>
		<dl>
			<dt><code>&lt;option&gt;</code></dt>
			<dd>&#10551; This tag designates the included text as a list entry for a <code>&lt;datalist&gt;</code> and its associated <code>&lt;input&gt;</code> element.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;form&gt;</code></h4>
		<dl>
			<dt><code>&lt;accept-charset&gt;</code></dt>
			<dd>&#10551; Defines the character encoding the form data will be submitted with. If not defined, this will be the same as the page containing the <code>&lt;form&gt;</code> element. In theory, this attribute accepts any character set as a value, but in practice most will not function except for <code>UTF-8</code> and <code>ISO-8859-1</code>. Under almost any circumstance, <code>UTF-8</code> is preferable.</dd>
			<dt><code>&lt;action&gt;</code></dt>
			<dd>&#10551; Defines the target URL where the form data will be submitted to on completion.</dd>
			<dt><code>&lt;autocomplete&gt;</code></dt>
			<dd>&#10551; Defines whether the form should have autocomplete functionality <code>on</code> or <code>off</code>.</dd>
			<dt><code>&lt;enctype&gt;</code></dt>
			<dd>
				&#10551; Defines how the form's data should be encoded before submission to the server. This is a different sort of encoding from the choice of character set.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>application/x-www-form-urlencoded</code></dt>
						<dd>&#10551; The default behavior. All text characters will be encoded.</dd>
						<dt><code>multipart/form-data</code></dt>
						<dd>&#10551; No text characters will be encoded.</dd>
						<dt><code>text/plain</code></dt>
						<dd>&#10551; Spaces are converted to + characters, but no other text characters will be encoded.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>&lt;method&gt;</code></dt>
			<dd>
				&#10551; Defines which HTTP method will be used to submit the form data.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>get</code></dt>
						<dd>&#10551; The form data will be appended to the URL, i.e. <code>URL?name=value&name=value</code>.</dd>
						<dt><code>post</code></dt>
						<dd>&#10551; The form data will be sent as an HTTP post transaction.</dd>
					</dl>
				</summary>
			</dd>
			<dt><code>&lt;name&gt;</code></dt>
			<dd>&#10551; Defines the name of the form, which can be used to target it with Javascript.</dd>
			<dt><code>&lt;novalidate&gt;</code></dt>
			<dd>&#10551; If present, the form data will not be validated on submission.</dd>
			<dt><code>&lt;target&gt;</code></dt>
			<dd>
				&#10551; Defines where the response will be displayed after submitting the form.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>_blank</code></dt>
						<dd>&#10551; Opens the response page in a new window or tab.</dd>
						<dt><code>_self</code></dt>
						<dd>&#10551; Opens the response page in the same frame where the form was was submitted. This is the default behavior.</dd>
						<dt><code>_parent</code></dt>
						<dd>&#10551; Opens the response page in the parent frame of the child frame where the form appears, if applicable.</dd>
						<dt><code>_top</code></dt>
						<dd>&#10551; Opens the response page in the full body of the window, overriding all frames.</dd>
						<dt><code><i>framename</i></code></dt>
						<dd>&#10551; When <code><i>framename</i></code> is replaced with the name of a valid frame, will open the response page in that frame.</dd>
					</dl>
				</details>
			</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;fieldset&gt;</code></h4>
		<dl>
			<dt><code>&lt;disabled&gt;</code></dt>
			<dd>&#10551; If present, input elements within the container will be grayed out and unusable.</dd>
			<dt><code>&lt;form&gt;</code></dt>
			<dd>&#10551; Specifies the id of the <code>&lt;form&gt;</code> element(s) the container is associated with.</dd>
			<dt><code>&lt;name&gt;</code></dt>
			<dd>&#10551; Defines the name of the container. This can be used to target it with Javascript, and will appear in the submitted form data as well.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;input&gt;</code></h4>
		<dl>
			<dt><code>&lt;accept&gt;</code></dt>
			<dd>
				&#10551; If <code>type</code> is set to <code>file</code>, defines which file types will be accepted.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>.<i>file_extension</i></code></dt>
						<dd>&#10551; When <code>.<i>file_extension</i></code> is replaced with a valid file extension, files with the specified file extension will be accepted.</dd>
						<dt><code>audio/*</code></dt>
						<dd>&#10551; All audio file types will be accepted.</dd>
						<dt><code>video/*</code></dt>
						<dd>&#10551; All video file types will be accepted.</dd>
						<dt><code>image/*</code></dt>
						<dd>&#10551; All image file types will be accepted.</dd>
						<dt><code><i>media_type</i></code></dt>
						<dd>&#10551; When <code><i>media_type</i></code> is replaced with a valid media type, files of the specified media type will be accepted. See <a href="https://www.iana.org/assignments/media-types/media-types.xhtml">here</a> for a full list of possible values.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>&lt;alt&gt;</code></dt>
			<dd>&#10551; If <code>type</code> is set to <code>image</code>, specifies alternate text for the image, to be displayed if for some reason the image fails to load.</dd>
			<dt><code>&lt;autocomplete&gt;</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows text input, defines whether the element should have autocomplete functionality <code>on</code> or <code>off</code>.</dd>
			<dt><code>&lt;autofocus&gt;</code></dt>
			<dd>&#10551; If present, specifies that the element should be focused (selected) when the page loads.</dd>
			<dt><code>&lt;checked&gt;</code></dt>
			<dd>&#10551; If <code>type</code> is set to <code>checkbox</code> or <code>radio</code>, specifies that the element should be checked by default when the user loads the page.</dd>
			<dt><code>&lt;dirname&gt;</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows text input, specifies that the text direction of the user's text input should be submitted along with the form data. Must be set to <code><i>name</i>.dir</code>, where <i>name</i> is the same as the element's <code>name</code> attribute.</dd>
			<dt><code>&lt;disabled&gt;</code></dt>
			<dd>&#10551; If present, the element will be grayed out and unusable.</dd>
			<dt><code>&lt;form&gt;</code></dt>
			<dd>&#10551; Specifies the id of <code>&lt;form&gt;</code> element(s) the element belongs to.</dd>
			<dt><code>&lt;formaction&gt;</code></dt>
			<dd>&#10551; Defines the target URL where the form data will be submitted to on completion.</dd>
			<dt><code>&lt;formenctype&gt;</code></dt>
			<dd>
				&#10551; Defines how the form's data should be encoded before submission to the server.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>application/x-www-form-urlencoded</code></dt>
						<dd>&#10551; The default behavior. All text characters will be encoded.</dd>
						<dt><code>multipart/form-data</code></dt>
						<dd>&#10551; No text characters will be encoded.</dd>
						<dt><code>text/plain</code></dt>
						<dd>&#10551; Spaces are converted to + characters, but no other text characters will be encoded.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>&lt;formmethod&gt;</code></dt>
			<dd>
				&#10551; Defines which HTTP method will be used to submit the form data.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>get</code></dt>
						<dd>&#10551; The form data will be appended to the URL, i.e. <code>URL?name=value&name=value</code>.</dd>
						<dt><code>post</code></dt>
						<dd>&#10551; The form data will be sent as an HTTP post transaction.</dd>
					</dl>
				</summary>
			</dd>
			<dt><code>&lt;formnovalidate&gt;</code></dt>
			<dd>&#10551; If present, the form data will not be validated on submission.</dd>
			<dt><code>&lt;formtarget&gt;</code></dt>
			<dd>
				&#10551; Defines where the response will be displayed after submitting the form.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>_blank</code></dt>
						<dd>&#10551; Opens the response page in a new window or tab.</dd>
						<dt><code>_self</code></dt>
						<dd>&#10551; Opens the response page in the same frame where the form was was submitted. This is the default behavior.</dd>
						<dt><code>_parent</code></dt>
						<dd>&#10551; Opens the response page in the parent frame of the child frame where the form appears, if applicable.</dd>
						<dt><code>_top</code></dt>
						<dd>&#10551; Opens the response page in the full body of the window, overriding all frames.</dd>
						<dt><code><i>framename</i></code></dt>
						<dd>&#10551; When <code><i>framename</i></code> is replaced with the name of a valid frame, will open the response page in that frame.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>&lt;height&gt;</code></dt>
			<dd>&#10551; Defines the height of the element, in pixels.</dd>
			<dt><code>&lt;list&gt;</code></dt>
			<dd>&#10551; Specifies the id of a <code>&lt;datalist&gt;</code> element that should be associated with this <code>&lt;input&gt;</code> element.</dd>
			<dt><code>&lt;max&gt;</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows numeric input, specifies a maximum allowed integer.</dd>
			<dt><code>&lt;maxlength&gt;</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows text input, specifies a maximum character length.</dd>
			<dt><code>&lt;min&gt;</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows numeric input, specifies a minimum allowed integer.</dd>
			<dt><code>&lt;multiple&gt;</code></dt>
			<dd>&#10551; If <code>type</code> is set to <code>email</code> or <code>file</code>, specifies that the user may submit multiple entries at once.</dd>
			<dt><code>&lt;name&gt;</code></dt>
			<dd>&#10551; Defines the name of the element, which can be used to target it with Javascript.</dd>
			<dt><code>&lt;pattern&gt;</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows text input, specifies a regular expression to define what inputs will be allowed. If the user's input doesn't match the regular expression, the form cannot be submitted and the user will be asked to correct their input. For information on how a regular expression is formatted, see <a href="http://www.w3schools.com/js/js_regexp.asp">here</a></dd>
			<dt><code>&lt;placeholder&gt;</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows text input, defines placeholder text that will appear in the field until the user begins typing, as a hint about the type of data required.</dd>
			<dt><code>&lt;readonly&gt;</code></dt>
			<dd>&#10551; If present, specifies that the value of the element cannot be changed by the user.</dd>
			<dt><code>&lt;required&gt;</code></dt>
			<dd>&#10551; If present, completing this entry is required for the form to be submitted.</dd>
			<dt><code>&lt;size&gt;</code></dt>
			<dd>&#10551; Defines the width, in characters, of the element.</dd>
			<dt><code>&lt;src&gt;</code></dt>
			<dd>&#10551; If <code>type</code> is set to <code>image</code>, specifies the URL of the image to be displayed.</dd>
			<dt><code>&lt;step&gt;</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows numeric input, specifies how many steps at a time the integer will be increased/decreased by the up/down buttons.</dd>
			<dt><code>&lt;type&gt;</code></dt>
			<dd>
				&#10551; Defines the type of the <code>&lt;input&gt;</code> element, which determines what kinds of input it will accept. Numeric selectors come with integrated up/down arrows to adjust their value.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>button</code></dt>
						<dd>&#10551; A clickable button, usually used with Javascript to determine the results of clicking.</dd>
						<dt><code>checkbox</code></dt>
						<dd>&#10551; A checkbox, unchecked by default.</dd>
						<dt><code>color</code></dt>
						<dd>&#10551; A color selector with controls for hue (with a range of 0-239), saturation and luminosity (0-240), and red/green/blue (0-255), as well as a visual palette.</dd>
						<dt><code>date</code></dt>
						<dd>&#10551; A preformatted numeric selector for calendar dates, in mm/dd/yyyy format.</dd>
						<dt><code>datetime-local</code></dt>
						<dd>&#10551; A preformatted numeric selector for date and time, in mm/dd/yyyy + 12 hour format.</dd>
						<dt><code>email</code></dt>
						<dd>&#10551; A text entry field that will only accept email addresses as input.</dd>
						<dt><code>file</code></dt>
						<dd>&#10551; A button that, when clicked, will launch a file upload dialog.</dd>
						<dt><code>hidden</code></dt>
						<dd>&#10551; An input field that is not displayed to the user.</dd>
						<dt><code>image</code></dt>
						<dd>&#10551; A clickable image.</dd>
						<dt><code>month</code></dt>
						<dd>&#10551; A preformatted numeric selector for month and year, in <i>month_name</i>, yyyy format.</dd>
						<dt><code>number</code></dt>
						<dd>&#10551; A basic numeric selector.</dd>
						<dt><code>password</code></dt>
						<dd>&#10551; A text entry field that will display the user's input with bullets instead of the typed characters.</dd>
						<dt><code>radio</code></dt>
						<dd>&#10551; A circle that will contain a bullet when clicked. Similar to <code>checkbox</code>, but cannot be unchecked by clicking twice.</dd>
						<dt><code>range</code></dt>
						<dd>&#10551; A slider, defaulting to 50 and ranging from 0 to 100, where the exact number is not displayed.</dd>
						<dt><code>reset</code></dt>
						<dd>&#10551; A button that, when clicked, resets all associated form buttons to their default values.</dd>
						<dt><code>search</code></dt>
						<dd>&#10551; A text entry field intended to contain a search string.</dd>
						<dt><code>submit</code></dt>
						<dd>&#10551; A submit button for the form.</dd>
						<dt><code>tel</code></dt>
						<dd>&#10551; A text entry field intended to contain a phone number, and that will attempt to format the user's input accordingly in the form data. However, the user can enter arbitrary text here by default, so it is recommended to use this in conjunction with the <code>pattern</code> attribute.</dd>
						<dt><code>text</code></dt>
						<dd>&#10551; A basic text entry field.</dd>
						<dt><code>time</code></dt>
						<dd>&#10551; A preformatted numeric selector for time, in 12 hour format.</dd>
						<dt><code>url</code></dt>
						<dd>&#10551; A text entry field that will only accept absolute URLs as input.</dd>
						<dt><code>week</code></dt>
						<dd>&#10551; A preformatted numeric selector for weeks, in week ww yyyy format.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>&lt;value&gt;</code></dt>
			<dd>&#10551; Specifies the default value of the element. If <code>type</code> is set to a value that allows text input, the user's input will override this in the submitted form data.</dd>
			<dt><code>&lt;width&gt;</code></dt>
			<dd>&#10551; Defines the width of the element, in pixels.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;label&gt;</code></h4>
		<dl>
			<dt><code>&lt;for&gt;</code></dt>
			<dd>&#10551; Specifies the id of the <code>&lt;input&gt;</code> element the label is associated with.</dd>
			<dt><code>&lt;form&gt;</code></dt>
			<dd>&#10551; Specifies the id of <code>&lt;form&gt;</code> element(s) the label belongs to.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;output&gt;</code></h4>
		<dl>
			<dt><code>&lt;for&gt;</code></dt>
			<dd>&#10551; Specifies the id of the <code>&lt;input&gt;</code> element the label is associated with.</dd>
			<dt><code>&lt;form&gt;</code></dt>
			<dd>&#10551; Specifies the id of <code>&lt;form&gt;</code> element(s) the label belongs to.</dd>
			<dt><code>&lt;name&gt;</code></dt>
			<dd>&#10551; Defines a name for the element. This can be used to target it with Javascript.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;option&gt;</code></h4>
		<dl>
			<dt><code>&lt;disabled&gt;</code></dt>
			<dd>&#10551; If present, this option will be displayed, but cannot be selected.</dd>
			<dt><code>&lt;label&gt;</code></dt>
			<dd>&#10551; Defines a label for the option, which will be displayed <em>instead</em> of the included text.</dd>
			<dt><code>&lt;selected&gt;</code></dt>
			<dd>&#10551; Specifies that the option should be pre-selected when the page loads. By default, the first option defined will be pre-selected.</dd>
			<dt><code>&lt;value&gt;</code></dt>
			<dd>&#10551; Defines a text string associated with the option, which is what actually gets submitted with the form data.</dd>
		</dl>
	</section>
</main>

<?php
    }
?>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>