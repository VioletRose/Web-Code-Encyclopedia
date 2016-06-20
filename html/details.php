<?php
    $PAGE_NAME = '&lt;details&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="HTMLSection">
	<p>The &lt;details&gt; tag defines a section of text that will only be opened if the user clicks on it, otherwise remaining hidden within one line of summary.</p>
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
	<h4>Will be rendered as:</h4>
	<figure>
		<details>
			<summary>Click this to open!</summary>
			<p>Unfortunately, this tag isn't supported on all web browsers, so all the more reason to never ever use Internet Explorer or Edge!</p>
		</details>
	</figure>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
