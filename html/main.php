<?php
    $PAGE_NAME = '&lt;main&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main>
	<p>
		Another of the many Syntactic Web containers, and a compliment to &lt;body&gt;, &lt;main&gt; is meant to hold the bulk of the individual page's content, distinct from things like navigation bars and copyright footers.
	</p>
	<h4>
		Example:
	</h4>
	<figure>
		<code>
			&lt;main&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another of the many Syntactic Web containers, and a compliment to &amp;lt;body&amp;gt;, &amp;lt;main&amp;gt; is meant to hold the bulk of the individual page's content, distinct from things like navigation bars and copyright footers.
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Example:
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;figure&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;code&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--Sorry, only one recursion deep.--&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/code&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/figure&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will be rendered as:
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h4&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;figure&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;iframe src="/html/main.php"&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/iframe&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/figure&gt;
			<br>
			&lt;/main&gt;	
		</code>
	</figure>
	<h4>
		Will be rendered as:
	</h4>
	<figure>
		<iframe src="/html/main.php">
		</iframe>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
