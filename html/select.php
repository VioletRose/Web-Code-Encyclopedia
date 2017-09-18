<?php
    $PAGE_NAME = '&lt;select&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This element creates a drop-down list with multiple options a user can select. It is usually used for forms, in cases where freeform user input is undesirable and a fixed range of answers needs to be provided.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;select&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;optgroup label="Current&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="html"&gt;HTML&lt;/option&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/optgroup&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="css"&gt;CSS&lt;/option&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value="javascript"&gt;Javascript&lt;/option&gt;
				<br>
				&lt;/select&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<select>
				<optgroup label="Current">
					<option value="html">HTML</option>
				</optgroup>
				<option value="css">CSS</option>
				<option value="javascript">Javascript</option>
			</select>
		</figure>
	</section>
	<section>
		<h4>Child tags of <code>&lt;select&gt;</code></h4>
		<dl>
			<dt><code>&lt;optgroup&gt;</code></dt>
			<dd>This tag designates the included <code>&lt;option&gt;</code> tags as part of a group or category within a <code>&lt;select&gt;</code> element.</dd>
			<dt><code>&lt;option&gt;</code></dt>
			<dd>This tag designates the included text as a list entry for a <code>&lt;select&gt;</code> element.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;select&gt;</code></h4>
		<dl>
			<dt><code>autofocus</code></dt>
			<dd>If present, specifies that the element should be focused (selected) when the page loads, scrolling down the page to its location if necessary.</dd>
			<dt><code>disabled</code></dt>
			<dd>If present, the element will not open its option list when clicked, and will be locked to its current value.</dd>
			<dt><code>form</code></dt>
			<dd>Specifies the id of an associated <code>&lt;form&gt;</code> element. Not necessary if the element is a child of the <code>&lt;form&gt;</code> element.</dd>
			<dt><code>multiple</code></dt>
			<dd>If present, the option list will remain open, and multiple options from it can be selected with Shift-click, CTRL-click, or click-and-drag selection.</dd>
			<dt><code>name</code></dt>
			<dd>Defines a name for the element. This can be used to target it with Javascript.</dd>
			<dt><code>required</code></dt>
			<dd>If present, completing this entry is required for the associated form to be submitted.</dd>
			<dt><code>size</code></dt>
			<dd>Defines how many options will be displayed by default, with the rest accessible by scrolling. If present, the option list will remain open.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;optgroup&gt;</code></h4>
		<dl>
			<dt><code>disabled</code></dt>
			<dd>If present, every option in this group will be unselectable.</dd>
			<dt><code>label</code></dt>
			<dd>Defines a label for the group, which will be displayed within the drop-down list as a bold text heading above the grouped options within. If this attribute is not set, there will still be white space where it would be displayed.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;option&gt;</code></h4>
		<dl>
			<dt><code>&lt;disabled&gt;</code></dt>
			<dd>If present, this option will be displayed, but cannot be selected.</dd>
			<dt><code>&lt;label&gt;</code></dt>
			<dd>Defines a label for the option, which will be displayed <em>instead</em> of the included text.</dd>
			<dt><code>&lt;selected&gt;</code></dt>
			<dd>Specifies that the option should be pre-selected when the page loads. By default, the first option defined will be pre-selected.</dd>
			<dt><code>&lt;value&gt;</code></dt>
			<dd>Defines a text string associated with the option, which is what actually gets submitted with the form data.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
