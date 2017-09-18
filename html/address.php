<?php
    $PAGE_NAME = '&lt;address&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This Semantic Web element designates the contained text as a mailing address.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;address&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Page created by &lt;a href="mailto:actuallya@fakeemailaddress.com"&gt;Violet Rose&lt;/a&gt;.
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Contact me at:
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;notarealwebsite.com
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Box 404, Nonexistence
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;br&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;USA
				<br>
				&lt;/address&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<address>
				Page created by <a href="mailto:actuallya@fakeemailaddress.com">Violet Rose</a>.
				<br>
				Contact me at:
				<br>
				notarealwebsite.com
				<br>
				Box 404, Nonexistence
				<br>
				USA
			</address>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
