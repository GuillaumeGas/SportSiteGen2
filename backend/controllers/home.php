<?php

global $smarty;

$news = News::getAll();
echo var_dump($news);
$smarty->assign("News", $news);

?>