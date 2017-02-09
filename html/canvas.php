<?php
    $PAGE_NAME = '&lt;canvas&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This element defines a given space on the screen that Javascript can be used to modify on the fly. Without Javascript to define its contents, it will only render as a blank white space.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;canvas id="demoCanvas"&gt;This text will only show if your browser doesn't support the &amp;lt;canvas&amp;gt;&lt;/canvas&gt;
				<br>
				&lt;script&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;document.addEventListener('DOMContentLoaded', function() {
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var canvas = document.getElementById("demoCanvas");
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var ctx = canvas.getContext("2d");
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ctx.fillStyle = "#7F00FF";
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ctx.fillRect(0, 0, 70, 70);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;});
				<br>
				&lt;/script&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<canvas id="demoCanvas">This text will only show if your browser doesn't support the &lt;canvas&gt; element.</canvas>
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					var canvas = document.getElementById("demoCanvas");
					var ctx = canvas.getContext("2d");
					ctx.fillStyle = "#7F00FF";
					ctx.fillRect(0, 0, 70, 70);
				});
			</script>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>height</code></dt>
			<dd>Defines the canvas's height, in pixels.</dd>
			<dt><code>width</code></dt>
			<dd>Defines the canvas's width, in pixels.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
