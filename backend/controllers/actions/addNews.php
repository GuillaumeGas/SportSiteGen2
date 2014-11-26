<?php

if(isset($_POST['title'])
    && isset($_POST['text'])
    && isset($_POST['author'])
    && isset($_POST['id_photo'])) {

    $title = htmlentities($_POST['title']);
    $author= htmlentities($_POST['author']);
    $text  = htmlentities($_POST['text']);
    $date  = date("Y-m-d H:i:s");

    if(News::add($title, $text, $date, $author, $_POST['id_photo'])) {
        Message::info("News added successfully !");
    } else {
        Message::error("Error when adding the news.");
    }
} else {
    Message::error("Error parameters.");
}

?>