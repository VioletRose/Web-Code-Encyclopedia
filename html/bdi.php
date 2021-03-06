<?php
    $PAGE_NAME = '&lt;bdi&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>The &lt;bdi&gt; element is used to isolate embedded text from the normal page text, in cases where the embedded text might have a different direction than the rest of the page, such as usernames or writing in right-to-left languages.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;ul&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;User: &lt;bdi&gt;VII.Rosa&lt;/bdi&gt;, joined 07-04-2004&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;User: &lt;bdi&gt;CrescentWarrior&lt;/bdi&gt;, joined 03-27-2006&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;User: &lt;bdi&gt;秘密ちゃん&lt;/bdi&gt;, joined 09-16-2005&lt;/li&gt;
				<br>
				&lt;/ul&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<ul>
				<li>User: <bdi>VII.Rosa</bdi>, joined 07-04-2004</li>
				<li>User: <bdi>CrescentWarrior</bdi>, joined 03-27-2006</li>
				<li>User: <bdi>秘密ちゃん</bdi>, joined 09-16-2005</li>
			</ul>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
