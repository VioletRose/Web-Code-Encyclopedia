<?php
    $PAGE_NAME = '&lt;map&gt;';
    require_once('head.php');
?>
<div class="mainText">
	<p>
		As well as simply having an entire image be clickable as a hyperlink, it's also possible to create an image map, with defined areas inside that can be clicked separately, and this is what the &lt;map&gt; element is for. This is a rather complicated element with a number of things one can possible do with it. The example given is rather inadequate and will be replaced with a better one later.
	</p>
	<p>
		Example:<br>
		&lt;img src="images/mapbuttons.png" width="171" height="93" alt="areabuttons" usemap="#buttonmap"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;map name="buttonmap"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;area shape="rect" coords="0,0,58,30" href="index.php" alt="Home"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;area shape="rect" coords="158,0,170,29" href="html.php" alt="HTML"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;area shape="rect" coords="0,62,37,92" href="css.php" alt="CSS"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;area shape "rect" coords="81,62,170,92" href="javascript.php" alt="Javascript"&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/map&gt;
		<br>
		&lt;/img&gt;
	</p>
	<p>
		Will be rendered as:<br>
		<img src="mapbuttons.png" width="171" height="93" alt="areabuttons" usemap="#buttonmap">
			<map name="buttonmap">
				<area shape="rect" coords="0,0,58,30" href="index.php" alt="Home">
				<area shape="rect" coords="115,0,170,29" href="html.php" alt="HTML">
				<area shape="rect" coords="0,62,37,92" href="css.php" alt="CSS">
				<area shape "rect" coords="81,62,170,92" href="javascript.php" alt="Javascript">
			</map>
		</img>
	</p>
</div>	
<?php
    require_once('foot.php');
?>
