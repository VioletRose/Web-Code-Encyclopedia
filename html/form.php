<?php
    $PAGE_NAME = '&lt;form&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This element is the basis for creating forms for user input, ranging from simple to complex. I will provide a simple demonstration, however, the full scope of this element, its associated elements, and the attributes thereof is <em>well</em> beyond this project, and as such, most of them will be explained rather than demonstrated.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;form action="formsubmission.php" autocomplete="on" id="exampleform" method="POST" name="exampleform" target="_blank"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;How did you find out about this website?
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;input dirname="referred.dir" list="referrals" name="referred"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;datalist id="referrals"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option label="Link on Discord" selected value="Link on Discord"&gt;Link on Discord&lt;/option&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option disabled label="Link on Skype" value="Link on Skype"&gt;&lt;/option&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option label="Web search" value="Web search"&gt;Web search&lt;/option&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option label="Checking random domains" value="Checking random domains"&gt;Checking random domains&lt;/option&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option label="A psychic vision" value="A psychic vision"&gt;A psychic vision&lt;/option&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option label="I like flowers!" value="I like flowers!"&gt;I like flowers!&lt;/option&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/datalist&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;fieldset name="datestimes"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;legend&gt;Dates and Times&lt;/legend&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is the most historic date? &lt;input form="exampleform" name="historicdate" type="date"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pick a date and time, any will do! &lt;input form="exampleform" name="anydatetime" type="datetime-local"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What month is your favorite? &lt;input form="exampleform" name="favoritemonth" type="month"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What time is it? &lt;input form="exampleform" name="whattime" type="time"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select one week. Just one. &lt;input form="exampleform" name="oneweek" type="week"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/fieldset&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Do you like flowers? &lt;input checked name="likeflowers" readonly type="checkbox" value="like flowers"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Pick a color, any color! &lt;input name="anycolor" type="color" value="#ead8ff"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;What is your lucky number? &lt;input name="luckynumber" type="number"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Try to find your lucky number! &lt;input max="999" min="1" name="luckyfind" type="range"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;If you had an account on this site, what would you make your password? &lt;input name="vrwepassword" type="password"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Would you smooch a ghost? Yes: &lt;input name="smooch" required type="radio" value="yes"&gt; Maybe: &lt;input disabled name="smooch" type="radio" value="maybe"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;What code information would you search for online? &lt;input name="codesearch" type="search"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Try to guess my phone number! &lt;input name="guessnumber" pattern="\(?\d{3}\)?[\s-]\d{3}[\s-]\d{4}" placeholder="(???) ???-????" type="tel"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;What's your favorite website? &lt;input name="favwebsite" type="url"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;input dirname="feedback.dir" name="feedback" placeholder="Closing thoughts?" type="text"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;input name="submit" type="submit" value="Submit"&gt;&lt;input type="reset" value="Reset"&gt;
				<br>
				&lt;/form&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<form action="formsubmission.php" autocomplete="on" id="exampleform" method="POST" name="exampleform" target="_blank">
				How did you find out about this website?
				<br>
				<input dirname="referred.dir" list="referrals" name="referred">
				<datalist id="referrals">
					<option label="Link on Discord" selected value="Link on Discord">Link on Discord</option>
					<option disabled label="Link on Skype" value="Link on Skype"></option>
					<option label="Web search" value="Web search">Web search</option>
					<option label="Checking random domains" value="Checking random domains">Checking random domains</option>
					<option label="A psychic vision" value="A psychic vision">A psychic vision</option>
					<option label="I like flowers!" value="I like flowers!">I like flowers!</option>
				</datalist>
				<br>
				<fieldset name="datestimes">
					<legend>Dates and Times</legend>
					What is the most historic date? <input form="exampleform" name="historicdate" type="date">
					<br>
					Pick a date and time, any will do! <input form="exampleform" name="anydatetime" type="datetime-local">
					<br>
					What month is your favorite? <input form="exampleform" name="favoritemonth" type="month">
					<br>
					What time is it? <input form="exampleform" name="whattime" type="time">
					<br>
					Select one week. Just one. <input form="exampleform" name="oneweek" type="week">
				</fieldset>
				Do you like flowers? <input checked name="likeflowers" readonly type="checkbox" value="like flowers">
				<br>
				Pick a color, any color! <input name="anycolor" type="color" value="#ead8ff">
				<br>
				What is your lucky number? <input name="luckynumber" type="number">
				<br>
				Try to find your lucky number! <input max="999" min="1" name="luckyfind" type="range">
				<br>
				If you had an account on this site, what would you make your password? <input name="vrwepassword" type="password">
				<br>
				Would you smooch a ghost? Yes: <input name="smooch" required type="radio" value="yes"> Maybe: <input disabled name="smooch" type="radio" value="maybe">
				<br>
				What code information would you search for online? <input name="codesearch" type="search">
				<br>
				Try to guess my phone number! <input name="guessnumber" pattern="\(?\d{3}\)?[\s-]\d{3}[\s-]\d{4}" placeholder="(???) ???-????" type="tel">
				<br>
				What's your favorite website? <input name="favwebsite" type="url">
				<br>
				<input dirname="feedback.dir" name="feedback" placeholder="Closing thoughts?" type="text">
				<br>
				<input name="submit" type="submit" value="Submit"><input type="reset" value="Reset">
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
			<dt><code>accept-charset</code></dt>
			<dd>&#10551; Defines the character encoding the form data will be submitted with. If not defined, this will be the same as the page containing the <code>&lt;form&gt;</code> element. In theory, this attribute accepts any character set as a value, but in practice most will not function except for <code>UTF-8</code> and <code>ISO-8859-1</code>. Under almost any circumstance, <code>UTF-8</code> is preferable.</dd>
			<dt><code>action</code></dt>
			<dd>&#10551; Defines the target URL where the form data will be submitted to on completion.</dd>
			<dt><code>autocomplete</code></dt>
			<dd>&#10551; Defines whether the form should have autocomplete functionality <code>on</code> or <code>off</code>.</dd>
			<dt><code>enctype</code></dt>
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
			<dt><code>method</code></dt>
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
			<dt><code>name</code></dt>
			<dd>&#10551; Defines the name of the form, which can be used to target it with Javascript.</dd>
			<dt><code>novalidate</code></dt>
			<dd>&#10551; If present, the form data will not be validated on submission.</dd>
			<dt><code>target</code></dt>
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
						<dt><code><var>framename</var></code></dt>
						<dd>&#10551; When <code><var>framename</var></code> is replaced with the name of a valid frame, will open the response page in that frame.</dd>
					</dl>
				</details>
			</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;fieldset&gt;</code></h4>
		<dl>
			<dt><code>disabled</code></dt>
			<dd>&#10551; If present, input elements within the container will be grayed out and unusable.</dd>
			<dt><code>form</code></dt>
			<dd>&#10551; Specifies the id of the <code>&lt;form&gt;</code> element the container is associated with. Not necessary if the container is a child of the <code>&lt;form&gt;</code> element.</dd>
			<dt><code>name</code></dt>
			<dd>&#10551; Defines the name of the container. This can be used to target it with Javascript, and will appear in the submitted form data as well.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;input&gt;</code></h4>
		<dl>
			<dt><code>accept</code></dt>
			<dd>
				&#10551; If <code>type</code> is set to <code>file</code>, defines which file types will be accepted.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>.<var>file_extension</var></code></dt>
						<dd>&#10551; When <code>.<var>file_extension</var></code> is replaced with a valid file extension, files with the specified file extension will be accepted.</dd>
						<dt><code>audio/*</code></dt>
						<dd>&#10551; All audio file types will be accepted.</dd>
						<dt><code>video/*</code></dt>
						<dd>&#10551; All video file types will be accepted.</dd>
						<dt><code>image/*</code></dt>
						<dd>&#10551; All image file types will be accepted.</dd>
						<dt><code><var>media_type</var></code></dt>
						<dd>&#10551; When <code><var>media_type</var></code> is replaced with a valid media type, files of the specified media type will be accepted. See <a href="https://www.iana.org/assignments/media-types/media-types.xhtml">here</a> for a full list of possible values.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>alt</code></dt>
			<dd>&#10551; If <code>type</code> is set to <code>image</code>, specifies alternate text for the image, to be displayed if for some reason the image fails to load.</dd>
			<dt><code>autocomplete</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows text input, defines whether the element should have autocomplete functionality <code>on</code> or <code>off</code>.</dd>
			<dt><code>autofocus</code></dt>
			<dd>&#10551; If present, specifies that the element should be focused (selected) when the page loads, scrolling down the page to its location if necessary.</dd>
			<dt><code>checked</code></dt>
			<dd>&#10551; If <code>type</code> is set to <code>checkbox</code> or <code>radio</code>, specifies that the element should be checked by default when the user loads the page.</dd>
			<dt><code>dirname</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows text input, specifies that the text direction of the user's text input should be submitted along with the form data. Must be set to <code><var>name</var>.dir</code>, where <var>name</var> is the same as the element's <code>name</code> attribute.</dd>
			<dt><code>disabled</code></dt>
			<dd>&#10551; If present, the element will be grayed out and unusable.</dd>
			<dt><code>form</code></dt>
			<dd>&#10551; Specifies the id of <code>&lt;form&gt;</code> element the element belongs to. Not necessary if the element is a child of the <code>&lt;form&gt;</code> element.</dd>
			<dt><code>formaction</code></dt>
			<dd>&#10551; Defines the target URL where the form data will be submitted to on completion.</dd>
			<dt><code>formenctype</code></dt>
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
			<dt><code>formmethod</code></dt>
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
			<dt><code>formnovalidate</code></dt>
			<dd>&#10551; If present, the form data will not be validated on submission.</dd>
			<dt><code>formtarget</code></dt>
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
						<dt><code><var>framename</var></code></dt>
						<dd>&#10551; When <code><var>framename</var></code> is replaced with the name of a valid frame, will open the response page in that frame.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>height</code></dt>
			<dd>&#10551; If <code>type</code> is set to <code>image</code>, defines the height of the element, in pixels.</dd>
			<dt><code>list</code></dt>
			<dd>&#10551; Specifies the id of a <code>&lt;datalist&gt;</code> element that should be associated with this <code>&lt;input&gt;</code> element.</dd>
			<dt><code>max</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows numeric input, specifies a maximum allowed integer.</dd>
			<dt><code>maxlength</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows text input, specifies a maximum character length.</dd>
			<dt><code>min</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows numeric input, specifies a minimum allowed integer.</dd>
			<dt><code>multiple</code></dt>
			<dd>&#10551; If <code>type</code> is set to <code>email</code> or <code>file</code>, specifies that the user may submit multiple entries at once.</dd>
			<dt><code>name</code></dt>
			<dd>&#10551; Defines the name of the element, which can be used to target it with Javascript.</dd>
			<dt><code>pattern</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows text input, specifies a regular expression (without beginning or ending flags) to define what inputs will be allowed. If the user's input doesn't match the regular expression, the form cannot be submitted and the user will be asked to correct their input. For information on how a regular expression is formatted, see <a href="http://www.w3schools.com/js/js_regexp.asp">here</a>.</dd>
			<dt><code>placeholder</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows text input, defines placeholder text that will appear in the field until the user begins typing, as a hint about the type of data required.</dd>
			<dt><code>readonly</code></dt>
			<dd>&#10551; If present, specifies that the value of the element cannot be changed by the user.</dd>
			<dt><code>required</code></dt>
			<dd>&#10551; If present, completing this entry is required for the form to be submitted.</dd>
			<dt><code>size</code></dt>
			<dd>&#10551; Defines the width, in characters, of the element.</dd>
			<dt><code>src</code></dt>
			<dd>&#10551; If <code>type</code> is set to <code>image</code>, specifies the URL of the image to be displayed.</dd>
			<dt><code>step</code></dt>
			<dd>&#10551; If <code>type</code> is set to a value that allows numeric input, specifies how many steps at a time the integer will be increased/decreased by the up/down buttons.</dd>
			<dt><code>type</code></dt>
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
						<dd>&#10551; A clickable image, which both acts as a submit button and registers the user's input in the format <samp>x=<var>coordinate</var>&y=<var>coordinate</var></samp>, with each coordinate being the specific horizontal and vertical pixels of the image that the user clicked.</dd>
						<dt><code>month</code></dt>
						<dd>&#10551; A preformatted numeric selector for month and year, in <var>month_name</var>, yyyy format.</dd>
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
			<dt><code>value</code></dt>
			<dd>&#10551; Specifies the default value of the element. If <code>type</code> is set to a value that allows text input, the user's input will override this in the submitted form data.</dd>
			<dt><code>width</code></dt>
			<dd>&#10551; Defines the width of the element, in pixels.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;label&gt;</code></h4>
		<dl>
			<dt><code>for</code></dt>
			<dd>&#10551; Specifies the id of the <code>&lt;input&gt;</code> element the label is associated with.</dd>
			<dt><code>form</code></dt>
			<dd>&#10551; Specifies the id of <code>&lt;form&gt;</code> element(s) the label belongs to. Not necessary if the label is a child of the <code>&lt;form&gt;</code> element.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;output&gt;</code></h4>
		<dl>
			<dt><code>for</code></dt>
			<dd>&#10551; Specifies the id of the <code>&lt;input&gt;</code> element the label is associated with.</dd>
			<dt><code>form</code></dt>
			<dd>&#10551; Specifies the id of the <code>&lt;form&gt;</code> element the label belongs to. Not necessary if the label is a child of the <code>&lt;form&gt;</code> element.</dd>
			<dt><code>name</code></dt>
			<dd>&#10551; Defines a name for the element. This can be used to target it with Javascript.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;option&gt;</code></h4>
		<dl>
			<dt><code>disabled</code></dt>
			<dd>&#10551; If present, this option will be displayed, but cannot be selected.</dd>
			<dt><code>label</code></dt>
			<dd>&#10551; Defines a label for the option, which will be displayed <em>instead</em> of the included text.</dd>
			<dt><code>selected</code></dt>
			<dd>&#10551; Specifies that the option should be pre-selected when the page loads. Note: this does nothing in an <code>&lt;input&gt;</code> element.</dd>
			<dt><code>value</code></dt>
			<dd>&#10551; Defines a text string associated with the option, which is what actually gets submitted with the form data.</dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
