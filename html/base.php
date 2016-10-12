<?php
    $PAGE_NAME = '&lt;base&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This element is used to specify default behaviors for how URLs on the page in general, and especially relative URLs, are handled. It must be placed in the head element, <em>not</em> the body.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;base href="https://violetrose.prototeam.org/" target="_blank"&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>href</code></dt>
			<dd>Designates the URL given as the base URL for any relative links on the page, instead of it being relative to the location of the current page's source file.
			<dt><code>target</code></dt>
			<dd>
				Specifies where linked content should be opened by default.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>_blank</code></dt>
						<dd>&#10551; Opens the content in a new window or tab.</dd>
						<dt><code>_self</code></dt>
						<dd>&#10551; Opens the content in the same frame where it was clicked. This is the default behavior.</dd>
						<dt><code>_parent</code></dt>
						<dd>&#10551; Opens the content in the parent frame of the child frame where the link appears, if applicable.</dd>
						<dt><code>_top</code></dt>
						<dd>&#10551; Opens the content in the full body of the window.</dd>
						<dt><code><var>framename</var></code></dt>
						<dd>&#10551; When <code><var>framename</var></code> is replaced with the name of a valid frame, will open the content in that frame.</dd>
					</dl>
				</details>
			</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
