<?php
    $PAGE_NAME = '&lt;menu&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag creates a menu of items the user can click on to activate scripted effects. However, it is not widely implemented yet. The only browser that currently supports this tag is Mozilla Firefox, which only uses the context menu form. As such, the example below will <em>only</em> display in Mozilla Firefox, and makes use of Mozilla's web API for its commands.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;menu id="examplemenu" type="context"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;menuitem icon="/images/violetflower.png" label="Home" onclick="window.open('https://violetrose.prototeam.org/index.php');"&gt;&lt;/menuitem&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;menuitem icon="/images/violetflower.png" label="HTML" onclick="window.open('https://violetrose.prototeam.org/html.php');"&gt;&lt;/menuitem&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;menuitem icon="/images/violetflower.png" label="CSS" onclick="window.open('https://violetrose.prototeam.org/css.php');"&gt;&lt;/menuitem&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;menuitem icon="/images/violetflower.png" label="Javascript" onclick="window.open('https://violetrose.prototeam.org/javascript.php');"&gt;&lt;/menuitem&gt;
				<br>
				&lt;/menu&gt;
				<br>
				&lt;span contextmenu="examplemenu"&gt;Click this text to see the example menu!&lt;/span&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<menu id="examplemenu" type="context">
				<menuitem icon="/images/violetflower.png" label="Home" onclick="window.open('https://violetrose.prototeam.org/index.php');"></menuitem>
				<menuitem icon="/images/violetflower.png" label="HTML" onclick="window.open('https://violetrose.prototeam.org/html.php');"></menuitem>
				<menuitem icon="/images/violetflower.png" label="CSS" onclick="window.open('https://violetrose.prototeam.org/css.php');"></menuitem>
				<menuitem icon="/images/violetflower.png" label="Javascript" onclick="window.open('https://violetrose.prototeam.org/javascript.php');"></menuitem>
				<menuitem icon="/images/blocks.png" label="Clicky Clicky Blocks" onclick="window.open('https://violetrose.prototeam.org/other/blocks.html');"></menuitem><!--This is a secret-ish easter egg that leads to a silly little JQuery test I was working on =3-->
			</menu>
			<span contextmenu="examplemenu">Click this text to see the example menu!</span>
		</figure>
	</section>
	<section>
		<h4>Child tags of <h4>&lt;menu&gt;</code></h4>
		<dl>
			<dt><code>&lt;menuitem&gt;</code></dt>
			<dd>Defines an individual menu option within a <code>&lt;menu&gt;</code> element.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;menu&gt;</code></h4>
		<dl>
			<dt><code>label</code></dt>
			<dd>Defines a visible label for the menu.</dd>
			<dt><code>type</code></dt>
			<dd>
				&#10551; Defines which type of menu the element creates.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>context</code></dt>
						<dd>A context menu, which displays the new options appended to the top of the normal right-click context menu when the user right-clicks the visible element.</dd>
						<dt><code>list</code></dt>
						<dd>A list menu, similar to other HTML lists, except user interactive, with each entry a clickable command. This type is not currently implemented in any browser.</dd>
						<dt><code>toolbar</code></dt>
						<dd>A toolbar menu. This type is not currently implemented in any browser.</dd>

					</dl>
				</details>
			</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;menuitem&gt;</code></h4>
		<dl>
			<dt><code>checked</code></dt>
			<dd>If <code>type</code> is set to <code>checkbox</code> or <code>radio</code>, specifies that the option should be checked by default when the user loads the page.</dd>
			<dt><code>default</code></dt>
			<dd>If present, defines this option as a default option. This attribute is not currently implemented in any browser.</dd>
			<dt><code>disabled</code></dt>
			<dd>If present, this menu option will be displayed normally, but nothing will happen when it is clicked.</dd>
			<dt><code>icon</code></dt>
			<dd>Specifies the URL of an image to be displayed next to the option as an icon.</dd>
			<dt><code>label</code></dt>
			<dd>Defines the name of the menu option as shown to the user. This attribute is required for the option to appear.</dd>
			<dt><code>radiogroup</code></dt>
			<dd>Specifies the name of a radio group this option is part of; when the user clicks the radio, every radio in the group will be activated at the same time.</dd>
			<dt><code>type</code></dt>
			<dd>
				&#10551; Defines the type of the menu option.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>checkbox</code></dt>
						<dd>A checkbox, unchecked by default. This type is not currently implemented in any browser.</dd>
						<dt><code>command</code></dt>
						<dd>A command option, identical to other right-click context menu commands.</dd>
						<dt><code>radio</code></dt>
						<dd>A circle that will contain a bullet when clicked. Similar to <code>checkbox</code>, but cannot be unchecked by clicking twice. This type is not currently implemented in any browser.</dd>
					</dl>
				</details>
			</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
