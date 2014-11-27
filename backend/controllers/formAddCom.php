<?php

global $bdd;

if(isset($_GET['id_news'])) {
    $news = News::getFromId($_GET['id_news']);
    $smarty->assign("NewsId", $news['id']);
} else {
    $smarty->assign("MissingId", "yes");
    Message::error("Missing id.");
}

?>