<?php

if(isset($_POST['id_news'])) {
    foreach($_POST['id_news'] as $id_news) {
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
} else {
    Message::error("Error parameters.");
}

?>