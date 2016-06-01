<?php
    $PAGE_NAME = '&lt;canvas&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		This element defines a given space on the screen that Javascript can be used to modify on the fly. Without Javascript to define its contents, it will only render as a blank white space.
	</p>
	<p>
		Example:
		<br>
		&lt;canvas id="demoCanvas"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;This text will only show if your browser doesn't support the &amp;lt;canvas&amp;gt;
		<br>
		&lt;/canvas&gt;
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
	</p>
	<p>
		Will be rendered as:
		<br>
		<canvas id="demoCanvas">
			This text will only show if your browser doesn't support the &lt;canvas&gt;
		</canvas>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var canvas = document.getElementById("demoCanvas");
				var ctx = canvas.getContext("2d");
				ctx.fillStyle = "#7F00FF";
				ctx.fillRect(0, 0, 70, 70);
			});
		</script>
	</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
