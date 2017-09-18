<?php
    $PAGE_NAME = '&lt;script&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
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
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>async</code></dt>
			<dd>If present, specifies that the script should be run alongside the page continuing to load, as opposed to executing to completion immediately upon being loaded.</dd>
			<dt><code>charset</code></dt>
			<dd>Specifies the character set an external script file is encoded in.</dd>
			<dt><code>defer</code></dt>
			<dd>If present, specifies that the script should not be executed until the page is fully loaded. Mutually exclusive with <code>async</code>.</dd>
			<dt><code>src</code></dt>
			<dd>Specifies the URL of a script file to be loaded and executed.</dd>
			<dt><code>type</code></dt>
			<dd>Specifies the media type of the script.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
