<?php
    if (!isset($_GET["route"])) {
        $_GET["route"] = "home";
    }
    require_once "includes/header.php";
    require_once "view/" . $_GET["route"] . ".php";
    require_once "includes/footer.php";
?>