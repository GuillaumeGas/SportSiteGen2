<?php

if (isset($_POST['templateName']) && !empty($_POST['templateName'])) {
    if (file_exists(_FRONT_."templates/".$_POST['templateName'])) {
        if (Template::setCurrent($_POST['templateName'])) {
            Message::info("Template updated !");
        } else {
            Message::err("Error while updating template.");
        }
    } else {
        Message::error("Error, template doesn't exist.");
    }
} else {
    Message::error("Missing parameter.");
}