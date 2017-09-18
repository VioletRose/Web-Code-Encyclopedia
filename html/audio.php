<?php
    $PAGE_NAME = '&lt;audio&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This element is used to play an audio file, and can be used to provide background music for a website (<strong>not recommended with autoplay enabled</strong>) or to provide a music player on the page. It supports .mp3, .wav, and .ogg audio formats, though not every format currently works in every browser.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;audio src="/audio/bass-sample.mp3" controls loop preload="none"&gt;If you are viewing this, your browser does not support the &amp;lt;audio&amp;gt; tag or is blocking it.&lt;/audio&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<audio src="/audio/bass-sample.mp3" controls loop preload="none">If you are viewing this, your browser does not support the &lt;audio&;gt tag or is blocking it.</audio>
		</figure>
	</section>
	<section>
		<h4>Child Tags</h4>
		<dl>
			<dt><code>&lt;source&gt;</code></dt>
			<dd>Allows the browser to select multiple possible source files for the audio, selecting the first one the browser is compatible with.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;audio&gt;</code></h4>
		<dl>
			<dt><code>autoplay</code></dt>
			<dd>If present, instructs the browser to begin playing the audio immediately upon the page being loaded. <strong>This attribute is to be used only with care - it is not recommended for use in virtually any situation.</strong></dd>
			<dt><code>controls</code></dt>
			<dd>If present, the audio player will have a play/pause button, a mute/unmute button, and a volume slider.</dd>
			<dt><code>loop</code></dt>
			<dd>If present, the audio will repeat play from the beginning once it reaches the end of the file.</dd>
			<dt><code>muted</code></dt>
			<dd>If present, the audio will be muted by default.</dd>
			<dt><code>preload</code></dt>
			<dd>
				Hints to the browser of how the author believes the file should be preloaded along with the page. The browser does not necessarily have to follow these instructions in all circumstances.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>auto</code></dt>
						<dd>Suggests that the browser should preload the audio along with the page.</dd>
						<dt><code>metadata</code></dt>
						<dd>Suggests that the browser should only preload the metadata of the audio.</dd>
						<dt><code>none</code></dt>
						<dd>Suggests that the browser should not preload the audio file at all.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>src</code></dt>
			<dd>Specifies the URL of the audio file to be played.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of &lt;source&gt;</h4>
		<dl>
			<dt><code>media</code></dt>
			<dd>This attribute is not currently supported in any browser.</dd>
			<dt><code>src</code></dt>
			<dd>Functions identically to the same attribute of the parent element.</dd>
			<dt><code>type</code></dt>
			<dd>Specifies the type of audio file targeted by <code>src</code>. See <a href="https://www.iana.org/assignments/media-types/media-types.xhtml#audio">here</a> for a complete list of accepted values.</dd>
		</dl>
	</section>
</main>
<footer class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<h6>Example audio file provided by Himitsu Chan, and used with permission.</h6>
</footer>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
