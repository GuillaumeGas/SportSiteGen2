<?php

global $smarty;

$news = News::getAll();
$smarty->assign("News", $news);

?>