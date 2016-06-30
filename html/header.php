<?php
    $PAGE_NAME = '&lt;header&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This Syntactic Web element designates any contained elements or text as a header preceding the page's main content, often including a title, logo, authorship information, and/or site navigation links.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;header&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;On the Versatility of the Glorious Div&lt;/h1&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&gt;by Violet Rose&lt;/h3&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;This text not reprinted with permission, because this is the original work and not a reprinting.&lt;/p&gt;
				<br>
				&lt;/header&gt;
				<br>
				&lt;main&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Divs are great! I love divs!&lt;/p&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;...Were you expecting more?&lt;/p&gt;
				<br>
				&lt;/main&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<header class="exampleFHS">
				<h1>On the Versatility of the Glorious Div</h1>
				<h3>by Violet Rose</h3>
				<p>This text not reprinted with permission, because this is the original work and not a reprinting.</p>
			</header>
			<p>Divs are great! I love divs!</p>
			<p>...Were you expecting more?</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
