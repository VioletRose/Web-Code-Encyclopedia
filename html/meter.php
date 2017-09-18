<?php
    $PAGE_NAME = '&lt;meter&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<p>This element displays a small meter, displaying a hidden numeric value between 0% and 100%. It will show as green normally, or yellow depending on the attributes set - red only appears if the meter is misconfigured and it considers its value both too high and too low. This element is an oddity by itself, but can be used with scripts to show the output of an equation or of multiple other fields. Text included inside the element will not be rendered anywhere on the page, unless the user's browser doesn't support it.</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure class="exampleFigure">
			<code>
				&lt;meter high="4" low="2" max="5" min="1" optimum="3" value="3"&gt;Optimum&lt;/meter&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;meter high="0.8" low="0.2" optimum="0.5" value="0.2"&gt;Not optimum&lt;/meter&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;meter high="0.8" low="0.2" optimum="0.5" value="0.95"&gt;High&lt;/meter&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;meter high="0.8" low="0.2" optimum="0.5" value="0.1"&gt;Low&lt;/meter&gt;
				<br>
				&lt;br&gt;
				<br>
				&lt;meter high="0.7" low="0.7" optimum="0.5" value="0.75"&gt;Misconfigured&lt;/meter&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure class="renderFigure">
			<meter high="4" low="2" max="5" min="1" optimum="3" value="3">Optimum</meter>
			<br>
			<meter high="0.8" low="0.2" optimum="0.5" value="0.2">Not optimum</meter>
			<br>
			<meter high="0.8" low="0.2" optimum="0.5" value="0.95">High</meter>
			<br>
			<meter high="0.8" low="0.2" optimum="0.5" value="0.1">Low</meter>
			<br>
			<meter high="0.7" low="0.7" optimum="0.5" value="0.75">Misconfigured</meter>
		</figure>
	</section>
	<section>
		<h4>Attributes</h4>
		<dl>
			<dt><code>form</code></dt>
			<dd>Specifies the id of an associated <code>&lt;form&gt;</code> element. Not necessary if the element is a child of the <code>&lt;form&gt;</code> element.</dd>
			<dt><code>high</code></dt>
			<dd>Defines the numeric value above which the meter will be considered high. Above this value, the meter will show as yellow.</dd>
			<dt><code>low</code></dt>
			<dd>Defines the numeric value below which the meter will be considered low. Below this value, the meter will show as yellow.</dd>
			<dt><code>max</code></dt>
			<dd>Defines the maximum numeric value of the meter. If this attribute is not set, it will default to 1.</dd>
			<dt><code>min</code></dt>
			<dd>Defines the minimum numeric value of the meter. If this attribute is not set, it will default to 0.</dd>
			<dt><code>optimum</code></dt>
			<dd>Defines the optimum numeric value of the meter.</dd>
			<dt><code>value</code></dt>
			<dd>Defines the current numeric value of the meter. This attribute should always be set on any <code>&lt;meter&gt;</code> element.</dd>
		</dl>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
