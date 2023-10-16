<?php
    if (!isset($_GET["route"])) {
        $_GET["route"] = "home";
    }
    require_once "view/template/header.php";
    require_once "view/" . $_GET["route"] . ".php";
    require_once "view/template/footer.php";
?>