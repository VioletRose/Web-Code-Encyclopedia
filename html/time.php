<?php
    $PAGE_NAME = '&lt;time&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This Syntactic Web tag designates the included text as a date or time, but styles it no differently from the surrounding text.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;p&gt;It is currently &lt;time&gt;2:07 PM&lt;/time&gt;. In 27 days' time, it will be &lt;time datetime="2016-07-04 0:00"&gt;Independence Day&lt;/time&gt;.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<p>It is currently <time>2:07 PM</time>. In 27 days' time, it will be <time datetime="2016-07-04 0:00">Independence Day</time>.</p>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>datetime</code></dt>
			<dd>&#10551; Specifies a machine-readable datetime. See <a href="https://www.w3.org/TR/html-markup/input.datetime.html#input.datetime.attrs.value">here</a> for information on accepted ways of formatting the value.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
