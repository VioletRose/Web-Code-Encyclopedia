<?php
    $PAGE_NAME = '&lt;ol&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>This tag creates a preformatted ordered list, i.e. one where each item is preceded by a letter or number, in ascending or descending order. It also supports starting at a specific point, rather than from the beginning.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;ol&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Ichi&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Ni&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;San&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Shi/yon&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Go&lt;/li&gt;
				<br>
				&lt;/ol&gt;
				<br>
				&lt;ol reversed start="28" type="A"&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;One&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Two&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Three&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Four&lt;/li&gt;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Five&lt;/li&gt;
				<br>
				&lt;/ol&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<ol>
				<li>Ichi</li>
				<li>Ni</li>
				<li>San</li>
				<li>Shi/yon</li>
				<li>Go</li>
			</ol>
			<ol reversed start="28" type="A">
				<li>One</li>
				<li>Two</li>
				<li>Three</li>
				<li>Four</li>
				<li>Five</li>
			</ol>
		</figure>
	</section>
	<section>
		<h4>Child tags of &lt;ol&gt;</h4>
		<dl>
			<dt><code>&lt;li&gt;</code></dt>
			<dd>&#10551; Designates the included text as a list entry, and precedes it with a list marker.</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;ol&gt;</code></h4>
		<dl>
			<dt><code>reversed</code></dt>
			<dd>&#10551; If present, the consecutive values of the list's entries will count down, rather than up.</dd>
			<dt><code>start</code></dt>
			<dd>&#10551; Defines the numeric starting value of the list. The first entry, unless specified otherwise, will be this number.</dd>
			<dt><code>type</code></dt>
			<dd>
				&#10551; Defines the type of marker preceding each list entry. Note that if the <code>value</code> of an entry is 0 or below, it will be displayed numerically regardless of the normal behavior.
				<details>
					<summary>Accepted values:</summary>
					<dl>
						<dt><code>1</code></dt>
						<dd>&#10551; Standard numbers.</dd>
						<dt><code>A</code></dt>
						<dd>&#10551; Uppercase letters in alphabetical order. This is treated as a base 26 counting system, and entries past 26 will be wrapped around to AA, AB etc.</dd>
						<dt><code>a</code></dt>
						<dd>&#10551; Lowercase letters in alphabetical order. This is treated as a base 26 counting system, and entries past 26 will be wrapped around to AA, AB etc.</dd>
						<dt><code>I</code></dt>
						<dd>&#10551; Uppercase Roman numerals.</dd>
						<dt><code>i</code></dt>
						<dd>&#10551; Lowercase Roman numerals.</dd>
					</dl>
				</details>
			</dd>
		</dl>
	</section>
	<section>
		<h4>Attributes of <code>&lt;li&gt;</code></h4>
			<dl>
				<dt><code>value</code></dt>
				<dd>&#10551; Defines the numeric value of this entry within the <code>&lt;ol&gt;</code> element.
			</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
