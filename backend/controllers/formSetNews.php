<?php

global $smarty;

if(isset($_GET['id'])) {
    $news = News::getFromId($_GET['id']);
    $smarty->assign("News", $news);
} else {
    $smarty->assign("MissingId", "yes");
    Message::error("Missing id.");
}


?>