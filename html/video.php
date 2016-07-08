<?php
    $PAGE_NAME = '&lt;video&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p><strong>This page is currently incomplete!</strong></p>
		<p>This element is a player for video content, specifically MP4, WebM, and Ogg files, though not every format currently works in every browser.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;video controls preload="none"&gt;&lt;/video&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<video controls preload="none"></video>
		</figure>
	</section>
	<section>
		<h4>Child tags of <code>&lt;video&gt;</code></h4>
		<dl>
			<dt><code>&lt;track&gt;</code></dt>
			<dd>&#10551; </dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;video&gt;</code></h4>
		<dl>
			<dt><code>autoplay</code></dt>
			<dd>&#10551; If present, instructs the browser to begin playing the video immediately upon the page being loaded. <strong>This attribute is to be used only with care - it is not recommended for use in virtually any situation.</strong></dd>
			<dt><code>controls</code></dt>
			<dd>&#10551; If present, the video player will have a play/pause button, a mute/unmute button, and a volume slider.</dd>
			<dt><code>height</code></dt>
			<dd>&#10551; Defines the height of the element, in pixels.</dd>
			<dt><code>loop</code></dt>
			<dd>&#10551; If present, the video will repeat play from the beginning once it reaches the end of the file.</dd>
			<dt><code>muted</code></dt>
			<dd>&#10551; If present, the video will be muted by default.</dd>
			<dt><code>poster</code></dt>
			<dd>&#10551; Specifies the URL of an image to be shown while the video downloads, or until the user hits the play button.</dd>
			<dt><code>preload</code></dt>
			<dd>
				&#10551; Hints to the browser of how the author believes the file should be preloaded along with the page. The browser does not necessarily have to follow these instructions in all circumstances.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>auto</code></dt>
						<dd>&#10551; Suggests that the browser should preload the video along with the page.</dd>
						<dt><code>metadata</code></dt>
						<dd>&#10551; Suggests that the browser should only preload the metadata of the video.</dd>
						<dt><code>none</code></dt>
						<dd>&#10551; Suggests that the browser should not preload the video file at all.</dd>
					</dl>
				</details>
			</dd>
			<dt><code>src</code></dt>
			<dd>&#10551; Specifies the URL of the video file to be played.</dd>
			<dt><code>width</code></dt>
			<dd>&#10551; Defines the width of the element, in pixels.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;track&gt;</code></h4>
		<dl>
			<dt><code>default</code></dt>
			<dd>&#10551; Specifies that if the user's preferences do not indicate otherwise, this should be the default text track used.</dd>
			<dt><code>kind</code></dt>
			<dd>
				&#10551; Specifies what type of text track is being loaded.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>captions</code></dt>
						<dd>&#10551; Written dialogue and descriptions of important sounds for the hearing impaired.</dd>
						<dt><code>chapters</code></dt>
						<dd>&#10551; Chapter titles for ease of navigation.</dd>
						<dt><code>descriptions</code></dt>
						<dd>&#10551; An ongoing written description of the video content for the visually impaired.</dd>
						<dt><code>metadata</code></dt>
						<dd>&#10551; Information about the track file, usable by scripts but not visible to the user.</dd>
						<dt><code>subtitles</code></dt>
						<dd>&#10551; Subtitles (distinct from captions in that they are more geared towards differing languages and omit important sound effects).</dd>
					</dl>
				</details>
			</dd>
			<dt><code>label</code></dt>
			<dd>&#10551; Defines a title for the text track.</dd>
			<dt><code>src</code></dt>
			<dd>&#10551; Specifies the URL of the text track file to be played.</dd>
			<dt><code>srclang</code></dt>
			<dd>&#10551; Specifies the language of the text track being linked to, using standard <a href="http://www.w3schools.com/tags/ref_language_codes.asp">ISO language codes</a>.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
