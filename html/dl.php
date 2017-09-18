<?php
    $PAGE_NAME = '&lt;dl&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>One of several types of list in HTML, this one alternately lists terms and the descriptions of those terms.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;dl&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;dt&gt;HTML&lt;/dt&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;dd&gt;Hypertext Markup Language, the cornerstone of web development.&lt;/dd&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;dt&gt;CSS&lt;/dt&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;dd&gt;Cascading Style Sheets, the optimal way for changing the default appearance of elements on a webpage.&lt;/dd&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;dt&gt;JQuery&lt;/dt&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;dd&gt;A very popular Javascript library that streamlines and simplifies the use of Javascript immensely.&lt;/dd&gt;
				<br>
				&lt;/dl&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<dl id="exampledl">
				<dt>HTML</dt>
				<dd>Hypertext Markup Language, the cornerstone of web development.</dd>
				<dt>CSS</dt>
				<dd>Cascading Style Sheets, the optimal way for changing the default appearance of elements on a webpage.</dd>
				<dt>JQuery</dt>
				<dd>A very popular Javascript library that streamlines and simplifies the use of Javascript immensely.</dd>
			</dl>
		</figure>
	</section>
	<section>
		<h4>Child tags of <code>&lt;dl&gt;</code></h4>
		<dl>
			<dt><code>&lt;dd&gt;</code></dt>
			<dd>Contains the definition of the preceding term.</dd>
			<dt><code>&lt;dt&gt;</code></dt>
			<dd>Contains the term to be defined.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
