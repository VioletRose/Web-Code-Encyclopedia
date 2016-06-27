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
			<dt><code>&lt;keygen&gt;</code></dt>
			<dd>&#10551; </dd>
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
			<dd>&#10551; </dd>
			<dt><code>&lt;action&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;autocomplete&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;enctype&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;method&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;name&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;novalidate&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;target&gt;</code></dt>
			<dd>&#10551; </dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;fieldset&gt;</code></h4>
		<dl>
			<dt><code>&lt;disabled&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;form&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;name&gt;</code></dt>
			<dd>&#10551; </dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;input&gt;</code></h4>
		<dl>
			<dt><code>&lt;accept&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;alt&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;autocomplete&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;autofocus&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;checked&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;dirname&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;disabled&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;form&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;formaction&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;formenctype&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;formmethod&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;formnovalidate&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;formtarget&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;height&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;list&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;max&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;maxlength&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;min&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;multiple&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;name&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;pattern&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;placeholder&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;readonly&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;required&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;size&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;src&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;step&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;type&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;value&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;width&gt;</code></dt>
			<dd>&#10551; </dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;keygen&gt;</code></h4>
		<dl>
			<dt><code>&lt;autofocus&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;challenge&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;disabled&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;form&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;keytype&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;name&gt;</code></dt>
			<dd>&#10551; </dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;label&gt;</code></h4>
		<dl>
			<dt><code>&lt;for&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;form&gt;</code></dt>
			<dd>&#10551; </dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;output&gt;</code></h4>
		<dl>
			<dt><code>&lt;for&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;form&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;name&gt;</code></dt>
			<dd>&#10551; </dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;option&gt;</code></h4>
		<dl>
			<dt><code>&lt;disabled&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;label&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;selected&gt;</code></dt>
			<dd>&#10551; </dd>
			<dt><code>&lt;value&gt;</code></dt>
			<dd>&#10551; </dd>
		</dl>
	</section>
</main>

<?php
    }
?>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>