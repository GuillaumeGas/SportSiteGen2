<?php

global $smarty;

if(isset($_GET['id'])) {
    $news = News::getFromId($_GET['id']);
    $photos = Photo::getAll();
    $ids = array();
    foreach ($photos as $photo) {
        $ids[] = $photo['Id'];
    }
    $smarty->assign("News", $news);
    $smarty->assign("Photos", $ids);
} else {
    $smarty->assign("MissingId", "yes");
    Message::error("Missing id.");
}


?>