<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Violet's Web Code Encyclopedia - <?php echo $PAGE_NAME; ?></title>
<link rel="stylesheet" type="text/css" href="/stylesheets/encyclopedia.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans|Inconsolata' rel='stylesheet' type='text/css'><!--The use of open fonts is a personal quirk of mine, namely that I want all text on this website to appear as intended and not be thrown off by browsers that don't follow web standards, or fonts that haven't been updated.-->
<script src="/scripts/jquery-3.0.0.min.js"></script>
</head>
<body class="HTMLBody">
<header>
	<h1 class="pageHeadline"><?php echo $PAGE_NAME; ?></h1>
	<nav class="navTopbar">
		<a href="/index.php">Home</a>
		<a href="/html.php">HTML</a>
		<a href="/css.php">CSS</a>
		<a href="/javascript.php">Javascript</a>
		<a href="/changelog.php">Changelog</a>
	</nav>
</header>
<nav class="navSidebar">
	<h4><a href="/html/attributes.php">Global Attributes</a></h4>
	<h4>Block Elements</h4>
	<ul>
		<li><a href="/html/address.php"><code>&lt;address&gt;</code></a></li>
		<li><a href="/html/article.php"><code>&lt;article&gt;</code></a></li>
		<li><a href="/html/audio.php"><code>&lt;audio&gt;</code></a></li>
		<li><a href="/html/blockquote.php"><code>&lt;blockquote&gt;</code></a></li>
		<li><a href="/html/canvas.php"><code>&lt;canvas&gt;</code></a></li>
		<li><a href="/html/details.php"><code>&lt;details&gt;</code></a></li>
		<li><a href="/html/dialog.php"><code>&lt;dialog&gt;</code></a></li>
		<li><a href="/html/div.php"><code>&lt;div&gt;</code></a></li>
		<li><a href="/html/dl.php"><code>&lt;dl&gt;</code></a></li>
		<li><a href="/html/embed.php"><code>&lt;embed&gt;</code></a></li>
		<li><a href="/html/figure.php"><code>&lt;figure&gt;</code></a></li>
		<li><a href="/html/footer.php"><code>&lt;footer&gt;</code></a></li>
		<li><a class="needsAttn" href="/html/form.php"><code>&lt;form&gt;</code></a></li>
		<li><a href="/html/h1-h6.php"><code>&lt;h1-h6&gt;</code></a></li>
		<li><a href="/html/header.php"><code>&lt;header&gt;</code></a></li>
		<li><a href="/html/hr.php"><code>&lt;hr&gt;</code></a></li>
		<li><a href="/html/iframe.php"><code>&lt;iframe&gt;</code></a></li>
		<li><a href="/html/main.php"><code>&lt;main&gt;</code></a></li>
		<li><a href="/html/meter.php"><code>&lt;meter&gt;</code></a></li>
		<li><a class="needsAttn" href="/html/map.php"><code>&lt;map&gt;</code></a></li>
		<li><a href="/html/menu.php"><code>&lt;menu&gt;</code></a></li>
		<li><a href="/html/nav.php"><code>&lt;nav&gt;</code></a></li>
		<li><a href="/html/object.php"><code>&lt;object&gt;</code></a></li>
		<li><a href="/html/ol.php"><code>&lt;ol&gt;</code></a></li>
		<li><a href="/html/p.php"><code>&lt;p&gt;</code></a></li>
		<li><a href="/html/pre.php"><code>&lt;pre&gt;</code></a></li>
		<li><a href="/html/progress.php"><code>&lt;progress&gt;</code></a></li>
		<li><a href="/html/section.php"><code>&lt;section&gt;</code></a></li>
		<li><a href="/html/table.php"><code>&lt;table&gt;</code></a></li>
		<li><a href="/html/ul.php"><code>&lt;ul&gt;</code></a></li>
		<li><a href="/html/video.php"><code>&lt;video&gt;</code></a></li>
	</ul>
	<h4>Inline Blocks</h4>
	<ul>
		<li><a href="/html/button.php"><code>&lt;button&gt;</code></a></li>
		<li><a href="/html/img.php"><code>&lt;img&gt;</code></a></li>
		<li><a href="/html/select.php"><code>&lt;select&gt;</code></a></li>
		<li><a href="/html/textarea.php"><code>&lt;textarea&gt;</code></a></li>
	</ul>
	<h4>Inline Tags</h4>
	<ul>
		<li><a href="/html/a.php"><code>&lt;a&gt;</code></a></li>
		<li><a href="/html/abbr.php"><code>&lt;abbr&gt;</code></a></li>
		<li><a href="/html/aside.php"><code>&lt;aside&gt;</code></a></li>
		<li><a href="/html/b.php"><code>&lt;b&gt;</code></a></li>
		<li><a href="/html/bdi.php"><code>&lt;bdi&gt;</code></a></li>
		<li><a href="/html/bdo.php"><code>&lt;bdo&gt;</code></a></li>
		<li><a href="/html/br.php"><code>&lt;br&gt;</code></a></li>
		<li><a href="/html/cite.php"><code>&lt;cite&gt;</code></a></li>
		<li><a href="/html/code.php"><code>&lt;code&gt;</code></a></li>
		<li><a href="/html/del.php"><code>&lt;del&gt;</code></a></li>
		<li><a href="/html/dfn.php"><code>&lt;dfn&gt;</code></a></li>
		<li><a href="/html/em.php"><code>&lt;em&gt;</code></a></li>
		<li><a href="/html/i.php"><code>&lt;i&gt;</code></a></li>
		<li><a href="/html/ins.php"><code>&lt;ins&gt;</code></a></li>
		<li><a href="/html/kbd.php"><code>&lt;kbd&gt;</code></a></li>
		<li><a href="/html/mark.php"><code>&lt;mark&gt;</code></a></li>
		<li><a href="/html/noscript.php"><code>&lt;noscript&gt;</code></a></li>
		<li><a href="/html/q.php"><code>&lt;q&gt;</code></a></li>
		<li><a href="/html/ruby.php"><code>&lt;ruby&gt;</code></a></li>
		<li><a href="/html/s.php"><code>&lt;s&gt;</code></a></li>
		<li><a href="/html/samp.php"><code>&lt;samp&gt;</code></a></li>
		<li><a href="/html/small.php"><code>&lt;small&gt;</code></a></li>
		<li><a href="/html/span.php"><code>&lt;span&gt;</code></a></li>
		<li><a href="/html/strong.php"><code>&lt;strong&gt;</code></a></li>
		<li><a href="/html/sub.php"><code>&lt;sub&gt;</code></a></li>
		<li><a href="/html/sup.php"><code>&lt;sup&gt;</code></a></li>
		<li><a href="/html/time.php"><code>&lt;time&gt;</code></a></li>
		<li><a href="/html/u.php"><code>&lt;u&gt;</code></a></li>
		<li><a href="/html/var.php"><code>&lt;var&gt;</code></a></li>
		<li><a href="/html/wbr.php"><code>&lt;wbr&gt;</code></a></li>
	</ul>
	<h4>Not Rendered</h4>
	<ul>
		<li><a href="/html/comment.php"><code>&lt;!--&gt;</code></a></li>
		<li><a href="/html/doctype.php"><code>&lt;!DOCTYPE&gt;</code></a></li>
		<li><a href="/html/base.php"><code>&lt;base&gt;</code></a></li>
		<li><a href="/html/body.php"><code>&lt;body&gt;</code></a></li>
		<li><a href="/html/head.php"><code>&lt;head&gt;</code></a></li>
		<li><a href="/html/html.php"><code>&lt;html&gt;</code></a></li>
		<li><a href="/html/link.php"><code>&lt;link&gt;</code></a></li>
		<li><a href="/html/meta.php"><code>&lt;meta&gt;</code></a></li>
		<li><a href="/html/script.php"><code>&lt;script&gt;</code></a></li>
		<li><a href="/html/style.php"><code>&lt;style&gt;</code></a></li>
		<li><a href="/html/title.php"><code>&lt;title&gt;</code></a></li>
	</ul>
	<h4>Child Elements</h4>
	<dl>
			<dt><code>&lt;area&gt;</code> &#10549;</dt>
			<dd><a class="needsAttn" href="/html/map.php"><code>&lt;map&gt;</code></a></dd>
			<dt><code>&lt;caption&gt;</code> &#10549;</dt>
			<dd><a href="/html/table.php"><code>&lt;table&gt;</code></a></dd>
			<dt><code>&lt;col&gt;</code> &#10549;</dt>
			<dd><a href="/html/table.php"><code>&lt;table&gt;</code></a></dd>
			<dt><code>&lt;colgroup&gt;</code> &#10549;</dt>
			<dd><a href="/html/table.php"><code>&lt;table&gt;</code></a></dd>
			<dt><code>&lt;datalist&gt;</code> &#10549;</dt>
			<dd><a href="/html/form.php"><code>&lt;form&gt;</code></a></dd>
			<dt><code>&lt;dd&gt;</code> &#10549;</dt>
			<dd><a href="/html/dl.php"><code>&lt;dl&gt;</code></a></dd>
			<dt><code>&lt;dt&gt;</code> &#10549;</dt>
			<dd><a href="/html/dl.php"><code>&lt;dl&gt;</code></a></dd>
			<dt><code>&lt;fieldset&gt;</code> &#10549;</dt>
			<dd><a href="/html/form.php"><code>&lt;form&gt;</code></a></dd>
			<dt><code>&lt;figcaption&gt;</code> &#10549;</dt>
			<dd><a href="/html/figure.php"><code>&lt;figure&gt;</code></a></dd>
			<dt><code>&lt;input&gt;</code> &#10549;</dt>
			<dd><a href="/html/form.php"><code>&lt;form&gt;</code></a></dd>
			<dt><code>&lt;keygen&gt;</code> &#10549;</dt>
			<dd><a href="/html/form.php"><code>&lt;form&gt;</code></a></dd>
			<dt><code>&lt;label&gt;</code> &#10549;</dt>
			<dd><a href="/html/form.php"><code>&lt;form&gt;</code></a></dd>
			<dt><code>&lt;legend&gt;</code> &#10549;</dt>
			<dd><a href="/html/form.php"><code>&lt;form&gt;</code></a></dd>
			<dt><code>&lt;li&gt;</code> &#10549;</dt>
			<dd>
				<a href="/html/ol.php"><code>&lt;ol&gt;</code></a>
				<a href="/html/ul.php"><code>&lt;ul&gt;</code></a>
			</dd>
			<dt><code>&lt;menuitem&gt;</code> &#10549;</dt>
			<dd><a href="/html/menu.php"><code>&lt;menu&gt;</code></a></dd>
			<dt><code>&lt;optgroup&gt;</code> &#10549;</dt>
			<dd><a href="/html/select.php"><code>&lt;select&gt;</code></a></dd>
			<dt><code>&lt;option&gt;</code> &#10549;</dt>
			<dd>
				<a href="/html/form.php"><code>&lt;form&gt;</code></a>
				<a href="/html/select.php"><code>&lt;select&gt;</code></a>
			</dd>
			<dt><code>&lt;output&gt;</code> &#10549;</dt>
			<dd><a href="/html/form.php"><code>&lt;form&gt;</code></a></dd>
			<dt><code>&lt;param&gt;</code> &#10549;</dt>
			<dd><a href="/html/object.php"><code>&lt;object&gt;</code></a></dd>
			<dt><code>&lt;rp&gt;</code> &#10549;</dt>
			<dd><a href="/html/ruby.php"><code>&lt;ruby&gt;</code></a></dd>
			<dt><code>&lt;rt&gt;</code> &#10549;</dt>
			<dd><a href="/html/ruby.php"><code>&lt;ruby&gt;</code></a></dd>
			<dt><code>&lt;source&gt;</code> &#10549;</dt>
			<dd><a href="/html/audio.php"><code>&lt;audio&gt;</code></a></dd>
			<dt><code>&lt;summary&gt;</code> &#10549;</dt>
			<dd><a href="/html/details.php"><code>&lt;details&gt;</code></a></dd>
			<dt><code>&lt;tbody&gt;</code> &#10549;</dt>
			<dd><a href="/html/table.php"><code>&lt;table&gt;</code></a></dd>
			<dt><code>&lt;td&gt;</code> &#10549;</dt>
			<dd><a href="/html/table.php"><code>&lt;table&gt;</code></a></dd>
			<dt><code>&lt;tfoot&gt;</code> &#10549;</dt>
			<dd><a href="/html/table.php"><code>&lt;table&gt;</code></a></dd>
			<dt><code>&lt;th&gt;</code> &#10549;</dt>
			<dd><a href="/html/table.php"><code>&lt;table&gt;</code></a></dd>
			<dt><code>&lt;thead&gt;</code> &#10549;</dt>
			<dd><a href="/html/table.php"><code>&lt;table&gt;</code></a></dd>
			<dt><code>&lt;tr&gt;</code> &#10549;</dt>
			<dd><a href="/html/table.php"><code>&lt;table&gt;</code></a></dd>
			<dt><code>&lt;track&gt;</code> &#10549;</dt>
			<dd><a href="/html/video.php"><code>&lt;video&gt;</code></a></dd>
	</dl>
	<h4>Deprecated Tags</h4>
	<h5>(no examples given)</h5>
	<ul>
		<li><code>&lt;applet&gt;</code></li>
		<li><code>&lt;acronym&gt;</code></li>
		<li><code>&lt;basefont&gt;</code></li>
		<li><code>&lt;big&gt;</code></li>
		<li><code>&lt;center&gt;</code></li>
		<li><code>&lt;dir&gt;</code></li>
		<li><code>&lt;font&gt;</code></li>
		<li><code>&lt;frame&gt;</code></li>
		<li><code>&lt;frameset&gt;</code></li>
		<li><code>&lt;noframes&gt;</code></li>
		<li><code>&lt;tt&gt;</code></li>
	</ul>
</nav>
