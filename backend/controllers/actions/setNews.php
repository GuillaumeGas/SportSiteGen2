<?php

if(isset($_POST['id'])
    && isset($_POST['title'])
    && isset($_POST['text'])
    && isset($_POST['author'])
    && isset($_POST['id_photo'])) {

    $id    = $_POST['id'];
    $title = htmlentities($_POST['title']);
    $author= htmlentities($_POST['author']);
    $text  = htmlentities($_POST['text']);
    $date  = date("Y-m-d H:i:s");

    if(News::set($id, $title, $text, $date, $author, $_POST['id_photo'])) {
        Message::info("News modified successfully !");
    } else {
        Message::error("Error when modifying the news.");
    }
} else {
    Message::error("Error parameters.");
}

?>