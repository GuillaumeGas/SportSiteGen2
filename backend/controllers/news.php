<?php

global $smarty;

$news = array();

if(isset($_GET['id'])) {
    if(!empty($_GET['id'])) {
        $news = News::getFromId($_GET['id']);
        if($news) {
            $coms = NewsCom::getFromNewsId($_GET['id']);
            $smarty->assign("ListComs", $coms);
            $smarty->assign("ShowCom", "true");
            $smarty->assign("News", $news);
        } else {
            $news = News::getAll();
            $smarty->assign("ListNews", $news);
            Message::error("This news doesn't exist !");
        }
    } else {
        Message::error("Id missing !");
        $news = News::getAll();
        $smarty->assign("ListNews", $news);
    }
} else {
    $news = News::getAll();
    $smarty->assign("ListNews", $news);
}


?>