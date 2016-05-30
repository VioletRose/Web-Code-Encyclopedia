<?php
    $PAGE_NAME = '&lt;bdi&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<div class="mainText">
	<p>
		The &lt;bdi&gt; element is used to isolate embedded text from the normal page text, in cases where the embedded text might have a different direction than the rest of the page, such as usernames or writing in right-to-left languages.
	</p>
	<p>
		Example:
		<br>
		&lt;ul&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User: 
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;bdi&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VII.Rosa
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/bdi&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;, joined 07-04-2004
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User: 
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;bdi&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CrescentWarrior
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/bdi&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;, joined 03-27-2006
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User: 
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;bdi&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;秘密ちゃん
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/bdi&gt;
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;, joined 09-16-2005
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li&gt;
		<br>
		&lt;/ul&gt;
	</p>
	<p>
		Will be rendered as:
		<br>
		<ul>
			<li>
				User: 
				<bdi>
					VII.Rosa
				</bdi>
				, joined 07-04-2004
			</li>
			<li>
				User: 
				<bdi>
					CrescentWarrior
				</bdi>
				, joined 03-27-2006
			</li>
			<li>
				User: 
				<bdi>
					秘密ちゃん
				</bdi>
				, joined 09-16-2005
			</li>
		</ul>
	</p>
</div>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
