<?php

if(isset($_POST['id']) && count($_POST > 0)) {
    foreach($_POST['id'] as $id_news) {
        //first, we delete all coms of the news
        $coms = NewsCom::getFromNewsId($id_news);
        if(count($coms) > 0) {
            foreach($coms as $com) {
                NewsCom::del($com['id']);
            }
        }

        News::del($id_news);
    }
    Message::info("Removal done.");
} else if(isset($_GET['id_news']) && !empty($_GET['id_news'])) {
    if(News::del($_GET['id_news'])) {
        Message::info("Removal done.");
    } else {
        Message::error("Error, the news doesn't exist.");
    }
} else {
    Message::error("Error parameters.");
}

?>