<?php

global $smarty;

$news = News::getAll();
$smarty->assign("ListNews", $news);

?>