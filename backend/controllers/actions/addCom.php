<?php

if(isset($_GET['id_news'])
   && isset($_GET['text'])) {

} else {
    Message::error("Missing arguments.");
}

?>