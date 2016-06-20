<?php
    $PAGE_NAME = '&lt;ul&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>This tag creates an unordered list, which, without CSS styling, prefaces each list entry with a bullet.</p>
	<h4>Example of use:</h4>
	<figure>
		<code>
			&lt;ul&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Uppercase letters&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Lowercase letters&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Numbers&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Uppercase Roman numerals&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Lowercase Roman numerals&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Disc (filled circle) bullets&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Circle (hollow circle) bullets&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Square bullets&lt;/li&gt;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;No bullets&lt;/li&gt;
			<br>
			&lt;/ul&gt;
		</code>
	</figure>
	<h4>Will be rendered as:</h4>
	<figure>
		<h4>Types of list markings:</h4>
		<ul>
			<li>Uppercase letters</li>
			<li>Lowercase letters</li>
			<li>Numbers</li>
			<li>Uppercase Roman numerals</li>
			<li>Lowercase Roman numerals</li>
			<li>Disc (filled circle) bullets</li>
			<li>Circle (hollow circle) bullets</li>
			<li>Square bullets</li>
			<li>No bullets</li>
		</ul>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
