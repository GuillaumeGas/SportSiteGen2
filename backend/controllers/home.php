<?php

global $smarty;

News::delNews(4);
if(!News::delNews(6))
    $smarty->assign("err", "err");

$news = News::getAll("No");
$smarty->assign("News", $news);

News::delNews(2);

$news_alone = News::getFromId(2);
$smarty->assign("New2", $news_alone);


?>