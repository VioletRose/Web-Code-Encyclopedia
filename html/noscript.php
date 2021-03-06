<?php
    $PAGE_NAME = '&lt;noscript&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>The &lt;noscript&gt; tag allows a website to display certain things in response to the user having scripting disabled or using a browser that doesn't support it, often in the same place scripted content would normally appear, but sometimes as a generic warning at the beginning of the page that things won't work properly.</p>
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
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$('.yesScript').html('If you are reading this, your browser supports scripting!').show();
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;});
				<br>
				&lt;/script&gt;
				<br>
				&lt;p class="yesScript" style="display: none"&gt;&lt;/p&gt;
				<br>
				&lt;noscript&gt;If you are reading this, your browser does not support scripting, or you have it disabled.&lt;/noscript&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
		    <script>
				/*This is calling the JQuery library, and is not normal Javascript.*/
				$(document).ready(function() {
					$('.yesScript').html('If you are reading this, your browser supports scripting!').show();
				});
			</script>
			<p class="yesScript" style="display: none"></p>
			<noscript>If you are reading this, your browser does not support scripting, or you have it disabled.</noscript>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
