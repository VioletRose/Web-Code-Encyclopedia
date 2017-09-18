<?php
    $PAGE_NAME = 'Template';
	$EXTRA_PAGE_HEAD_LINES = array('<link rel="stylesheet" type="text/css" href="/stylesheets/.css">', '<script src="/scripts/.js"></script>');
    require_once($_SERVER["DOCUMENT_ROOT"].'/generichead.php');
?>
<main class="pure-u-1 pure-u-sm-19-24 pure-u-md-17-24 pure-u-lg-5-8 pure-u-xl-5-8">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;This is a template for new pages. The text here will be changed.</p>
</main>	
<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/genericfoot.php');
?>
