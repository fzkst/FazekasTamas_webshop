<?php
session_start();
$controller = "";
$oldal = "termekek_lista";
if (!isset($_GET['oldal'])){
    $controller = "controllers/fo_oldal.php";
} else {
    $oldal = $_GET['oldal'];
    if (file_exists("controllers/$oldal.php")){
        $controller = "controllers/$oldal.php";
    } else {
        $controller = "controllers/errors/404.php";
    }
}
include "views/_main.php";

?>