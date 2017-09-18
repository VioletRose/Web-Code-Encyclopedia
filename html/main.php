<?php
    $PAGE_NAME = '&lt;main&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This Semantic Web element designates any contained elements or text as the main content of the webpage, separate from things like navigation bars and copyright footers.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;main&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;section&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;This Semantic Web element designates any contained elements or text as the main content of the webpage, separate from things like navigation bars and copyright footers.&lt;/p&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/section&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;section&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&gt;Example of use:&lt;/h4&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;figure class="exampleFigure"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;code&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--Sorry, only one recursion deep.--&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/code&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/figure&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/section&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;section&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&gt;Will be rendered as:&lt;/h4&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;figure class="renderFigure"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;iframe height="960" src="/html/main.php" width="540"&gt;&lt;/iframe&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/figure&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;/section&gt;
				<br>
				&lt;/main&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<div>
				<section>
					<p>This Semantic Web element designates any contained elements or text as the main content of the webpage, separate from things like navigation bars and copyright footers.</p>
				</section>
				<section>
					<h4>Example of use:</h4>
					<figure class="exampleFigure">
						<code>&lt;!--Sorry, only one recursion deep.--&gt;</code>
					</figure>
				</section>
				<section>
					<h4>Will be rendered as:</h4>
					<figure class="renderFigure">
						<code>&lt;!--Sorry, only one recursion deep.--&gt;</code>
					</figure>
				</section>
			</div>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
