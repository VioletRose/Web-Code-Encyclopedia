<?php
    $PAGE_NAME = '&lt;script&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag is used to either begin and end Javascript code within the HTML page, or refer to an external .js file.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;script&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;/*This is calling the JQuery library, and is not normal Javascript.*/
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;$(document).ready(function() {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$('#examplescript').html('Hello, and welcome to my HTML tag page!').show();
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;});
				<br>
				&lt;/script&gt;
				<br>
				&lt;p id="examplescript"&gt;&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<script>
				/*This is calling the JQuery library, and is not normal Javascript.*/
				$(document).ready(function() {
				   $('#examplescript').html('Hello, and welcome to my HTML tag page!').show();
				});
			</script>
			<p id="examplescript"></p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
