<?php

global $smarty;

$news = array();

if(isset($_GET['id'])) {
    $news = News::getFromId($_GET['id']);
    $coms = NewsCom::getFromNewsId($_GET['id']);
    $smarty->assign("ListComs", $coms);
    $smarty->assign("ShowCom", "true");
    $smarty->assign("News", $news);
} else {
    $news = News::getAll();
    $smarty->assign("ListNews", $news);
}


?>