<?php
    $PAGE_NAME = 'HTML';
    require_once($_SERVER["DOCUMENT_ROOT"].'/html/htmlhead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<section>
		<h4>Navigating the HTML Section</h4>
		<p>On every page in this section, on the left side of the screen you will find links to pages for each of the elements and tags used in HTML, sorted categorically and alphabetically, as well as a list of global attributes (which may be applied to nearly any logical element). Each page will have a brief description of the element or tag, an example of its use, and a list of attributes applicable to it. Some tags only appear inside of other elements, which will not have dedicated pages; additionally, a list of deprecated tags is provided, but as these tags are not supported by modern web browsers, no examples will be given. On this page, you will also find explanations of the more basic concepts in HTML.</p>
		<p>Note on element examples: in cases such as <code>&gt;video&lt;</code> where the size of the element is either set via attributes or tries to match the dimensions of its source file, the normal behavior would be for them to remain that size regardless of the size of their containing elements or, in fact, the page itself. As such, I have given those elements the CSS class <code>htmlSized</code>, which enforces a maximum width and automatically scales height accordingly.</p>
	</section>
	<section>
		<h4>What is HTML?</h4>	
		<p>HyperText Markup Language - HTML is the most basic of the languages used in web development. It is arguably the easiest, but what there's no room for debate on is that every real website has HTML as its backbone, no matter how much CSS, Javascript, JQuery, and server-side scripting is involved, it relies on HTML to actually display the page. However, despite its relative simplicity, there is still a great deal of hidden complexity and several oddities to account for. HTML has gone through multiple versions over time, as defined by the World Wide Web Consortium (W3C), an international organization formed to discuss and define standards for web development, in cooperation with major web browsers. The current version used on modern webpages is HTML5.</p>
	</section>
	<section>
		<h4>How it Works</h4>
		<p>When you connect to a website, your computer downloads the HTML document, along with any CSS or Javascript files that the HTML document specifies. Upon being downloaded, your web browser follows the instuctions given to it by the code, and constructs the viewable website for you. As such, HTML, CSS, and Javascript are what is known as client-side languages. They execute on the user's machine, the client, not on the server that hosts them as code. However, other languages such as PHP, SQL, and XML are server-side languages, which will execute when the user tries to access the page and dynamically modify what is sent to them, rather than working on the user's machine. As an example, on this site I have PHP adding the page's header and the navigation bar on the side to every page rather than writing it out again each time, but as far as the user is concerned, they won't see a difference.</p>
	</section>
	<section>
		<h4>Other Web Languages</h4>
		<p>HTML is not the only type of code being used on nearly every modern website. In today's world, being a web developer means having a working knowledge of multiple languages - knowing <em>only</em> HTML is simply not something you can do. Cascade StyleSheets - CSS, is the most common addition, being capable of instructing web browsers in very fine detail about how to display the results of your HTML code to the user. Nearly all websites, this one included, have at least one stylesheet file associated with them that contains these rules. Click <a href="/stylesheets/encyclopedia.css">here</a> to take a look! The second most common addition is Javascript, which allows the content of the site to be dynamically changed. Although, these days most Javascript is written using the open source library JQuery, which uses a very complex logic and has a huge number of functions that allow scripts to be written more simply, efficiently, and with greater compatibility. On top of these client-side languages, there are also server-side languages. PHP: Hypertext Preprocessor, is a server-side language which controls files on the server, changing how they are served to the user and even capable of dynamically modifying, creating, and deleting files, as well as many other things. SQL is a more specialized server-side language, which is used for controlling and interfacing with large databases, structured collections of information. EXtensible Markup Language - XML, is used for transportation and storage of data, and is designed to be readable by both humans and machines. There are other types of server-side code as well, the most common being ASP, which functions similarly to PHP but less efficiently.</p>
	</section>
	<section>
		<h4>Syntax - How to Write HTML Code</h4>
		<p>HTML as a language has a much more lenient syntax than many others, such as C# or Javascript. Tabbing isn't necessary, capitalization is ignored, unnecessary spaces often won't be displayed, and technically, you can page break as much or as little as you want, but this doesn't mean your code should be sloppy or all over the page. The style I use for my code is the one I believe to be most ideal for my purposes, for the most part sticking close to the standards used by web professionals, with some personal quirks that improve readability for me, but you don't have to do it exactly like I do as long as you follow some simple rules. <strong>Keep it readable.</strong> If you work in web development, or even just if your page gets complex and you need to revisit it far in the future, your HTML should be easy for a competent programmer to understand by looking at it. If it's not, you probably need to either tighten up your syntax, add more comments to anything particularly complex, or both. <strong>Keep it consistent.</strong> Once you decide on how you will format your HTML documents, follow the rules you set for yourself without any unnecessary exceptions, and even those should have comments explaining why that was necessary. And don't fall into the trap of changing your personal syntax midway through a project - <em>follow good practice</em> and update your older work! <strong>When in doubt, follow the mainstream.</strong> There's no harm in innovation, but only when it actually improves something. For the most part, you should strive to have your code resemble that of your peers, unless you feel there's a pressing reason to do otherwise - the alternative makes your work more mentally taxing to read, and will leave reviewers, collaborators, teammates, and/or employers scratching their heads, wondering why you did it that way. All that said, the one tip I would give and suggest it be used without exception - if it happens on a new line on the webpage (word wrap excluded), it should be on a new line in the code.</p>
	</section>
	<section>
		<h4>Elements/Tags and Heredity</h4>
		<p>Elements/Tags are the most basic type of command in HTML. Element is synonymous with tag, they both function the same in code terms, the distinction is purely in terms of how they display in the web browser. In general, an element is a solid, distinct thing, such as this section with the border around it, while a tag is an inline modifier for something, such as <mark>highlighting</mark> for text, but in the context of this page, I will use only the word element. Every element must be formatted as <code>&lt;<var>element</var>&gt;</code> to begin the element, and <code>&lt;/<var>element</var>&gt;</code> to close it. Some rare elements do not need to be closed, but most do. Other elements may be opened before the first element is closed, which causes them to be considered children of the unclosed elements above them - the containing element may also now be called a container, though this is a semantic distinction and not a technical one. Depending on the parent element, this can significantly alter their appearance and function, since the normal HTML behavior of every one of their parents is passed down, as are applicable style rules such as margins, text color, and more complex things. It is considered "good practice", an optimal way of writing your page, to close elements as soon as they no longer apply; additionally, a principle known as "clear heredity" states that every child element should be closed <em>before</em> the parent element. Additionally, the use of the term "child tags" is contextual: it may refer to any element or tag contained by another, or it may refer to specific elements/tags that can <em>only</em> exist inside specific other ones. The latter case is what the section in the sidebar refers to.</p>
	</section>
	<section>
		<h4>Attributes</h4>
		<p>Attributes are additional modifiers to an element's behavior. Some elements have attributes that they can't be used without, but in most cases, it's situational. One important thing to note is that in many cases, elements may allow an attribute to be set that simply instructs them to behave normally, usually as a result of new behaviors becoming the defaults over multiple versions of HTML. To add an attribute to an element, simply format it as <code>&lt;<var>element</var> <var>attribute</var>="<var>value</var>"&gt;</code>. Each set of &lt;&gt;s can only contain one element, but can contain as many attributes as desired, separated by a space. Each attribute may only have one value set, but in some cases, where the value of the attribute is being interpreted by another type of code such as CSS, or another program such as a search engine, it may be treated as multiple values. The most common example here is the <code>class</code> attribute, which is used by CSS to associate the element with specific style rules. If you had a stylesheet with classes for elements with no margins, and elements with a different textcolor, you could format an element's <code>class</code> attribute as <code>class="blueText noMargins"</code>. To the web browser, the value of <code>class</code> is <code>blueText no Margins</code>, but the CSS stylesheet will interpret the space as meaning you want <code>.blueText</code> <em>and</em> <code>.noMargins</code>.</p> There are other exceptions of this kind, and they will be documented along with the attributes in question.</p>
	</section>
	<section>
		<h4>Absolute vs. Relative URLs</h4>
		<p>For attributes which specify a URL, an important distinction should be made between absolute URLs and relative URLs. An absolute URL is the complete, full address of the content in question - in the case of this page, it is <code>https://violetrose.prototeam.org/index.php</code>. A relative URL, on the other hand, will attempt to navigate relative to the location of the current webpage. A link to <code>index.php</code> on this page would bring you back to the main page of the site, because they are in the same folder within the server's internal file system, and the browser does the work of filling in the rest of the URL. But in addition to these two basic forms, it is also possible to use relative links a bit more absolutely. If the user is on <code>https://violetrose.prototeam.org/html/a.php</code>, a relative link to <code>/index.php</code> would direct the browser to the right URL, as the <code>/</code> at the beginning informs it that the link is relative to the root of the website, the highest directory in its structure. Likewise, a link to <code>../index.php</code> would also work, because the <code>../</code> informs the browser to move one directory <em>up</em> in the structure when attempting to resolve a relative link. Relative links are good to use for multiple reasons, but in general, the rule is that absolute URLs should be used for content <em>external</em> to your website, while relative links are for <em>internal</em> navigation.</p>
	</section>
	<section>
		<h4>Block vs. Inline Display</h4>
		<p>There is the difference between the usage of block elements, inline blocks, and inline tags. Normal block elements occupy a new line on the screen, even without a line break being specified. Inline blocks are technically separate objects like normal blocks are, but they display inline by default (unless modified by CSS), meaning they won't create a line break on their own. Inline tags modify the text contained within them in some way, but otherwise leave the layout of the page alone. And both block elements and inline blocks may have a parent/child relationship with all of the other elements and tags after the point that they are opened, up to the point where they are closed. This means that any function the container element has will be applied to all of its child elements, including CSS formatting. Modern web standards make it important, in particular, to ensure that you close all child elements before closing the parent - this is called the rule of clear heredity. Also note that throughout these pages, I will refer to potential containers as <strong>elements</strong>, and if it can't be a container, I will refer to it as a <strong>tag</strong>. Furthermore, in my examples I will show elements/tags inside of a container with one tabulation for each container they are a child of, as well as a line break between each one, whereas inline tags will be placed all on the same line (not counting text wrapping).</p>
	</section>
	<section>
		<h4>One Size Doesn't Fit All</h4>
		<p>It's important to know that each element or tag has both its own, default, unmodified functionality, a set of attributes that can be applied to it, whatever CSS rules may be specified in the stylesheet to modify that element/tag or its class/ID, <em>and</em> whatever CSS rules may be inherited from the parent container. Depending on these factors, the same element or tag can look and behave quite differently between websites or even on the same site. Also worth noting is that along with unique attributes associated with specific elements, there is also a list of global attributes that can be applied to many different elements and tags.</p>
	</section>
	<section>
		<h4>Browser Compatibility</h4>
		<p>Sadly, even at the time I am writing this, not all web browsers support the use of every element in HTML5, and of those that are supported, some browsers may be glitchier than others when attempting to display them. Internet Explorer and Edge in particular lag behind the frontrunners, Google Chrome and Mozilla Firefox. Safari also struggles to keep up, though Opera more or less functions identically to Google Chrome internally, so it has no compatibility issues Chrome doesn't. When writing your website, keep in mind that you'll need to consider which elements are supported by which browsers; depending on your goal, it may not be relevant, but especially in the professional sector it's important to get your content to as broad a range of users as possible. A third option, in cases where it is deemed acceptable, is to include a warning on your page informing users of which browsers the website is intended to render on, and which ones may have difficulties - with scripting, it is even possible to have this warning only appear if the user's browser isn't fully compatible!</p>
	</section>
	<section>
		<h4>HTML5 and the Semantic Web</h4>
		<p>Introduced with HTML5, there is a modern design philosophy known as the Semantic Web. Simply put, this concept states that whenever possible, programmers should attempt to use the most appropriate element or tag for the task at hand, even though it is often possible to accomplish an identical result several different ways. The reason for this is that in the modern era, it's becoming more and more common for websites to be read by programs rather than people - and the programs are looking at your code, not how it renders in the web browser. Search engines are the most major example of this, along with screen readers that enable the blind to still, to an extent, navigate the web. Especially in the latter case, you add additional context and intelligence to your text formatting by using the proper tag for the job. For example, most often just making the text bold isn't the right solution, there are tags that will make it stand out visually and, to some extent, explain <em>why</em> that text should be visually distinct. The more clear it is what everything on the page is, in terms of usage and category, the more optimally both screen readers and search engines will function. And in a professional environment, 99 times out of 100, having your content well-formatted for search engines is very, very important!</p>
	</section>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
