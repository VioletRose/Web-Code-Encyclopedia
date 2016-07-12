<?php
    $PAGE_NAME = 'CSS Template';
    require_once($_SERVER["DOCUMENT_ROOT"].'/css/csshead.php');
?>
<main>
	<section>
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
		<h4>Accepted values:</h4>
		<dl>
			<dt><code><!--A value goes here.--></code></dt>
			<dd>&#10551; <!--A description of the above value goes here.--></dd>
		</dl>
	</section>
</main>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
