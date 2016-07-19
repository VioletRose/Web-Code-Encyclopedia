<?php
    $PAGE_NAME = '&lt;wbr&gt;';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main>
	<section>
		<p>A surprisingly useful tag, especially considering the variety of resolutions people browse the web at, &lt;wbr&gt; is used to inject word break opportunities into an element with wrapping text, to make sure certain things remain nicely readable. For example, you could put a &lt;wbr&gt; before someone's full name, so it doesn't get cut off midway through by automatic text wrapping. Hint: to see the use of this tag on a PC, you should try resizing the window you view it in, to see where the text wraps in response to the changes. As you can see below, the alternative can cause problems for a site's layout!</p>
	</section>
	<section>
		<h4>Example of use:</h4>
		<figure>
			<code>
				&lt;p&gt;On certain occasions, especially when paragraphs get longer or more verbose, it can become necessary to exert some control over where exactly the text will begin to wrap, since in specific places it could look rather &lt;wbr&gt;inopportune - especially at points where the flow of formatting depends on being uninterrupted. It can also be used if, for whatever reason, thetextcontinuesforsolong&lt;wbr&gt;withoutaspacethatyouwishtocontrolwhereit&lt;wbr&gt;wrapstothenextlineifitabsolutelymustdoso&lt;wbr&gt;becausenowebbrowsercanpossiblybebigenough&lt;wbr&gt;toactuallydisplaythefullthingfrombeginningtoend&lt;wbr&gt;withoutaninterruptionatsomepointwithinitsboundaries.&lt;/p&gt;
			</code>
		</figure>
	</section>
	<section>
		<h4>Will be rendered as:</h4>
		<figure>
			<p>On certain occasions, especially when paragraphs get longer or more verbose, it can become necessary to exert some control over where exactly the text will begin to wrap, since in specific places it could look rather <wbr>inopportune - especially at points where the flow of formatting depends on being uninterrupted. It can also be used if, for whatever reason, thetextcontinuesforsolong<wbr>withoutaspacethatyouwishtocontrolwhereit<wbr>wrapstothenextlineifitabsolutelymustdoso<wbr>becausenowebbrowsercanpossiblybebigenough<wbr>toactuallydisplaythefullthingfrombeginningtoend<wbr>withoutaninterruptionatsomepointwithinitsboundaries.</p>
		</figure>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
