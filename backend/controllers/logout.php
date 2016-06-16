<?php

$_SESSION['admin_connected'] = false;
unset($_SESSION);
unset($_POST);
header("Location: index.php");