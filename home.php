<?php 
	include('./head.inc');
	$articles = $page->children;
	foreach ($articles as $article) {
		include ('./test.php');
	}
	include('./foot.inc');
?>