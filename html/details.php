<?php
    $PAGE_NAME = '&lt;details&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>The &lt;details&gt; element creates an expandable section of text that will only be opened if the user clicks on it, otherwise remaining hidden within one line of summary.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;details&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;summary&gt;Click this to open!&lt;/summary&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Unfortunately, this tag isn't supported on all web browsers, so all the more reason to never ever use Internet Explorer or Edge!&lt;/p&gt;
				<br>
				&lt;/details&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<details>
				<summary>Click this to open!</summary>
				<p>Unfortunately, this tag isn't supported on all web browsers, so all the more reason to never ever use Internet Explorer or Edge!</p>
			</details>
		</figure>
	</section>
	<section>
		<h4>Child tags of <code>&lt;details&gt;</code></h4>
		<dl>
			<dt><code>summary</code></dt>
			<dd>&#10551; Designates the included text as a summary of the <code>&lt;details&gt;</code> element, which will be displayed associated with the arrow the user clicks to view the contents of that element.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;details&gt;</code></h4>
		<dl>
			<dt><code>open</code></dt>
			<dd>&#10551; If present, the element will be open by default rather than closed.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
