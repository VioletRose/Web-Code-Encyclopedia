<?php
    $PAGE_NAME = '&lt;audio&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>This element is used to play an audio file, and can be used to provide background music for a website (<strong>not recommended with autoplay enabled</strong>) or to provide a music player on the page.</p>
	<h4>Example:</h4>
	<figure>
		<code>
			&lt;audio src="/audio/bass-sample.mp3" type="audio/mpeg" controls loop preload="none"&gt;If you are viewing this, your browser does not support the &amp;lt;audio&amp;gt; tag or is blocking it.&lt;/audio&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<audio src="/audio/bass-sample.mp3" type="audio/mpeg" controls loop preload="none">If you are viewing this, your browser does not support the &lt;audio&;gt tag or is blocking it.</audio>
	</figure>
</main>
<footer>
	<h6>Example audio file provided by Himitsu Chan, and used with permission.</h6>
</footer>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
