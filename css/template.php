<?php
    $PAGE_NAME = 'CSS Template';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
		<p>Required property: <a href="<!--A link to the required property's page goes here.-->"><code><!--The name of the required property goes here.--></code></a></p>
		<p>This page is about a shorthand property and the other properties it sets.</p>
		<p><!--A description of the property's function and use goes here--></p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				<!--Four no space line breaks here just in case I need to copy/paste them: &nbsp;&nbsp;&nbsp;&nbsp;-->
				<!--The CSS code example goes here.-->
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<style>
				/*The CSS rules go here.*/
			</style>
			<!--The thing the CSS rules apply to goes here.-->
		</figure>
	</section>
	<section>
		<h4>Sub-properties of <code><!--The name of the property goes here.--></code>:</h4>
		<dl>
			<dt><code><!--A sub-property's name goes here.--></code></dt>
			<dd>&#10551; <!--A description of the sub-property's name goes here.--></dd>
		</dl>
		<details>
			<summary>Sub-properties of sub-properties:</summary>
			<ul>
				<li><code><!--A sub-sub-property's name goes here.--></code></li>
			</ul>
		</details>
	</section>
	<section>
		<h4>Accepted values of <code><!--The name of the property goes here.--></code>:</h4>
		<dl>
			<dt><code><!--A value goes here.--></code></dt>
			<dd>&#10551; <!--A description of the above value goes here.--></dd>
			<dt><code><var><!--A variable goes here.--></var></code></dt>
			<dd>
				&#10551; <!--A description of the above declaration goes here.-->
				<details>
					<summary>Variables:</summary>
					<dl>
						<dt><code><var><!--A variable goes here.--></var></code></dt>
						<dd>&#10551; <!--A description of the variable goes here.--></dd>
					</dl>
				</details>
			</dd>
			<dt><code>initial</code></dt>
			<dd>&#10551; Sets this property to its initial, unmodified value.</dd>
			<dt><code>inherit</code></dt>
			<dd>&#10551; Sets this property to the value assigned to its parent element.</dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
